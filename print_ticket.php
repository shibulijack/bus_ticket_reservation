<?php
session_start(); 
$name=$_SESSION['pname'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];
$no_of_pas=$_SESSION['no_p'];
$bus=$_SESSION['bus_name'];
$proof=$_SESSION['proof'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
          <center><h2>Confirm Booking</h2></center>
<hr />
<table class="table table-bordered table-striped">
<tr><td>Name: </td><td><?php echo $name; ?></td></tr>
<tr><td>Phone: </td><td><?php echo $phone; ?></td></tr>
<tr><td>Mail: </td><td><?php echo $email; ?></td></tr>
<tr><td>ID Proof: </td><td><?php echo $proof; ?></td></tr>
<tr><td>Bus: </td><td><?php echo $bus; ?></td></tr>
<tr><td>No of passengers: </td><td><?php echo $no_of_pas; ?></td></tr>
<tr><td>Source: </td><td><?php echo $_SESSION['src']; ?></td></tr>
<tr><td>Destination: </td><td><?php echo $_SESSION['dest']; ?></td></tr>
<tr><td>Date: </td><td><?php echo $_SESSION['date']; ?></td></tr>
</table>
<form method="POST" action="booking.php">
<p>Enter confirmation code: 
<input type="text" name="cid" />
</p>
<input type="submit" value="Print tickets" class="btn btn-primary" />
</form>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>