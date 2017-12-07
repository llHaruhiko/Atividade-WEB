<?php
	include ("conexao.php");
	extract($_POST);
	$stmt = $conect->prepare("insert into USUARIO(NOME, USUARIO, SENHA, EMAIL) 
													values(?,?,?,?)");
	$stmt->bindParam(1,$nome);
	$stmt->bindParam(2,$usuario);
	$stmt->bindParam(3,$senha);
	$stmt->bindParam(4,$email);

	$codificada = md5($senha);
	
	$stmt->execute();
	header("Location: usuario.html");
?>