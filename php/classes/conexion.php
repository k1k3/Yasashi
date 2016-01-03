<?php
/**______________________________________________CLASE CONEXION______________________________________________**/

class Conexion{
	private $Host = 'localhost';
	private $BaseDatos = "yasashi";
	private $Usuario = "root";
	private $Contrasena = "123456";
	private $IndicadorError;
	private $Error;
	private $Conexion;

	//***************************************//
	//*MANEJO DE LAS PROPIEDADES DE LA CLASE*//
	//***************************************//

	//Obtener el host donde está el motor de base de datos.
	private function ObtenerHost()
	{
		return $this->Host;
	}
	//Obtener el nombre de la base de datos usada.
	private function ObtenerBaseDatos()
	{
		return $this->BaseDatos;
	}
	//Obtener el usuario de acceso al motor de base de datos.
	private function ObtenerUsuario()
	{
		return $this->Usuario;
	}
	//Obtener la contraseña para acceder al motor de base de datos.
	private function ObtenerContrasena()
	{
		return $this->Contrasena;
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

	//Realizar la conexión al motor de base de datos usado.
	public function conectarServidor()
	{
		$this->IndicadorError = false;
		try
		{
			$this->Conexion = mysqli_connect($this->ObtenerHost(),$this->ObtenerUsuario(),$this->ObtenerContrasena(),$this->ObtenerBaseDatos());
		    if(mysqli_connect_errno())
		    {
		        throw new Exception('¡Conexiòn a base de datos falló!');
	    	}
		}
		catch (Exception $e)
		{
		    $this->IndicadorError = true;		//Establecer el indicador de error en true para determinar que hubo error.
			$this->Error = $e->getMessage()."\nError MySql: ".mysqli_connect_error();
		}

		return $this->Conexion;		//Retornar la conexión realizada.
	}

	//Realizar la conexión al motor de base de datos usado.
	public function desconectarServidor()
	{
		$this->IndicadorError = false;
		try
		{
			mysqli_close($this->Conexion);
		    if(mysqli_connect_errno())
		    {
		        throw new Exception('¡Desconexiòn a base de datos falló!');
	    	}
		}
		catch (Exception $e)
		{
		    $this->IndicadorError = true;		//Establecer el indicador de error en true para determinar que hubo error.
			$this->Error = $e->getMessage()."\nError MySql: ".mysqli_connect_error();
		}

		return true;		//Retornar la desconexión realizada.
	}
}

?>