<?php 
include("config.php"); 

// get value of id that sent from address bar
/*-----------------------------USE FOR DATA RECEIVE---------------------------*/

// Receive  data from database for t_news_l
if(isset($_GET['id']))
{
$no=$_GET['id'];
$sql="SELECT * FROM customers ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
}
// Receive  data from database for t_news_r
else if(isset($_GET['id']))
{
$no=$_GET['id'];

$sql="SELECT * FROM orders ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
}
// Receive  data from database for m_news_1
else if(isset($_GET['id']))
{
$no=$_GET['id'];

$sql="SELECT * FROM order_detail";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
}
// Receive  data from database for t_news_r

/*---------------------------------DATE PROCEDUE----------------------------*/


                                          /*-----------------------------FUNCTION USE START---------------------------*/


/*-----------------------------FUNCTION OF TOP LEFT NEWS---------------------------*/
function cust_name(){
	$result = mysql_query("SELECT name FROM customers ORDER BY  DESC LIMIT 1");
     
         echo  $result ;
}

function orders(){
	   $result = mysql_query("SELECT * FROM orders ORDER BY no DESC LIMIT 1");
	   while($row = mysql_fetch_array($result)){
	        $text=$row['newstext'];
	        $substr_text = substr($text, 0,200);
            echo $substr_text;
			echo "<a href=\"page/topnews.php?no=".$row['no']."\">...বিস্তারিত। </a>" ;
     }
}
function order_detail(){
	     $result = mysql_query("SELECT * FROM order_detail ORDER BY no DESC LIMIT 1");
       while($row = mysql_fetch_array($result)){
		 $no=$row['no'];
         echo "<img src=image.php?no=$no>" ;
			   }
}
/*-----------------------------FUNCTION OF TOP RIGHT NEWS---------------------------*/





?>

