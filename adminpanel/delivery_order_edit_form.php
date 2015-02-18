<?php
include('config.php');
if( isset($_GET['serial']))
{
	$serial=$_GET['serial'];
	$res= mysql_query("SELECT * FROM delivery_order WHERE serial='$serial'");
	$row= mysql_fetch_array($res);
}
if( isset($_POST['condition']))
{
	$condition=$_POST['condition'];
	$serial=$_POST['serial'];
	$sql="UPDATE delivery_order SET condition='$condition' WHERE serial='$serial'";
	header('Location:delivery_order.php');
}
?>