<?php
include "conexion.php";

$nombre2=$_POST["nombre2"];
$apell=$_POST["apellido"];
$ed=$_POST["edad"];

$sql="INSERT INTO datos_cliente (Id_cliente, Nombre, Apellido, Edad) VALUES('','$nombre2','$apell','$ed')";

$res=mysql_query($sql,$conexion);

if($res){
    echo "Nombre: ".$nombre2."<br>";
    echo "Apellido: ".$apell."<br>";
    echo "edad: ".$ed."<br>";
    echo "El registro de datos fue exitoso";
}else{
    echo "Error al regitrar los datos".mysql_error();
}
mysql_close($conexion)

?>