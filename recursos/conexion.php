<?php 

// $conexion = new mysqli('localhost','id16777589_root','papapapa1212AC!','id16777589_base_arbell'); 000webhost
// $conexion = new mysqli('localhost','u604223767_root','papapapa1212AC','u604223767_base_arbell'); //codemid.net
$conexion = new mysqli('localhost','root','','base_arbell');

//$conexion = new mysqli('br6vrwqejcpdav29tluj-mysql.services.clever-cloud.com','usz8khcb6vchmslt','1DjIm6ncGfmq6N81hRtt','br6vrwqejcpdav29tluj'); //clever cloud

$conexion->query("SET NAMES 'utf8'");
if($conexion->connect_error) { 
	die( 'Error: ('. $conexion->connect_errno .' )'. $conexion->connect_error); 
}
?>