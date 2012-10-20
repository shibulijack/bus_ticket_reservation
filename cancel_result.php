<?php 
include 'db_connect.php';
$cid=$_POST['cid'];
$query  =    "select * from passengers where c_id='$cid'";
$res    =    mysql_query($query);
$row	=	mysql_fetch_row($res);
$count	=	mysql_num_rows($res);
$bus_no= $row[6];
$tickets=  $row[4];
$query2  =    "select * from bus_ticket where b_no='$bus_no'";
$res2    =    mysql_query($query2);
$row2	=	mysql_fetch_row($res2);
$seats= $row2[2];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($count==1)
{
	//echo "t:".$tickets;
	//echo "s:".$seats;
$query4  =    "delete from passengers where c_id='$cid'";
mysql_query($query4);
$seats=$seats+$tickets;
//echo "s:".$seats;
$query3  =    "update bus_ticket set b_seats='$seats' where b_no='$bus_no'";
mysql_query($query3);
echo "Ticket cancelled";
}
else
	echo "Wrong confirmation code";
	?>
</body>
</html>