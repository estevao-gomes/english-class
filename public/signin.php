<?php 
	require 'auth.php';

	try {
	    $auth->login($_POST['email'], $_POST['senha']);

	    $id = $auth->getUserId();

		if ($auth->admin()->doesUserHaveRole($id, \Delight\Auth\Role::ADMIN)) {
			session_start();
			$_SESSION['admin'] = true;
		    header('Location: teacher.php');
		}
		else {
		    header('Location: student.php');
		}
	}
	catch (\Delight\Auth\UnknownIdException $e) {
	    die('Unknown user ID');
	}
	catch (\Delight\Auth\InvalidEmailException $e) {
	    die('Wrong email address');
	}
	catch (\Delight\Auth\InvalidPasswordException $e) {
	    die('Wrong password');
	}
	catch (\Delight\Auth\EmailNotVerifiedException $e) {
	    die('Email not verified');
	}
	catch (\Delight\Auth\TooManyRequestsException $e) {
	    die('Too many requests');
	}