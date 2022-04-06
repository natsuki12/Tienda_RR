<?php
	try{

		$conexion=new PDO("mysql:host=localhost; dbname=ryrs", "root", ""); //conexion a la base de datos

		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$conexion->exec("SET CHARACTER SET utf8");

	}catch(Exeption $e){

		die('Error:' . $e->getMessage());

		echo "Linea del error: " . $e->getLine();

	};
?>