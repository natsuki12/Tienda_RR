<?php
	require("cn.php");
	$usu=$_POST["usuario"];
	$pass=$_POST["clave"];
	$consulta=$conexion->prepare("SELECT * FROM CLIENTES WHERE USUARIO=:usuario AND CLAVE=:pass");
	$consulta->execute(array(":usuario"=>$usu,":pass"=>$pass));
	if($consulta->rowCount()>0){
		header("location:index.php?ingre=20");
	}else{
		header("location:index.php?ingre=20");
	}
?>