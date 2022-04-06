<?php
require('cn.php');
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$consulta=$conexion->prepare("SELECT * FROM CLIENTES WHERE Correo=:correo");
$consulta->execute(array(":correo"=>$correo));
if ($consulta->rowCount()>0) {
	header("location:registro.php?error=1");
}else{
	$consulta=$conexion->prepare("INSERT INTO CLIENTES (NOMBRE, APELLIDOS, CORREO, USUARIO, CLAVE, TELEFONO) VALUES (:nombre, :apellidos, :correo, :usuario, :clave, :telefono)");
	$consulta->execute(array(":nombre"=>$nombre, ":apellidos"=>$apellidos, ":correo"=>$correo, ":usuario"=>$usuario, ":clave"=>$clave, ":telefono"=>$telefono));
	header("location:index.php?exito=1");
}
?>