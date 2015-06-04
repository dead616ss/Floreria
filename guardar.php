<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$presio=$_POST["presio"];
$descrip=$_POST["descripcion"];

$sql="INSERT INTO producto (Id_producto, NombreP, Presio, Descripcion) VALUES('','$nombre','$presio','$descrip')";

$res=mysql_query($sql,$conexion);

if($res){
    echo "Nombre: ".$nombre."<br>";
    echo "Peso: ".$presio."<br>";
    echo "edad: ".$descrip."<br>";
    echo "El registro de datos fue exitoso";
}else{
    echo "Error al regitrar los datos".mysql_error();
}
mysql_close($conexion)

?>