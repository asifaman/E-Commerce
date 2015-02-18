
<?php 

if(isset($_POST['name']) && $_POST['address'])
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);




$sql="INSERT INTO delivery_order (serial, name, address,  phone, date, customerid, product_name, qty, price)
VALUES('$_POST[serial]', '$_POST[name]', '$_POST[address]', '$_POST[phone]', '$_POST[date]', '$_POST[customerid]', '$_POST[product_name]', '$_POST[qty]', '$_POST[price]')";



 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
header('Location:delivery_order_home.php');
}

mysql_close($con);
}
?>
 
 
 