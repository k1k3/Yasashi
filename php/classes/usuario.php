<?php
require_once("conexion.php");
/**______________________________________________CLASE USUARIO______________________________________________**/

class Usuario{
	private $IdEmail = '';
	private $Pass = '';
	private $IndicadorError;
	private $Error;
	private $Conexion;

	//***************************************//
	//*MANEJO DE LAS PROPIEDADES DE LA CLASE*//
	//***************************************//

	//Obtener el IdEmail donde está el motor de base de datos.
	private function ObtenerIdEmail()
	{
		return $this->IdEmail;
	}
	//Obtener el Pass.
	private function ObtenerPass()
	{
		return $this->Pass;
	}
	//Obtener valor que indica si hubo error o no.
	public function ObtenerIndicadorError()
	{
		return $this->IndicadorError;
	}
	//Obtener el error producido.
	public function ObtenerError()
	{
		return $this->Error;
	}

	//***************************************//
	//***MÉTODOS OPERACIONALES DE LA CLASE***//
	//***************************************//

	//Obtener el listado de Bvc.
	public function insertarUsuario($IdPass, $Pass)
	{
		$result='';
		$this->TipoError = 0;
		$Pass = $this->crypt_blowfish_bydinvaders($Pass);								//Establecer que no hay error.
		try{
		    $objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
			$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.

			if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
			{
				$sentencia = "CALL Pro_insertarUsuario('$IdPass','$Pass')";
				
				//Llamada al procedimiento almacenado que realiza la inserción en la base de datos.
				if (!mysqli_query($this->Conexion, $sentencia))			//Comprobar si ocurrió error con la operación de inserción.
				{
					$this->TipoError = 1;								//Asignar error de sistema.
					$this->Error = mysqli_error($this->Conexion);	//Almacenar el error en la propiedad Error de la clase.
				}

				mysqli_close($this->Conexion);
			}
			else
			{
				$this->TipoError = 1;							//Asignar error de sistema.
				$this->Error = $objConexion->ObtenerError();	//Obtener el error que ocurrió en la conexión y asignarlo a la propiedad Error de la clase.
			}

			//return $return;

		} catch (Exception $e) {
				$this->TipoError = 1;		//Establecer el indicador de error en true para determinar que hubo error.
				$this->Error = "Error Insertando usuario".$e->getMessage();
		}
	}

	public function obtenerStockBvcHistorico($IdEmail, $Pass)
	{

		$this->TipoError = 0;								//Establecer que no hay error.
		$consulta = "";										//Consulta a realizar en la base de datos.
		$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
		$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.

		if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
		{
			//se genera la consulta que ejecuta el procedimiento que obtiene los cursos.

			$consulta = "Call Pro_ObtenerPass('$IdEmail')";
			
			if ($resultado = mysqli_query($this->Conexion, $consulta))		//Comprobar si ocurrió error con la operación de inserción.
			{
				if (mysqli_num_rows($resultado) > 0)
				{
					while($fila = mysqli_fetch_array($resultado)){
						$passwordenBD = $fila["Pass"];
						if( crypt($Pass, $passwordenBD) == $passwordenBD) {
							return true;
						}		
					}
				}
				else
				{
					$this->TipoError = 2;
					$this->Error = "No hay Usuario.";
					return $this->Error;
				}
				
			}
			
			mysqli_close($this->Conexion);
		}
		else
		{
			$this->TipoError = 1;							//Establecer que hubo error en sistema.
			$this->Error = $objConexion->ObtenerError();	//Almacenar error ocurrido en conexión.
		}
			
	}

	public function crypt_blowfish_bydinvaders($password, $digito = 7) {
		$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$salt = sprintf('$2a$%02d$', $digito);
		for($i = 0; $i < 22; $i++)
		{
			$salt .= $set_salt[mt_rand(0, 22)];
		}
		return crypt($password, $salt);
	}
}

?>