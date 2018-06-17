<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/newsfirst.jpg">
	<meta charset="UTF-8">
	<title>Авторизация</title>
</head>
<body class="body_auth">
<?php
 require_once "bloks/header.php" 
?>



<div id="wrapper_1">

		<div id="leftCol">
	<br>
	<br>
	<br>
	<br>
	<br>
	<table id= "t_auth">
	<tr>
		<td>
		<h1 align="center" id="h1_auth">Login</h1>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</td>
          	</tr>
</table>
		<input id="input_p1" type="text" placeholder="Email" id="email_r" name="email"><br>
			<input  id="input_p" type="password" placeholder="Password" id="password " name="password" autocomplete="current-password"><br>

			<div id="messageShow">
			
			<button type="submit" id="done">
            Войти
          </button>



			</div>

	
			</div>
			</div>



</body>
</html>