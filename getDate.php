<?php

require 'db.php';

	$id = $_REQUEST['id'];

		$conexao = connect();

		$query = 'SELECT DISTINCT date FROM horarios WHERE user_id = '.$id.' AND status = ativa';

		$stmt = $conexao->query($query);

		$listOfTimes = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($listOfTimes as $time) {
			echo "<option>".$time['date']."</option>";
		}
		

?>