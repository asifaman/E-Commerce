
<?php 

if(isset($_POST['username']) && $_POST['email'])
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);




$sql="INSERT INTO adminlogin (id, username, email,  password)
VALUES( '$_POST[id]','$_POST[username]', '$_POST[email]', '$_POST[password]')";


 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
header('Location:create_user.php');
}

mysql_close($con);
}
?>
 
 
 