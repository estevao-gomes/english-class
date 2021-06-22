<?php 

	require 'auth.php';

    if($auth->hasRole(\Delight\Auth\Role::ADMIN)){
    	echo 'Acesso autorizado';
    }else{
    	echo 'Acesso não autorizado';
    	header('Location: index.php?login=error');
    }
?>