
<?php 

if(isset($_POST['details']) && $_POST['total_cost'])
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);



$sql="INSERT INTO management (serial, name, details,  total_cost, login_name)
VALUES( '$_POST[serial]','$_POST[name]', '$_POST[details]', '$_POST[total_cost]', '$_POST[login_name]')";



 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
header('Location:management_insert.php');
}

mysql_close($con);
}
?>
 
 
 