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
$sql="SELECT * FROM customers WHERE serial=$serial";
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
    <td colspan="5"><h1>Pollihat.com</h1></td>
    <td colspan="3" align="right">Phone: +880 1616 262726</td>
    <td width="7%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5"><b>Customer</b></td>
    <td colspan="3"><b>Order</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">Serial: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['serial'];?></label></td>
    <td colspan="3">Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row1['date'];?></label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['name'];?></label></td>
    <td colspan="3">Customer Id</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['email'];?></label></td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">Address: &nbsp;&nbsp;&nbsp;<label><?php echo $row['address'];?></label></td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $row['phone'];?></label></td>
    <td width="14%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="8" align="center"><b>Order Details</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="8" align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center">Order Id</td>
    <td colspan="2" align="center">Product Id</td>
    <td align="center">QTY</td>
    <td align="center">Price</td>
    <td colspan="2" align="center">Product Name</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>