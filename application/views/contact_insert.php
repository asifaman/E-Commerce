
<?php 

if(isset($_POST['name']) && $_POST['email'])
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);





$sql="INSERT INTO customer_contact_info(serial, name, mobile,  email, message)
VALUES( '$_POST[serial]','$_POST[name]', '$_POST[mobile]', '$_POST[email]', '$_POST[message]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
header('Location:products.php');
}

mysql_close($con);
}

?>
 
 
 