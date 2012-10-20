<?php
include 'db_connect.php';
 
$userName    =    mysql_real_escape_string($_POST['txtUser']);
 
$password    =    mysql_real_escape_string($_POST['txtPassword']);

//=============To Encrypt Password===================
$password    =    md5($password);
//============New Variable of Password is Now with an Encrypted Value========

 
if(isset($_POST['btnLogin'])) //===When I will Set the Button to 1 or Press Button to register
{
$query  =    "select * from users where u_name='$userName' and u_pass='$password'";
$res    =    mysql_query($query);
$count	=	mysql_num_rows($res);
if($count==1){
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  session_start(); 
  $_SESSION['user']=$userName;
  header("location:home.php");
} 
else 
{
  echo "Wrong Username or Password";
}
}
 
?>