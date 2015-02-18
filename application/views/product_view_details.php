<!DOCTYPE html>
<html>
<head>
	<title>Pollihat.com</title>
<!---<link rel="stylesheet" href="<?php base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">-->
<link rel="stylesheet" href="<?php base_url();?>css/sub_menu.css" type="text/css" media="screen">


<link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon" />
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/smallstyle.css" type="text/css" media="screen">
<link rel="stylesheet"  href="<?php echo base_url(); ?>css/p_view_style.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php base_url();?>css/layout.css" type="text/css" media="screen">
	
    <style>
#front{
	font-family:"Caviar Dreams";
}
.slide_header_front{
	font-family:"Edwardian Script ITC";
}
.hotline{
color:#FFF;	
}
.fixed{
	position:fixed;
	color:#F00;
	top: 83%;
    right: 3%;
	
}
.fixed1{
	position:fixed;
	color:#F00;
	top: 93%;
    right:2%;
	font-size:10px;
	
}


</style>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/ddpowerzoomer.js">

/***********************************************
* Image Power Zoomer- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">
jQuery(document).ready(function($){ //fire on DOM ready
 $('#myimage').addpowerzoom()
})
</script>
<script type="text/javascript">
jQuery(document).ready(function($){ //fire on DOM ready
 $('#myimage').addpowerzoom({
 defaultpower: 2,
 powerrange: [2,5],
 largeimage: null,
 magnifiersize: [100,100] //<--no comma following last option!
})
})
</script>
<script type="text/javascript">

jQuery(document).ready(function($){ //fire on DOM ready

	/*
	EXAMPLE 1:
	$('#myimage').addpowerzoom()

	EXAMPLE 2:
	$('img.vacation').addpowerzoom({
		defaultpower: 2,
		powerrange: [2,5],
		largeimage: null,
		magnifiersize: [100,100] //<--no comma following last option!
	})
	*/

})

</script> 
<script type="text/javascript">
jQuery(document).ready(function($){ //fire on DOM ready
 $('#myimage').addpowerzoom()
})
</script>
</head>
<body >

<div id="fb-root"></div>
<?php include_once("analyticstracking.php") ?>

<a href="<?php echo base_url().'cart'; ?>" class="fixed"><img src="<?php echo base_url();?>images/cart.png" alt="" /><div class="fixed1">Shopping Cart</div></a>
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1 id="front"><a href="index.html">Pollihat<span>.com</span></a><br/><div class="hotline">
 <b >Hotline:&nbsp; 01616 262726 (09am-10pm)</b></span></div>
</h1>
     
        <nav>
        
          <ul class="menu">
            <li><a class="active" href="<?php echo base_url().'products';?>"">Home</a></li>
            
            <li><a href="<?php echo base_url().'about';?>"">About</a></li>
            
            <li><a href="<?php echo base_url().'contact';?>">Contact</a></li>
            <!--<li><a href="<?php echo base_url().'sign_up';?>">Sign Up</a></li>-->
            <li><a href="<?php echo base_url().'user';?>">Register</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <a href="<?php echo base_url().'cart'; ?>" class="fixed"><img src="<?php echo base_url();?>images/cart.png" alt="" /><div class="fixed1">Shopping Cart</div></a>
</div>
    <div id="catagory" align="center"><table width="50%" border="0" style="font-size:18px; font-family:'Caviar Dreams'; color:#F00">
  <tr >
    <td><a href="<?php echo base_url().'view_all_dry_fish';?>""><b>Dry Fish<b></a></td>
    <td><a href="<?php echo base_url().'view_all_e_book';?>""><b>E-Book</b></a></td>
    <td><a href="<?php echo base_url().'view_all_electronic';?>""><b>Electronic</b></a></td>
    <td><a href="<?php echo base_url().'view_all_spice';?>""><b>Spice</b></a></td>
    
  </tr>
</table></br>
     
</div>
  
  <div class="wrapper">
    <table width="100%" border="0">
    <tr>
      <td width="16%">&nbsp;</td>
      <td width="24%" rowspan="3"><img id="myimage" src="<?php echo base_url().$get_product_info['picture'];?>" alt="<?php echo $get_product_info['name']; ?>" width="250" style="margin-top:10px; margin-bottom:10px" /></td>
      <td colspan="2" rowspan="4"><h3><?php echo $get_product_info['name']; ?></h3>
      <b><p >Size: </span><?php echo $get_product_info['description']; ?></p>
		<p >Price: </span>Varies with size.</p>
		<p >Delivery Time:</span> 1-4 Days</p>
		<p >Available Payment Method: </span> bKash ,Cash on Delivery(COD), Online Payment *For outside Dhaka city, advance payment is required.</p>
		<p >Deliverable Area:</span> Dhaka city, Outside Dhaka City</p>
		<p >Delivery Charge:</span> Dhaka city: 30 TK, Outside Dhaka city:50 Tk.</p>  </b>    </td>
      <td width="16%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><b>Price:&nbsp;&nbsp;</b><b>Tk.
          <?php  echo $get_product_info['price']; ?>
      .00/=</b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="color:#000"><b>
        <?php 
			
				$id = $get_product_info['serial'];
				$name = $get_product_info['name'];
				$description = $get_product_info['description'];
				$price = $get_product_info['price'];
		?>
        <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to Cart');
					echo form_close();
					?>
      </b></td>
      <td><b>
        <?php 
			
				$id = $get_product_info['serial'];
				$name = $get_product_info['name'];
				$description = $get_product_info['description'];
				$price = $get_product_info['price'];
		?>
        <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'BUY NOW');
					echo form_close();
					?>
      </b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="color:#000"><h3>&nbsp;</h3></td>
      <td width="20%">&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>

</body>
</html>