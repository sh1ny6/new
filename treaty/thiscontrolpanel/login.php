<?php
session_start();

if(isset($_GET['error']) && $_GET['error'] == 'pass') {
	echo '<div style="text-align: center;
    height: 25px;
    background: #5f2525;
    width: 100%;
    color: white;
    padding-top: 6px;
    border-radius: 10px;">Данные введены неверно!</div>';
}

if(isset($_SESSION['global_admin']) || $_SESSION['global_admin'] == '21sd123Sjdsf934912') {
  header("Location: /treaty/thiscontrolpanel/");
  die("1");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Control Panel login</title>
</head>
<body style="background: linear-gradient(45deg, #5a7eff, #835e5e); height: 100vh;">
	<div style="margin: 0 auto; display: block; width: 200px; text-align: center; margin-top: 150px; background: #5c5181; padding: 20px; border-radius: 10px;">
		<form action="login-next" method="POST">
			<h3 style="color: white;">Control Panel</h3>
			<input class="form_input" name="login" type="text" placeholder="Enter key">
			<input class="form_input" name="pass" type="password" placeholder="***********">
			<br><br>
			<input class="form_login" type="submit" value="Login">
		</form>
	</div>

	<style>
		.form_input {
			width: 100%;
		    box-sizing: border-box;
		    margin-bottom: 5px;
		    background: black;
		    border: 1px solid #272727;
		    padding: 9px;
		    border-radius: 7px;
		    color:  white;
		}

		.form_login {
		    width: 100%;
		    background: #000a93;
		    border: 2px solid #271ea3;
		    border-radius: 7px;
		    padding: 7px;
		    color: white;
		    text-transform: uppercase;
		    font-weight: 900;
		}
	</style>
</body>
</html>