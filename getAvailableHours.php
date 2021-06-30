<?php

require 'db.php';

	$id = $_REQUEST['id'];
	$date = $_REQUEST['date'];

		$conexao = connect();

		$query = 'SELECT hour FROM horarios WHERE user_id = '.$id." AND status = 'ativa' AND date = STR_TO_DATE('".$date."', '%Y-%m-%d')";

		$stmt = $conexao->query($query);

		$listOfTimes = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo $query;

		foreach ($listOfTimes as $time) {
			echo "<option>".$time['hour']."</option>";
		}
		

?>