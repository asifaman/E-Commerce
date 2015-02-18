<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Info</title>
</head>
<body>
<section id="content">
<div class="main">
<div class="wrapper img-indent-bot">
<form name="billing" method="post" action="<?php echo base_url().'billing/save_order' ?>" >
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1></br></br><h4><b>Please Fill Up Your Correct Shipping Address</b></h4></br>
        <table border="0" cellpadding="2px">
        	<tr><td>Order Total:</td><td><strong>TK.<?php echo number_format($grand_total,2); ?></strong></td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
            <tr><td>Address:</td><td><input type="text" name="address" /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
            <tr><td>Phone:</td><td><input type="text" name="phone" /></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
        </table></br>
	</div>
</form>
</div>
</div>
</section>
</body>
</html>