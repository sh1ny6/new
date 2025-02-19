<?php
	session_start();

	include_once '../config/database.php';


	$post_login = $_POST['login'];
	$post_pass = $_POST['pass'];

	if($post_login == BOSS_LOGIN && $post_pass == BOSS_PASSWORD) {
		$_SESSION['global_admin'] = '21sd123Sjdsf934912';

		header("Location: /treaty/thiscontrolpanel/index");
	} else {
		header("Location: /treaty/thiscontrolpanel/login?error=pass");
	}