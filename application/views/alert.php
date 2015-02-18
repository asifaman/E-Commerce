<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<script>
<link rel="icon" href="<?php base_url();?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php base_url();?>images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php base_url();?>css/style.css" type="text/css" media="screen">

function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');
	
	if(result) {
		window.location = "<?php echo base_url(); ?>cart/remove/all";
	}else{
		return false; // cancel button
	}
}
</script>
<style>
.shopping{
	padding-bottom:10px;
	margin-top:20px;
	margin-bottom:35px;
	font-size:25px;
	color:#FFF;
	
}

#catagory{
	height:25px;
	width:70%;
	border:0px solid #CCC;
	color:#000;
	font-family:"Caviar Dreams";
	font-size:16px;
	
	
}
.fixedallright{
	position:fixed;
	color:#F00;
	top: 95%;
    right: 38%;
	
}
a:link {
    color: #FFF;
}

/* visited link */
a:visited {
    color: #FFF;
}

/* mouse over link */


/* selected link */
a:active {
    color: #FFF;
}
</style>
<div class="row-bot">
    <div class="row-bot-bg">
      <div class="main" align="center">
      <div id="catagory" align="center"><table width="70%" border="0">
  <tr>
    <td><a href="<?php echo base_url().'view_all_dry_fish';?>""><b>Dry Fish<b></a></td>
    <td><a href="<?php echo base_url().'view_all_e_book';?>""><b>E-Book</b></a></td>
    <td><a href="<?php echo base_url().'view_all_electronic';?>""><b>Electronic</b></a></td>
    <td><a href="<?php echo base_url().'view_all_spice';?>""><b>Spice</b></a></td>
    
  </tr>
</table>
     
    </div>
  </div>
</head>
<body>
<section id="content">
  <div class="main" align="center">
  </br></br></br><h1 style="font-size:36px"> Your Order Sucessfully Placed !!! </h1></br></br></br></br>
 
  </div></section>
    
    
    
<div class="fixedallright"> <span>Copyright &copy Pollihat.com All Rights Reserved        </div>
</body>

</html>