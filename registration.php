<!doctype html>  
<html>  
<head>  
    <title>Politeia - Register</title>  
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
                <form action="#" method="post">
                    <input type="text" name="email" placeholder="E-mailadres" required=""/>
                    <input type="password"  name="password" class="padding" placeholder="Wachtwoord" required=""/>
                    <input type="submit" value="Registreren">
                </form>
            </div>
            <p style="color: white">Al een account? Log <a href="index.php">hier</a> in.</p>
          <div class="clear"> </div>
        </div>
        
        <div class="footer">
        <p>© 2018 Lonneke Pulles & Ruben Scheedler</p>
        </div>
    </div> 
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['pass'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('politeia') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM users WHERE username='".$user."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users(email,password) VALUES('$user','$pass')";  
  
    $result=mysql_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html> 