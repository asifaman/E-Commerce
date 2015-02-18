<!DOCTYPE html>
<html lang="en">
<head>
<title>Pollihat.com | Sign Up</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/l_s_style.css" type="text/css" media="screen">

<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page5">
<!--==============================header=================================-->

  <div>
    <a href="<?php base_url();?>cart" class="fixed"><img src="<?php base_url();?>images/cart.png" alt="" /><div class="fixed1">Shopping Cart</div></a></div></header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="wrapper" align="center">
      <article class="col-1" >
  <h1>Registration</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope ">1</i></label>
  <input type="text" name="name" id="name" placeholder="Email" required/>
  <label id="icon" for="name"><i class="icon-user">2</i></label>
  <input type="text" name="name" id="name" placeholder="Name" required/>
  <label id="icon" for="name"><i class="icon-shield">3</i></label>
  <input type="password" name="name" id="name" placeholder="Password" required/>
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <a href="#" class="button">Register</a>
  </form>
</div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
</body>
</html>
