
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

 
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="wrapper" align="center">
      <article class="col-1" ></br></br></br></br>

<div style="color:#F00">
	<h2 style="color:#F00">Thanks For Login, <?php echo $this->session->userdata('username'); ?>!</h2>
	<h4><?php echo anchor('user/logout', 'Logout'); ?></h4>

</div><!--<div class="content">-->
</div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
</body>
</html>
