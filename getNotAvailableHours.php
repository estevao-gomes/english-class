<?php

require 'db.php';

	$id = $_REQUEST['id'];

		$conexao = connect();

		$query = 'SELECT hour FROM horarios WHERE user_id = '.$id.' AND status = agendada';

		$stmt = $conexao->query($query);

		$listOfTimes = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($listOfTimes as $time) {
			echo "<option>".$time['hour']."</option>";
		}
		

?>