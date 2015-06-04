<?php
include "conexion.php";
$id=$_POST['Id'];

$sql="SELECT * FROM producto where Id_producto='$id'";
$resp=mysql_query($sql,$conexion);

$datos=array();
$i=0;
if($resp){
while($fila=mysql_fetch_assoc($resp)){
  $datos[$i]=$fila;
  $i=$i+1;
}
}else{
echo "Error al consultar: ".mysql_error();
}
mysql_close($conexion);
echo json_encode($datos);
?>

