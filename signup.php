<?php
	require 'auth.php';

	try {
    	if (strlen($_POST['password'])<10) {
    		header('Location: index.php?signup=passwordError');
    	}else{
    		$userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username']);
    		header('Location: index.php?signup=success');
    	}
	}
	catch (\Delight\Auth\InvalidEmailException $e) {
	    header('Location: index.php?signup=emailError');
	}
	catch (\Delight\Auth\InvalidPasswordException $e) {
	    header('Location: index.php?signup=passwordError');
	}
	catch (\Delight\Auth\UserAlreadyExistsException $e) {
	    header('Location: index.php?signup=userError');
	}
	catch (\Delight\Auth\TooManyRequestsException $e) {
	    die('Too many requests');
	}
?>	