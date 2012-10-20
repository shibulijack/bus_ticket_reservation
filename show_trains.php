<?php
session_start();
include 'db_connect.php';

$_SESSION['trip']=    mysql_real_escape_string($_POST['trip']);
$_SESSION['src']=$b_src    =    mysql_real_escape_string($_POST['src']);
 
$_SESSION['dest']=$b_dest    =    mysql_real_escape_string($_POST['dest']);
//$_SESSION['date']=$b_date    =    mysql_real_escape_string($_POST['date']);
$_SESSION['date']=$b_date2    =    mysql_real_escape_string($_POST['datePick']);
$date=explode('-',$b_date2);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Show buses</title>
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
          <center><h2>Available buses</h2></center>
<hr />
<form name="bus_list" method="POST" action="book_ticket.php">
<table class="table table-bordered table-striped">
<tr>
<th>Bus no.</th>
<th>Name</th>
<th>Seats</th>
<th>Departure</th>
<th>Arrival</th>
<th>select</th>
</tr>
<tr>
<?php 
echo "<b>From: </b>".$b_src." <b>To:</b> ".$b_dest;
if(isset($_POST['btnSearch'])) //===When I will Set the Button to 1 or Press Button to register
{
$query  =    "select * from bus INNER JOIN bus_ticket on bus.b_no=bus_ticket.b_no where b_source='$b_src' and b_dest='$b_dest' and date='$date[0]'";
$res    =    mysql_query($query);
while($row = mysql_fetch_assoc($res))
{
	if($row["b_seats"]>0)
	{
	echo '<tr>';
echo '<td>'.$row["b_no"].'</td>';
echo '<td>'.$row["b_name"].'</td>';
echo '<td>'.$row["b_seats"].'</td>';
echo '<td>'.$row["b_dep_time"].' P.M</td>';
echo '<td>'.$row["b_arr_time"].' A.M</td>';
echo '<td><input type="radio" name="selected_bus" value="'.$row["b_no"].'"></input></td>';
echo '</tr>';
	}
}
}
else
{
	echo "error";
}

?>
</tr>
</table>
<input type="submit" name="btnSelect" id="btnSelect" value="Select bus" class="btn btn-primary" />
</form>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>