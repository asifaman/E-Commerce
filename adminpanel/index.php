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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POLLIHAT ADMIN PANEL | Powered by Pollihat.com</title>
<link rel="stylesheet" type="text/css" href="pagecss.css" />

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<?php include("function.php"); ?>

<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $login_session ?>, <a href="http://pollihat.com" target="_blank">Visit site</a> | <a href="logout.php" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="index.php">Admin Home</a></li>
                    
                    
                    <li><a href="order_detail.php">Custom Order details</a></li>
                                        <li ><a href="print_customer.php" target="_blank"><b>PRINT</b></a></li>

                    <li><a href="management_index.php">Voucher</a></li>
                    <li ><a href="insert/insert_index.php"><b>ADD NEW ITEM</b></a></li>
                    <li ><a href="create_user.php"><b>CREATE USER</b></a></li>
                     <li ><a href="show_user.php"><b>USER VIEW</b></a></li>
                     <li ><a href="store.php" ><b>STORE</b></a></li>

                    </ul>
                    </div> 
                    
                    
                    
                    <div align="center">  
                    
    
<?php
    $tableName="customers";		
	$targetpage = "index.php"; 	
	$limit = 200; 
	
	$query = "SELECT COUNT(*) as serial FROM $tableName"; 
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['serial'];
	
	$stages = 3;
	
	$page=1;
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
///////////////////////////////////////////////////////////////////////////////////////

//$result = mysql_query("SELECT * FROM customers NATURAL JOIN orders NATURAL JOIN order_detail ORDER BY serial DESC LIMIT $start, $limit");
$query1 = "SELECT * FROM customers NATURAL JOIN orders ORDER BY serial DESC LIMIT  $limit";


//////////////////////////////////////////////////////////////////////////////////////////
$result = mysql_query($query1);
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='paginate'>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage?page=$prev'>Previous</a>";
		}else{
			$paginate.= "<span class='disabled'>Previous</span>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class='current'>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next'>Next</a>";
		}else{
			$paginate.= "<span class='disabled'>Next</span>";
			}
			
		$paginate.= "</div>";		
	
	
}
////////////////////////////////////////////////////////////////////////////////////////////
//$result = mysql_query($order);
if(mysql_num_rows($result) > 0)
{
echo "<table border='1' weight='100%'>
<tr >
<th>Serial</th>
<th>Customer Order Date</th>
<th>Customer ID</th>
<th>Customer Name</th>
<th>Customer E-mail</th>
<th>Customer Order Delivery Address</th>
<th>Customer Phone</th>





</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";  echo "<td>" . $row['serial'] . "</td>";
                  echo "<td>" . $row['date'] . "</td>";
                  echo "<td>" . $row['customerid'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
				   echo "<td>" . $row['email'] . "</td>";
				    echo "<td>" . $row['address'] . "</td>";
					 echo "<td>" . $row['phone'] . "</td>";
             
			  
              //echo "<td><a href=\"alert.php?no=".$row['no']."\" >Delete</a></td>";
			 
           
				 
         
             
  echo "</tr>";
  }
echo "</table>";
}

//////////////////////////////////////////////////////////
 echo $total_pages.' Total Customer';
 // pagination
 echo $paginate;
?>  	

 <?php
	

	
	
    // Get page data
	//$query1 = "SELECT * FROM customers NATURAL JOIN orders NATURAL JOIN order_detail ORDER BY serial DESC $start, $limit";
	
 

  
?> 



  </div>         
     
        <div class="pagination" >
        
        </div> 
     
     
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">POLLIHAT.COM ADMIN PANEL | Powered by <a href="http://pollihat.com" target="_blank">POLLIHAT.COM</a></div>
    	<div class="right_footer"><a href="http://pollihat.com" target="_blank"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
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
</html>