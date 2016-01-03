<?php
/**______________________________________________CLASE USUARIO______________________________________________**/
class DetalleUsuario extends Usuario{
	private $Nombre = '';
	private $Apellido = '';
	private $FechaNacimiento = '';
	private $Genero = '';
	private $Nacionalidad = '';

	//***************************************//
	//*MANEJO DE LAS PROPIEDADES DE LA CLASE*//
	//***************************************//

	//Obtener el nombre.
	private function ObtenerNombre()
	{
		return $this->Nombre;
	}
	//Obtener el Apellido.
	private function ObtenerApellido()
	{
		return $this->Apellido;
	}
	//Obtener la FechaNacimiento.
	private function ObtenerFechaNacimiento()
	{
		return $this->FechaNacimiento;
	}
	//Obtener la Genero.
	private function ObtenerGenero()
	{
		return $this->Genero;
	}
	//Obtener la Nacionalidad.
	private function ObtenerNacionalidad()
	{
		return $this->Nacionalidad;
	}


	//***************************************//
	//***MÉTODOS OPERACIONALES DE LA CLASE***//
	//***************************************//

	
}

?>