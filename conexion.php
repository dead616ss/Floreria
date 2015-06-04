<?php
$servidor="localhost";
$usuario="root";
$clave="";
$Base_datos="floreria";

$conexion=  mysql_connect($servidor, $usuario, $clave)or die("Error al establecer la conexion". mysql_error());


mysql_select_db($Base_datos, $conexion);


?>