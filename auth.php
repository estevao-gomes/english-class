<?php
	session_start();

	$auth = false;
	$perfil_id = null;


	$usuarios = array(
		array('email'=>'teacher@email.com', 'senha'=>'123456', 'id'=>'0'),
		array('email'=>'student@email.com', 'senha'=>'123456', 'id'=>'1'),
	);

	foreach ($usuarios as $user) {
		if ($user['email']== $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$auth = true;
			$perfil_id = $user['id'];
		}
	}

	if ($auth == true && $perfil_id=='0') {
		$_SESSION['id'] = $perfil_id;
		$_SESSION['auth'] = true;
		$_SESSION['page'] = 0;
		header('Location: teacher.phtml');
	}else if($auth == true){
		$_SESSION['id'] = $perfil_id;
		$_SESSION['auth'] = true;
		$_SESSION['page'] = $perfil_id;
		header('Location: student.phtml');
	}else{
		$_SESSION['auth'] = false;
		header('Location: index.html?login=error');
	}
?>