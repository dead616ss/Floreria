<?php 
include "conexion.php";
$sql="SELECT * FROM producto";
$resp=mysql_query($sql, $conexion);

$arreglo = array();
$i=0;

if($resp){
while ($dato=mysql_fetch_assoc($resp)) {
	$arreglo[$i]=$dato;
	$i=$i+1;
}
}else{
echo "Error al consultar los datos".mysql_error();
}
echo json_encode($arreglo);
mysql_close($conexion);
 ?>