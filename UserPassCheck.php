<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<titleLogin</title>
<style>
body {
	background-color:#CCC;
}
</style>
</head>

<body>
<?php
ob_start();

session_start(); 
include("passwords.php"); 
if ($_POST["ac"]=="log") { 
     if ($USERS[$_POST["username"]]==$_POST["password"]) { 
          $_SESSION["logged"]=$_POST["username"];
		   ;
     } else { 
echo '<script>alert("Incorrect Username or Password");</script>';   
echo '<div class="LoginContainer"><div class="ContainerHeader">LOGIN</div>';
echo'&nbsp;';
echo'<form action="index.php" method="post"><input type="hidden" name="ac" value="log">';
echo'<div class="InputLogin">';
echo  'Username:  <input type="text" name="username" />';
echo'</div>';
echo'<div class="InputLogin">';
echo  'Password: <input type="password" name="password" style="margin-left:4px;" />'; 
echo'</div>';
echo'<div class="InputLogin">';
echo 'Incorrect username/password. Please, try again.'; 
echo'<div class="InputLogin">';
echo'<input type="submit" value="Login" id="submit" style="width:250px; margin-top:10px; margin-left:0px;" />';
echo'</div>';
echo'</form>';
echo'</div>';
     }; 
}; 
if (array_key_exists($_SESSION["logged"],$USERS)) { 
    
	/// echo "You are logged in."; 
	header("Location: http://www.google.com");
	 
} else { 
ob_end_clean();      
	  echo '<div class="LoginContainer"><div class="ContainerHeader">LOGIN</div>';
echo'&nbsp;';
echo'<form action="index.php" method="post"><input type="hidden" name="ac" value="log">'; 
echo'<div class="InputLogin">';
echo  'Username:  <input type="text" name="username" />';
  
echo'</div>';
echo'<div class="InputLogin">';
echo  'Password: <input type="password" name="password"style="margin-left:4px;" />'; 
echo'</div>';

echo'<div class="InputLogin">';
echo'<input type="submit" value="Login" id="submit" style="width:250px;  margin-left:0px;" />';
echo'</div>';
echo'</form>';
echo'</div>';
}; 
?>

</body>
</html>
