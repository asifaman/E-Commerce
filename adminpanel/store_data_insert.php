<?php 
if(isset($_POST['product_name']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);

$sql="INSERT INTO store (id, product_name, qty, per_qty_price)
VALUES('$_POST[id]','$_POST[product_name]', '$_POST[qty]', '$_POST[per_qty_price]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
	header('Location:store.php');
	}

mysql_close($con);
}
 ?>