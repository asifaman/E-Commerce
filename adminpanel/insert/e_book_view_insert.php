
<?php 

if(isset($_POST['name']) && $_FILES['picture'])
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pollihat", $con);


$imgname= addslashes($_FILES['picture']['name']);

$sql="INSERT INTO p_e_book_view (serial, name, description,  price, picture)
VALUES( '$_POST[serial]','$_POST[name]', '$_POST[description]', '$_POST[price]','images/e_book/$imgname')";

$newname="$imgname";
move_uploaded_file($_FILES['picture']['tmp_name'], "../../images/e_book/$newname");

 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
header('Location:e_book_view.php');
}

mysql_close($con);
}
?>
 
 
 