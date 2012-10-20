<?php 
session_start();
include 'db_connect.php';
$cid=$_POST['cid'];
$pid=$_SESSION['pid'];
$query  =    "select * from passengers where p_id='$pid'";
$res    =    mysql_query($query);
$row	=	mysql_fetch_row($res);
$db_cid= $row[5];
$trip=$_SESSION['trip'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.css" />
</head>

<body>
<?php include 'navbar_fragment.php'; ?>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
          <center><h2>Book Tickets</h2></center>
<hr />
<?php 
//echo "posted: ".$cid;
//echo "db: ".$db_cid;
if($cid==$db_cid)
{
	echo "<p>Booked successfully</p>";
	if($trip=='round')
		echo '<p><a href="home.php">Book the return ticket</a></p>';
}
else
	echo "Wrong confirmation id";
	?>
    <br />
    <p>If you wish to cancel the ticket, <br />
    
   </div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>