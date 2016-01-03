<?php
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

	
}

?>