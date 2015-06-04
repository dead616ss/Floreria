<?php


include "conexion.php";
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];

$descripcion=$_POST["descripcion"];

$sql="UPDATE  producto SET  NombreP='$nombre', Presio='$precio', Descripcion='$descripcion' WHERE Id_producto='$id'";
$resultado=mysql_query($sql,$conexion);

if($resultado){
echo "Nombre: ".$nombre;
echo "Precio: ".$precio;

echo "Descripcion: ".$descripcion;
echo "Datos guardados correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);

?>