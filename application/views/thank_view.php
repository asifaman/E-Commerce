<!DOCTYPE html>
<html lang="en">
<head>
<title>Pollihat.com | LOGIN</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/stylelogin.css" type="text/css" media="screen">

<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css" type="text/css" media="screen">
<script src="<?php echo base_url();?>js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page5">
<!--==============================header=================================-->

  


<div id="content">
<div class="signup_wrap">
<div class="signin_form">
	<?php echo form_open("user/login"); ?>
	    <label for="email">Email:</label>
    	<input type="text" id="email" name="email" value="" />
	    <label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="" />
        <input type="submit" class="" value="Sign in" />
    <?php echo form_close(); ?>
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
<div style="color:#F00">
	<h2 style="color:#F00">Thank You! You Registered</br>Now. <?php echo $this->session->userdata('username'); ?></h2>

</div>
</div><!--<div id="content">-->

<!--==============================footer=================================-->
</body>
</html>
