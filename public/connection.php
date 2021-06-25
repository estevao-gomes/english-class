<?php
	$dsn = 'mysql:host=localhost;dbname=ingles_teste';
	
	try{
		$conexao = new PDO($dsn, 'root', '');

	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	}
?>