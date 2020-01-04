<?php
	require 'ihsa_base/global/connect.php';
	require 'ihsa_base/global/config.php';
	session_name('IHSAS');
	if(!isset($_SESSION)){ 
		session_start();
	}
	session_unset();
	session_destroy();
    header('Location: '.DOMAIN.'/login');
?>