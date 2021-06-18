<?php 
	session_start();
	if (!isset($_SESSION['id']) || !$_SESSION['auth']) {
		header('Location: index.html?login=error');
	}else if($_SESSION['id'] != $_SESSION['page']){
		header('Location: index.html?login=error');
	}
?>