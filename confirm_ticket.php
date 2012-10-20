<?php
session_start(); 
include 'db_connect.php';
 
$_SESSION['pname']= $name    =    mysql_real_escape_string($_POST['p_name']);

$bus    =    mysql_real_escape_string($_POST['p_bus']);
 
$_SESSION['phone']= $phone    =    mysql_real_escape_string($_POST['p_phone']);

$_SESSION['email']= $email    =    mysql_real_escape_string($_POST['p_email']);

$_SESSION['no_p']= $no_of_pas	=	mysql_real_escape_string($_POST['p_pass']);

 $_SESSION['proof']= $proof	=	mysql_real_escape_string($_POST['p_proof']);
 
if(isset($_POST['btnBook'])) 
{
$query    =    "insert into passengers(p_name,p_phone,p_email,p_passengers,b_no,id_proof)values('$name','$phone','$email','$no_of_pas','$bus','$proof')";
$res    =    mysql_query($query);
}
 
$query  =    "select * from passengers where p_name='$name'";
$res    =    mysql_query($query);
$row	=	mysql_fetch_row($res);
$_SESSION['pid']=$pid= $row[0];
$cid='ticket_'.$name.'_'.$pid.'_'.rand();
//echo "Confirmation ID: ".$cid;
$update_q	=	"update passengers set c_id='$cid' where p_id='$pid'";
$u_res    =    mysql_query($update_q);
$query2  =    "select * from bus_ticket where b_no='$bus'";
$res2    =    mysql_query($query2);
$row2	=	mysql_fetch_row($res2);
$seats= $row2[2];
//echo "seats:".$seats;
$seats=$seats-$no_of_pas;
$update_q2	=	"update bus_ticket set b_seats='$seats' where b_no='$bus'";
$u_res2    =    mysql_query($update_q2); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Confirmation</title>
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
          <center><h2>Confirmation Code</h2></center>
<hr />
<br />
<p>Copy the confirmation code</p>
<p>Confirmation ID: <span class="label label-success"><?php echo $cid; ?></span></p>
<a href="print_ticket.php"><input type="button" value="Print tickets" class="btn btn-primary" /></a>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>