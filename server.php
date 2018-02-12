<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'politeia');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) {
	array_push($errors, "Vul je naam in."); 
  }
  if (empty($username)) { 
	array_push($errors, "Vul een e-mailadres in.");
  }
  if (empty($password_1)) {
	array_push($errors, "Vul een wachtwoord in.");
  }
  if ($password_1 != $password_2) {
	array_push($errors, "De wachtwoorden komen niet overeen.");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Dit e-mailadres is al in gebruik.");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = hash('sha256',$password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, password, name)
				VALUES('$username', '$password', '$name')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "We hebben een e-mailadres nodig om je in te loggen.");
  }
  if (empty($password)) {
  	array_push($errors, "We hebben je wachtwoord nodig om je in te loggen.");
  }

  if (count($errors) == 0) {
  	$password = hash('sha256', $password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Je bent ingelogd.";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Dit e-mailadres en dit wachtwoord horen niet bij elkaar.");
  	}
  }
}

?>
