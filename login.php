<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- REFERENCE FOR LOGIN AND REGISTRATION SYSTEM:
http://www.c-sharpcorner.com/article/create-a-login-form-validation-using-php-and-wamp-xampp/
-->
<?php include('server.php'); ?>
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
			<div class="mail-form-agile">
			<?php include('errors.php'); ?>
				<form action="login.php" method="post">
					<input type="text" name="username" placeholder="E-mailadres" required=""/>
					<input type="password" name="password" class="padding" placeholder="Wachtwoord" required=""/>
					<input type="submit" name="login_user" value="Inloggen">
				</form>
			</div>
			<p style="color: white">Nog geen account? Registreer <a href="registration.php">hier</a>.</p>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2018 Lonneke Pulles & Ruben Scheedler</p>
		</div>
	</div> 
</body>
</html>