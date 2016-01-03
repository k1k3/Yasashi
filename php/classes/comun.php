<?php
/**______________________________________________CLASE COMUN______________________________________________**/

class Comun{

	public function gestionarArchivoError($mensajeError, $rutaArchivo)
	{
		$identificadorArchivo = fopen($rutaArchivo."log ".date("y-m-d").".rtf","a+");
		fwrite($identificadorArchivo, "\n".date("h:i:s")." ".$mensajeError);
		fclose($identificadorArchivo);
	}
}

?>