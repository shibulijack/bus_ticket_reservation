<?php
//=============Configuring Server and Database=======
$host        =    'localhost';
$user        =    'shibu';
$password    =    '';
//=============Data Base Information=================
$database    =    'bus_db';
 
$conn        =    mysql_connect($host,$user,$password) or die('Server Information is not Correct'); //Establish Connection with Server
mysql_select_db($database,$conn) or die('Database Information is not correct');
 
//===============End Server Configuration============
?>