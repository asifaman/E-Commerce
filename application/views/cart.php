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
<div style="margin:0px auto; width:600px;" >
	<div class="shopping" align="center">
		<h1 align="center">Your Shopping Cart</h1>
		
	</div>
	<div style="color:#F00"><?php echo $message?></div>
	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; color:#000; border:10px solid #E1E1E1; margin:10px; font-size:12px; background-color:#E1E1E1" width="100%">
		<?php if ($cart = $this->cart->contents()): ?>
		<tr bgcolor="#FFFFFF" style="font-weight:bold">
			<td>Serial</td>
			<td>Name</td>
			<td>Price</td>
			<td>Qty</td>
			<td>Amount</td>
			<td>Options</td>
		</tr>
		<?php
		echo form_open('cart/update_cart');
		$grand_total = 0; $i = 1;
		
		foreach ($cart as $item):
			echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
			echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
			echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
			echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
			echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
		?>
		<tr bgcolor="#FFFFFF">
			<td>
				<?php echo $i++; ?>
			</td>
			<td>
				<?php echo $item['name']; ?>
			</td>
			<td>
				TK. <?php echo number_format($item['price'],2); ?>
			</td>
			<td>
				<?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
			</td>
			<?php $grand_total = $grand_total + $item['subtotal']; ?>
			<td>
				TK. <?php echo number_format($item['subtotal'],2) ?>
			</td>
			<td>
				<?php echo anchor('cart/remove/'.$item['rowid'],'Cancel'); ?>
			</td>
			<?php endforeach; ?>
		</tr>
		<tr>
			<td><b>Order Total: TK.<?php echo number_format($grand_total,2); ?></b></td>
			<td colspan="5" align="right">
					<input type="submit" value="Update Cart">
					<?php echo form_close(); ?>
					<input type="button" value="Place Order" onclick="window.location='billing'"></td>
		</tr>
		<?php endif; ?>
	</table><div align="center" class="shopping">
    <input type="button" value="Continue Shopping" onclick="window.location='products'" />
    
    
    </div>
    
</div>
<div class="fixedallright"> <span>Copyright &copy Pollihat.com All Rights Reserved        </div>
</body>

</html>