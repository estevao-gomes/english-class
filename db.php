<?php
	function connect(){
		$dsn = 'mysql:host=localhost;dbname=ingles_teste';

		try{
			$conexao = new PDO($dsn, 'root', '');

			}catch(PDOException $e){
				echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
		}

		return $conexao;
	}

	

	function getUsersNumber(){
		
		$conexao = connect();

		$query = 'SELECT COUNT(id) FROM users';

		$stmt = $conexao->query($query);

		$listOfUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$user = $listOfUsers[0];

		$numberOfUsers = $user['COUNT(id)'];

		return $numberOfUsers;
	}

	function getUsername($id){

		$conexao = connect();

		$query = 'SELECT username FROM users WHERE id ='.$id;

		$stmt = $conexao->query($query);

		$listOfUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$user = $listOfUsers[0];

		$username = $user['username'];

		return $username;
	}


?>