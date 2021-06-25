<?php 

	require 'auth.php';

    if(!($auth->hasRole(\Delight\Auth\Role::ADMIN))){
        header('Location: index.php?login=authError');
    }
?>