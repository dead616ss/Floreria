<?php

include "conexion.php";
$id=$_POST["id"];
$sql="DELETE FROM producto WHERE Id_producto='$id'";
$resultado=mysql_query($sql,$conexion);

if($resultado){

echo "Datos eliminados correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);
?>