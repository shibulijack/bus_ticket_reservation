<?php 
session_start();
include 'db_connect.php';
$_SESSION['bus_no']=$bus=$_POST['selected_bus'];
$query  =    "select * from bus where b_no='$bus'";
$res    =    mysql_query($query);
$row	=	mysql_fetch_row($res);
$_SESSION['bus_name']= $bus_name= $row[1];
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
<form name="bus" action="confirm_ticket.php" method="POST">
<p>Bus no: <?php echo $bus;?></p>
<p>Bus: <b><?php echo $bus_name;?></b></p>
<input type="hidden" name="p_bus" value="<?php echo $bus; ?>"/>
<p>
Name: <input type="text" name="p_name" />
</p>
<p>
Phone no: <input type="text" name="p_phone" />
</p>
<p>
E-mail: <input type="text" name="p_email" />
</p>
<p>
ID Proof: <input type="text" name="p_proof" />
</p>
<p>
No of passengers: <input type="text" name="p_pass" />
</p>
<input type="submit" name="btnBook" id="btnBook" value="Book" class="btn btn-primary"/>
</form>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>