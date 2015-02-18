<!DOCTYPE html>
<html lang="en">
<head>
<title>Pollihat.com</title>
<!---<link rel="stylesheet" href="<?php base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">-->


<link rel="icon" href="<?php base_url();?>images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php base_url();?>images/favicon.ico" type="image/x-icon" />
<meta charset="utf-8">
<link rel="stylesheet" href="<?php base_url();?>css/smallstyle.css" type="text/css" media="screen">

<link rel="stylesheet" href="<?php base_url();?>css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php base_url();?>css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php base_url();?>css/layout.css" type="text/css" media="screen">
<script src="<?php base_url();?>js/prefixfree.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/mahnify.min.js" type="text/javascript"></script>


<script src="<?php base_url();?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/FF-cash.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/tms-0.3.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/tms_presets.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php base_url();?>js/jquery.equalheights.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
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
<!----------------------------------------Scroll Style--------------------------------------->
<script>
// This function will be executed when the user scrolls the page.
$(window).scroll(function(e) {
    // Get the position of the location where the scroller starts.
    var scroller_anchor = $(".scroller_anchor").offset().top;
    
    // Check if the user has scrolled and the current position is after the scroller's start location and if its not already fixed at the top 
    if ($(this).scrollTop() >= scroller_anchor && $('.scroller').css('position') != 'fixed') 
    {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
        $('.scroller').css({
            'background': '#',
            'border': '1px solid #',
            'position': 'fixed',
            'top': '0px'
        });
        // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
        $('.scroller_anchor').css('height', '50px');
    } 
    else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative') 
    {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
        
        // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
        $('.scroller_anchor').css('height', '0px');
        
        // Change the CSS and put it back to its original position.
        $('.scroller').css({
            'background': '#',
            'border': '1px solid #',
            'position': 'relative'
        });
    }
});

</script>

</head>
<body id="page1">

<div id="fb-root"></div>
<?php include_once("analyticstracking.php") ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51888610-1', 'pollihat.com');
  ga('send', 'pageview');

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
  </div>
  <div>
    <a href="<?php base_url();?>cart" class="fixed"><img src="<?php base_url();?>images/cart.png" alt="" /><div class="fixed1">Shopping Cart</div></a></div>
    
    
    
    