<?php
require("config.php");
try{
	$chainecon='mysql:host='.DB_HOST.';dbname='.DB_BD;
	$idcon=new PDO($chainecon,DB_USER,DB_PWD);
}
catch(PDOException $ex){
	echo $ex->getMessage();
	exit();
	
}

?>