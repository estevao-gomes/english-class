<?php 
	require 'auth.php';
	$auth->logOut();
	header('Location: index.php')
?>