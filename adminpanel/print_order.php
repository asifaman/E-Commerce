<?php
if (!isset($_POST['submit']))
{

?>
<?php
include('config.php');
session_start();
$user_check=$_SESSION['user'];

$ses_sql=mysql_query("select username from adminlogin where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>

<div align="center">  
   <b> Pollihat.com</b></br><<< Customer Order Details >>>
<?php

$result = mysql_query("SELECT * FROM order_detail ORDER BY serial DESC");
//$result = mysql_query($order);
if(mysql_num_rows($result) > 0)
{
echo "<table border='1' weight='100%'>
<tr >

<th>Customer Id</th>
<th>Product Id</th>
<th>QTY</th>
<th>Price</th>
<th>Product Name</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
              
              echo "<td>" . $row['orderid'] . "</td>";
              echo "<td>" . $row['productid'] . "</td>";
			  echo "<td>" . $row['quantity'] . "</td>";
			  echo "<td>" . $row['price'] . "</td>";
			   echo "<td>" . $row['product_name'] . "</td>";
         
              
  echo "</tr>";
  }
echo "</table>";
}

?>

  </div>     
  <?php } else {
   $newsTitel   = isset($_POST['title']) ? $_POST['title'] : 'Untitled';
   $submitDate  = date('Y-m-d g:i:s A');
   $newsContent = isset($_POST['newstext']) ? $_POST['newstext'] : 'No content';
   
   $filename = date('YmdHis');
   $f = fopen('news/'.$filename.".txt","w+");         
   fwrite($f,$newsTitel."\n");
   fwrite($f,$submitDate."\n");
   fwrite($f,$newsContent."\n");
   fclose($f);

   header('Location:index.php');   
}
?>    