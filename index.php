<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- REFERENCE FOR LOGIN AND REGISTRATION SYSTEM:
http://www.c-sharpcorner.com/article/create-a-login-form-validation-using-php-and-wamp-xampp/
-->

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Je moet eerst inloggen.";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
<title>Politeia - Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">

		<div class="design-w3l">
			<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welkom bij Politeia,
				<?php
					echo $_SESSION['username'];
				?>
				!</p>
			<?php endif ?>
			<p> <a href="login.php?logout='1'" style="color: red;">Log uit</a> </p>
		</div>
		
		<div class="footer">
		<p>© 2018 Lonneke Pulles & Ruben Scheedler</p>
		</div>
	</div> 
</body>
</html>