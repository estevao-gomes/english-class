<?php

require 'db.php';

	$id = $_REQUEST['id'];

		$conexao = connect();

		$query = 'SELECT texto FROM doubts WHERE user_id = '.$id." AND status='open'";

		$stmt = $conexao->query($query);

		$listOfDoubts = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo $listOfDoubts[0]['texto'];

?>