<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pollihat"; // Database name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
if(isset($_GET['serial']))
{
$serial=$_GET['serial'];

// Retrieve data from database 
$sql="SELECT * FROM delivery_order WHERE serial=$serial";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css" media="all">
<!--
body,td,th {
	font-size: 16px;
	color: #000;
}
.a{
	font-size: 14px;
	color: #000;
}
-->
.media{
	
}
</style></head>

<body>
<table width="100%" border="0" >
  <tr>
    <td width="8%">&nbsp;</td>
    <td><h1>Pollihat.com</h1></td>
    <td colspan="3" align="right"><b>Phone: +880 1616 262726</b></td>
    <td width="7%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Serial: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['serial'];?></label></td>
    <td colspan="3">Order Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['date'];?></label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['name'];?></label></td>
    <td colspan="3">Customer Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['customerid'];?></label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="2">Address: &nbsp;&nbsp;&nbsp;<label><?php echo $row['address'];?></label></td>
    <td colspan="3" ><b>Order Details</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="10%" align="center"><b>QTY</b></td>
    <td width="12%" align="center"><b>Price</b></td>
    <td width="20%" align="center"><b>Product Name</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label><?php echo $row['phone'];?></label></td>
    <td align="center"> <label><?php echo $row['qty'];?></label></td>
    <td align="center"><label><?php echo $row['price'];?></label></td>
    <td align="center"><label><?php echo $row['product_name'];?></label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>