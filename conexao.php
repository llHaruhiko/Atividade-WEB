<?php
	try{
		$conect = new PDO("mysql:host=localhost; dbname=weberti", "weberti","weberti");
		$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
			
?>