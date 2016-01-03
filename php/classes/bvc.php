<?php
//Carga de definiciónes de Clases usadas en ésta Clase.
include_once('conexion.php');
include_once('comun.php');
// libreria nusoap
include_once('nusoap.php');

/**______________________________________________CLASE USUARIO______________________________________________**/

class Bvc
{
	//Variables y/o propiedades de la clase.
	//Variables servicio web
	private $Id=17;
	private $Ip='186.116.1.2';
	private $Usuario='pacific';
	private $Clave='2010%p4C1f1c';
	private $ServicioWeb = 'http://200.1.86.227/ServiceNemotecnico/ServiceNemotecnico.jws?wsdl';
	//Variables de Gen
	private $FechaRegistroGen;
	private $PapelGen;
	private $PrecioCierreGen;
	private $VariacionGen;
	private $VolumenGen;
	private $PrecioCierreenteriorGen;
	//Variables de Cap
	private $FechaRegistroCap;
	private $PapelCap;
	private $PrecioCierreCap;
	private $VariacionCap;
	private $VolumenCap;
	private $PrecioCierreenteriorCap;
	//Variables de C20
	private $FechaRegistroCd;
	private $PapelCd;
	private $PrecioCierreCd;
	private $VariacionCd;
	private $VolumenCd;
	private $PrecioCierreenteriorCd;
	//Variables de PRE
	private $FechaRegistro;
	private $Papel;
	private $PrecioCierre;
	private $PrecioMenor;
	private $PrecioMedio;
    private $PrecioMayor;
    private $Unidad;
	private $Variacion;
	private $Volumen;
	private $PrecioCierreenterior;
	private $FechaPrecioCierreAnterior;
	private $Conexion;
	private $Error;
	private $TipoError;

	//Constructor.
	function Bvc()
	{ }

	//***************************************//
	//*MANEJO DE LAS PROPIEDADES DE LA CLASE*//
	//***************************************//

//sWsdl
	//Establecer sWsdl.
	//Devolver Id.
	public function ObtenerId()
	{
		return $this->Id;
	}
	//Devolver la Ip.
	public function ObtenerIp()
	{
		return $this->Ip;
	}
	//Devolver Usuario.
	public function ObtenerUsuario()
	{
		return $this->Usuario;
	}
	//Devolver Clave.
	public function ObtenerClave()
	{
		return $this->Clave;
	}
	//Devolver el ServicioWeb.
	public function ObtenerServicioWeb()
	{
		return $this->ServicioWeb;
	}

//GEN
	//Establecer la FechaRegistroGen.
	public function EstablecerFechaRegistroGen($fechaRegistroGen)
	{
		$this->FechaRegistroGen = $fechaRegistroGen;
	}
	//Devolver la FechaRegistroGen.
	public function ObtenerFechaRegistroGen()
	{
		return $this->FechaRegistroGen;
	}
	//Establecer el PapelGen.
	public function EstablecerPapelGen($papelGen)
	{
		$this->PapelGen = $papelGen;
	}
	//Devolver el PapelGen.
	public function ObtenerPapelGen()
	{
		return $this->PapelGen;
	}
	//Establecer el PrecioCierreGen.
	public function EstablecerPrecioCierreGen($precioCierreGen)
	{
		$this->PrecioCierreGen = $precioCierreGen;
	}
	//Devolver el PrecioCierreGen.
	public function ObtenerPrecioCierreGen()
	{
		return $this->PrecioCierreGen;
	}
	//Establecer la VariacionGen.
	public function EstablecerVariacionGen($variacionGen)
	{
		$this->VariacionGen = $variacionGen;
	}
	//Devolver la VariacionGen.
	public function ObtenerVariacionGen()
	{
		return $this->VariacionGen;
	}
	//Establecer el VolumenGen.
	public function EstablecerVolumenGen($volumenGen)
	{
		$this->VolumenGen = $volumenGen;
	}
	//Devolver el VolumenGen.
	public function ObtenerVolumenGen()
	{
		return $this->VolumenGen;
	}
	//Establecer el PrecioCierreenteriorGen.
	public function EstablecerPrecioCierreenteriorGen($precioCierreenteriorGen)
	{
		$this->PrecioCierreenteriorGen = $precioCierreenteriorGen;
	}
	//Devolver el PrecioCierreenteriorGen.
	public function ObtenerPrecioCierreenteriorGen()
	{
		return $this->PrecioCierreenteriorGen;
	}


//CAP

	//Establecer la FechaRegistroCap.
	public function EstablecerFechaRegistroCap($fechaRegistroCap)
	{
		$this->FechaRegistroCap = $fechaRegistroCap;
	}
	//Devolver la FechaRegistroCap.
	public function ObtenerFechaRegistroCap()
	{
		return $this->FechaRegistroCap;
	}
	//Establecer el PapelCap.
	public function EstablecerPapelCap($papelCap)
	{
		$this->PapelCap = $papelCap;
	}
	//Devolver el PapelCap.
	public function ObtenerPapelCap()
	{
		return $this->PapelCap;
	}
	//Establecer el PrecioCierreCap.
	public function EstablecerPrecioCierreCap($precioCierreCap)
	{
		$this->PrecioCierreCap = $precioCierreCap;
	}
	//Devolver el PrecioCierreCap.
	public function ObtenerPrecioCierreCap()
	{
		return $this->PrecioCierreCap;
	}
	//Establecer la VariacionCap.
	public function EstablecerVariacionCap($variacionCap)
	{
		$this->VariacionCap = $variacionCap;
	}
	//Devolver la VariacionCap.
	public function ObtenerVariacionCap()
	{
		return $this->VariacionCap;
	}
	//Establecer el VolumenCap.
	public function EstablecerVolumenCap($volumenCap)
	{
		$this->VolumenCap = $volumenCap;
	}
	//Devolver el VolumenCap.
	public function ObtenerVolumenCap()
	{
		return $this->VolumenCap;
	}
	//Establecer el PrecioCierreenteriorCap.
	public function EstablecerPrecioCierreenteriorCap($precioCierreenteriorCap)
	{
		$this->PrecioCierreenteriorCap = $precioCierreenteriorCap;
	}
	//Devolver el PrecioCierreenteriorCap.
	public function ObtenerPrecioCierreenteriorCap()
	{
		return $this->PrecioCierreenteriorCap;
	}

//CD


	//Establecer la FechaRegistroCd.
	public function EstablecerFechaRegistroCd($fechaRegistroCd)
	{
		$this->FechaRegistroCd = $fechaRegistroCd;
	}
	//Devolver la FechaRegistroCd.
	public function ObtenerFechaRegistroCd()
	{
		return $this->FechaRegistroCd;
	}
	//Establecer el PapelCd.
	public function EstablecerPapelCd($papelCd)
	{
		$this->PapelCd = $papelCd;
	}
	//Devolver el PapelCd.
	public function ObtenerPapelCd()
	{
		return $this->PapelCd;
	}
	//Establecer el PrecioCierreCd.
	public function EstablecerPrecioCierreCd($precioCierreCd)
	{
		$this->PrecioCierreCd = $precioCierreCd;
	}
	//Devolver el PrecioCierreCd.
	public function ObtenerPrecioCierreCd()
	{
		return $this->PrecioCierreCd;
	}
	//Establecer la VariacionCd.
	public function EstablecerVariacionCd($variacionCd)
	{
		$this->VariacionCd = $variacionCd;
	}
	//Devolver la VariacionCd.
	public function ObtenerVariacionCd()
	{
		return $this->VariacionCd;
	}
	//Establecer el VolumenCd.
	public function EstablecerVolumenCd($volumenCd)
	{
		$this->VolumenCd = $volumenCd;
	}
	//Devolver el VolumenCd.
	public function ObtenerVolumenCd()
	{
		return $this->VolumenCd;
	}
	//Establecer el PrecioCierreenteriorCd.
	public function EstablecerPrecioCierreenteriorCd($precioCierreenteriorCd)
	{
		$this->PrecioCierreenteriorCd = $precioCierreenteriorCd;
	}
	//Devolver el PrecioCierreenteriorCd.
	public function ObtenerPrecioCierreenteriorCd()
	{
		return $this->PrecioCierreenteriorCd;
	}


//PRE

	//Establecer la FechaRegistro.
	public function EstablecerFechaRegistro($fechaRegistro)
	{
		$this->FechaRegistro = $fechaRegistro;
	}
	//Devolver la FechaRegistro.
	public function ObtenerFechaRegistro()
	{
		return $this->FechaRegistro;
	}
	//Establecer el Papel.
	public function EstablecerPapel($papel)
	{
		$this->Papel = $papel;
	}
	//Devolver el Papel.
	public function ObtenerPapel()
	{
		return $this->Papel;
	}
	//Establecer el PrecioCierre.
	public function EstablecerPrecioCierre($precioCierre)
	{
		$this->PrecioCierre = $precioCierre;
	}
	//Devolver el PrecioCierre.
	public function ObtenerPrecioCierre()
	{
		return $this->PrecioCierre;
	}
	//Establecer el PrecioMenor.
	public function EstablecerPrecioMenor($precioMenor)
	{
		$this->PrecioMenor = $precioMenor;
	}
	//Devolver el PrecioMenor.
	public function ObtenerPrecioMenor()
	{
		return $this->PrecioMenor;
	}
	//Establecer el PrecioMedio.
	public function EstablecerPrecioMedio($precioMedio)
	{
		$this->PrecioMedio = $precioMedio;
	}
	//Devolver el PrecioMedio.
	public function ObtenerPrecioMedio()
	{
		return $this->PrecioMedio;
	}
	//Establecer el PrecioMayor.
	public function EstablecerPrecioMayor($precioMayor)
	{
		$this->PrecioMayor = $precioMayor;
	}
	//Devolver el PrecioMayor.
	public function ObtenerPrecioMayor()
	{
		return $this->PrecioMayor;
	}
	//Establecer la Unidad.
	public function EstablecerUnidad($unidad)
	{
		$this->Unidad = $unidad;
	}
	//Devolver la Unidad.
	public function ObtenerUnidad()
	{
		return $this->Unidad;
	}

	//Establecer la Variacion.
	public function EstablecerVariacion($variacion)
	{
		$this->Variacion = $variacion;
	}
	//Devolver la Variacion.
	public function ObtenerVariacion()
	{
		return $this->Variacion;
	}
	//Establecer el Volumen.
	public function EstablecerVolumen($volumen)
	{
		$this->Volumen = $volumen;
	}
	//Devolver el Volumen.
	public function ObtenerVolumen()
	{
		return $this->Volumen;
	}
	//Establecer el PrecioCierreenterior.
	public function EstablecerPrecioCierreAnterior($precioCierreenterior)
	{
		$this->PrecioCierreAnterior = $precioCierreenterior;
	}
	//Devolver el PrecioCierreenterior.
	public function ObtenerPrecioCierreenterior()
	{
		return $this->PrecioCierreAnterior;
	}
	//Establecer el FechaPrecioCierreAnterior.
	public function EstablecerFechaPrecioCierreAnterior($fechaPrecioCierreAnterior)
	{
		$this->FechaPrecioCierreAnterior = $fechaPrecioCierreAnterior;
	}
	//Devolver el FechaPrecioCierreAnterior.
	public function ObtenerFechaPrecioCierreAnterior()
	{
		return $this->FechaPrecioCierreAnterior;
	}
	//Devolver el valor de la variable Error.
	public function ObtenerError()
	{
		return $this->Error;
	}
	//Devolver el tipo de error ocasionado (0->Sin Error, 1->Error de sistema o de programación, 2->Error con datos).
	public function ObtenerTipoError()
	{
		return $this->TipoError;
	}

	//***************************************//
	//***MÉTODOS OPERACIONALES DE LA CLASE***//
	//***************************************//

//Obtener el listado de Bvc.
	public function conectarBvc()
	{
		ini_set("default_socket_timeout",1200);
		$result='';
		$this->TipoError = 0;								//Establecer que no hay error.
		try{
		     // Conexion con WebService
		     $client = new nusoap_client($this->ServicioWeb, true);
		     //print_r($client);
		     $e = $client->getError();
		     if ($e) {

		        echo '<h2>Constructor error: </h2><pre>' . $e . '</pre>';
				$this->TipoError = 1;		//Establecer el indicador de error en true para determinar que hubo error.
				$this->Error ="Constructor error: ".$e->getMessage()."\nError Conectando con servicio web de BVC";
		     }

		     $proxy = $client->getProxy();

		     $param = array(
		        'in0' => $this->Id,
		        'in1' => $this->Ip,
		        'in2' => $this->Usuario,
		        'in3' => $this->Clave
		      );
		     // Consumo de la function XMLNemotecnico pasando como parametros los permisionados
		     $return = $client->call("XMLNemotecnico", $param);

		  if ($proxy->fault) {
		                echo '<h2>Fault</h2><pre>';
		                print_r($return);
		                echo '</pre>';
		  	}
		  	print_r($return);

			//se carga el resultado en un objeto XML
			$xml =  simplexml_load_string($return);

			print_r($xml);

			$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
			$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.

			if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
			{
				$sentencia = sprintf("CALL Pst_insertarStockBvc(Convert('%s',DateTime),'%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f',Convert('%s',DateTime))",
				//accion IgbcGen
				mysqli_real_escape_string($this->Conexion,$xml->Instrumento[0]->FechaRegistro),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->PrecioCierreAnterior)),
				//accion IgbcCap
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->PrecioCierreAnterior)),
				//accion IgbcC20
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->PrecioCierreAnterior)),
				//accion pre
				//.$csv_end;
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMenor)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMedio)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMayor)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Unidad)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioCierreAnterior)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->FechaPrecioCierreAnterior)));


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
				$this->Error = "Error Conectando con BVC".$e->getMessage();
		}
	}

public function conectarBvcHistorico()
	{
		ini_set("default_socket_timeout",1200);
		$result='';
		$this->TipoError = 0;								//Establecer que no hay error.
		try{
		     // Conexion con WebService
		     $client = new nusoap_client($this->ServicioWeb, true);
		     $e = $client->getError();
		     if ($e) {
		        echo '<h2>Constructor error: </h2><pre>' . $e . '</pre>';
				$this->TipoError = 1;		//Establecer el indicador de error en true para determinar que hubo error.
				$this->Error ="Constructor error: ".$e->getMessage()."\nError Conectando con servicio web de BVC";
		     }
		     $proxy = $client->getProxy();

		     $param = array(
		        'in0' => $this->Id,
		        'in1' => $this->Ip,
		        'in2' => $this->Usuario,
		        'in3' => $this->Clave
		      );
		     // Consumo de la function XMLNemotecnico pasando como parametros los permisionados
		     $return = $client->call("XMLNemotecnico", $param);

		  if ($proxy->fault) {
		                echo '<h2>Fault</h2><pre>';
		                print_r($return);
		                echo '</pre>';
		  	}

			//se carga el resultado en un objeto XML
			$xml =  simplexml_load_string($return);

			$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
			$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.

			if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
			{
				$sentencia = sprintf("CALL Pst_insertarStockBvcHistorico(Convert('%s',DateTime),'%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f','%f',Convert('%s',DateTime))",
				//accion IgbcGen
				mysqli_real_escape_string($this->Conexion,$xml->Instrumento[0]->FechaRegistro),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[0]->PrecioCierreAnterior)),
				//accion IgbcCap
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[1]->PrecioCierreAnterior)),
				//accion IgbcC20
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[2]->PrecioCierreAnterior)),
				//accion pre
				//.$csv_end;
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioCierre)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMenor)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMedio)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioMayor)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Unidad)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Variacion)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->Volumen)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->PrecioCierreAnterior)),
				mysqli_real_escape_string($this->Conexion,str_replace(",","",$xml->Instrumento[3]->FechaPrecioCierreAnterior)));

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
				$this->Error = "Error Conectando con BVC".$e->getMessage();
		}
	}


	public function obtenerStockBvc()
	{

		$this->TipoError = 0;								//Establecer que no hay error.
		$listadoBvc = $listadoBvc[0][13];					//Matriz de resultados.
		$consulta = "";										//Consulta a realizar en la base de datos.
		$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
		$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.
		// variables de CSV
		$csv_end = "
";
		$csv_sep = "|";
		$csvFileGen = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataGen.csv";
		$csvFileCap = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataCap.csv";
		$csvFileC20 = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataC20.csv";
		$csvFilePre = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataPre.csv";
		$csvGen="";
		$csvCap="";
		$csvC20="";
		$csvPre="";
		$handle="";

		if (!$handle = fopen($csvFileGen, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handle, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handle);
		$handle="";

		if (!$handle = fopen($csvFileCap, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handle, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handle);
		$handle="";

		if (!$handle = fopen($csvFileC20, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handle, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handle);
		$handle="";

		if (!$handle = fopen($csvFilePre, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handle, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handle);
		$handle="";

		if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
		{
			//se genera la consulta que ejecuta el procedimiento que obtiene los cursos.
			$consulta = sprintf("Call Pst_ObtenerStockBvc();");

			if ($resultado = mysqli_query($this->Conexion, $consulta))		//Comprobar si ocurrió error con la operación de inserción.
			{
				if (mysqli_num_rows($resultado) > 0)
				{
					//Guardamos resultados en CSV.
					while($fila = mysqli_fetch_array($resultado))
						{

						//Datos IGBC-GEN
						$csvGen=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcGen"].$csv_sep.$fila["VolumenIgbcGen"].$csv_sep.$fila["PrecioCierreAnteriorIgbcGen"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileGen, 'a+');
						fwrite ($tmp, $csvGen);
						fclose ($tmp);
						//Datos IGBC-CAP
						$csvCap=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcCap"].$csv_sep.$fila["VolumenIgbcCap"].$csv_sep.$fila["PrecioCierreAnteriorIgbcCap"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileCap, 'a+');
						fwrite ($tmp, $csvCap);
						fclose ($tmp);
						//Datos IGBC-C20
						$csvC20=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcC20"].$csv_sep.$fila["VolumenIgbcC20"].$csv_sep.$fila["PrecioCierreAnteriorIgbcC20"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileC20, 'a+');
						fwrite ($tmp, $csvC20);
						fclose ($tmp);
						//Datos PRE
						$csvPre=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierrePrec"].$csv_sep.$fila["UnidadPrec"].$csv_sep.$fila["PrecioCierreAnteriorPrec"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFilePre, 'a+');
						fwrite ($tmp, $csvPre);
						fclose ($tmp);
						//Se cierra archivo CSV
						}
				}
				else
				{
					$this->TipoError = 2;
					$this->Error = "No hay cursos registrados.";
				}
				mysqli_free_result($resultado);
			}
			else
			{
				$this->TipoError = 1;
				$this->Error = mysqli_error($this->Conexion);		//Almacenar el error en la propiedad Error de la clase.
			}
			mysqli_close($this->Conexion);
		}
		else
		{
			$this->TipoError = 1;							//Establecer que hubo error en sistema.
			$this->Error = $objConexion->ObtenerError();	//Almacenar error ocurrido en conexión.
		}
			//return $return;
	}

	public function obtenerStockBvcHistorico()
	{
		$this->TipoError = 0;								//Establecer que no hay error.
		$listadoBvc = $listadoBvc[0][13];						//Matriz de resultados.
		$consulta = "";										//Consulta a realizar en la base de datos.
		$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
		$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.
		// variables de CSV
		$csv_end = "
";
		$csv_sep = "|";
		$csvFileGenH = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataGenH.csv";
		$csvFileCapH = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataCapH.csv";
		$csvFileC20H = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataC20H.csv";
		$csvFilePreH = "E:\\xampp\\htdocs\\pacific\\bvc\\csv\\dataPreH.csv";
		$csvGenH="";
		$csvCapH="";
		$csvC20H="";
		$csvPreH="";
		$handleH="";

		if (!$handleH = fopen($csvFileGenH, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handleH, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handleH);
		$handle="";

		if (!$handleH = fopen($csvFileCapH, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handleH, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handleH);
		$handleH="";

		if (!$handleH = fopen($csvFileC20H, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handleH, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handleH);
		$handleH="";

		if (!$handleH = fopen($csvFilePreH, "w")) {
		    echo "Cannot open file";
		    exit;
		}
		if (fwrite($handleH, utf8_decode("")) === FALSE) {
		    echo "Cannot write to file";
		    exit;
		}
		fclose($handleH);
		$handleH="";

		if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
		{
			//se genera la consulta que ejecuta el procedimiento que obtiene los cursos.
			$consulta = sprintf("Call Pst_ObtenerStockBvcHistorico();");

			if ($resultado = mysqli_query($this->Conexion, $consulta))		//Comprobar si ocurrió error con la operación de inserción.
			{
				if (mysqli_num_rows($resultado) > 0)
				{
					//Guardamos resultados en CSV.
					while($fila = mysqli_fetch_array($resultado))
						{
						//Datos IGBC-GEN
						$csvGenH=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcGen"].$csv_sep.$fila["VolumenIgbcGen"].$csv_sep.$fila["PrecioCierreAnteriorIgbcGen"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileGenH, 'a+');
						fwrite ($tmp, $csvGenH);
						fclose ($tmp);
						//Datos IGBC-CAP
						$csvCapH=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcCap"].$csv_sep.$fila["VolumenIgbcCap"].$csv_sep.$fila["PrecioCierreAnteriorIgbcCap"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileCapH, 'a+');
						fwrite ($tmp, $csvCapH);
						fclose ($tmp);
						//Datos IGBC-C20
						$csvC20H=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierreIgbcC20"].$csv_sep.$fila["VolumenIgbcC20"].$csv_sep.$fila["PrecioCierreAnteriorIgbcC20"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFileC20H, 'a+');
						fwrite ($tmp, $csvC20H);
						fclose ($tmp);
						//Datos PRE
						$csvPreH=$fila["FechaRegistro"].$csv_sep.$fila["PrecioCierrePrec"].$csv_sep.$fila["UnidadPrec"].$csv_sep.$fila["PrecioCierreAnteriorPrec"].$csv_end;
						//Generamos el csv de todos los datos
						$tmp = fopen ($csvFilePreH, 'a+');
						fwrite ($tmp, $csvPreH);
						fclose ($tmp);
						//Se cierra archivo CSV
						}
				}
				else
				{
					$this->TipoError = 2;
					$this->Error = "No hay cursos registrados.";
				}
				mysqli_free_result($resultado);
			}
			else
			{
				$this->TipoError = 1;
				$this->Error = mysqli_error($this->Conexion);		//Almacenar el error en la propiedad Error de la clase.
			}
			mysqli_close($this->Conexion);
		}
		else
		{
			$this->TipoError = 1;							//Establecer que hubo error en sistema.
			$this->Error = $objConexion->ObtenerError();	//Almacenar error ocurrido en conexión.
		}
			//return $return;
	}

	public function obtenerStockBvcDatos()
	{
		$this->TipoError = 0;								//Establecer que no hay error.
		$listadoBvc = $listadoBvc[0][13];						//Matriz de resultados.
		$consulta = "";										//Consulta a realizar en la base de datos.
		$objConexion = new Conexion();						//Objeto conexión para establecer la conexión con la BD.
		$this->Conexion = $objConexion->conectarServidor();	//Obtener conexión al servidor de base de datos.

		if(!$objConexion->ObtenerIndicadorError())			//Comprobar si ocurrió error con la operación de conexión a la base de datos.
		{
			//se genera la consulta que ejecuta el procedimiento que obtiene los cursos.
			$consulta = sprintf("Call Pst_ObtenerStockBvcDatos();");

			if ($resultado = mysqli_query($this->Conexion, $consulta))		//Comprobar si ocurrió error con la operación de inserción.
			{
				if (mysqli_num_rows($resultado) > 0)
				{
					//Guardamos resultados en CSV.
					while($fila = mysqli_fetch_array($resultado))
						{

						//Datos PRE
						$this->FechaRegistro = $fila["FechaRegistro"]." BOG";
						$this->PrecioCierre = $fila["PrecioCierrePrec"];
						$this->Variacion = $fila["VariacionPrec"];
						$this->Unidad = $fila["UnidadPrec"];
						$this->PrecioCierreAnterior = $fila["PrecioCierreAnteriorPrec"];
						$this->PrecioMayor = $fila["PrecioMayorPrec"];
						$this->PrecioMenor = $fila["PrecioMenorPrec"];

						}
				}
				else
				{
					$this->TipoError = 2;
					$this->Error = "No hay cursos registrados.";
				}
				mysqli_free_result($resultado);
			}
			else
			{
				$this->TipoError = 1;
				$this->Error = mysqli_error($this->Conexion);		//Almacenar el error en la propiedad Error de la clase.
			}
			mysqli_close($this->Conexion);
		}
		else
		{
			$this->TipoError = 1;							//Establecer que hubo error en sistema.
			$this->Error = $objConexion->ObtenerError();	//Almacenar error ocurrido en conexión.
		}
			//return $return;
	}
}//_______________________________FIN DE LA CLASE Bvc.

?>
