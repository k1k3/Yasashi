<?php
// page1.php
require_once("usuario.php");
$usuario=new Usuario();
//$usuario->insertarUsuario('Anggy','65dsf465');
echo $usuario->obtenerStockBvcHistorico('Anggy', '65dsf465');
?>