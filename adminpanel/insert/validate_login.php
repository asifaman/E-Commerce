<?php 
session_start();
if (isset($_POST['submit'])){

include("config.php"); //including config.php in our file
$username = $_POST["username"]; //Storing username in $username variable.
$password = $_POST["password"]; //Storing password in $password variable.
$match = "select id from adminlogin where username = '".$_POST['username']."'
and password = '".$_POST['password']."';"; 

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 
	
if($username=="admin" && $num_rows==1 ){
$_SESSION['user']= $_POST["username"];
header("location:index.php");
}

elseif($username=="colmnews"){
$_SESSION['user']= $_POST["username"];
header("location:../php/admin/ladmincolum.php");
}
else { 

echo "Sorry, Invalid Key Press!";

echo '<a href="login.php"> Click Here Go To Menu</a>';


exit; 
}
}

?>