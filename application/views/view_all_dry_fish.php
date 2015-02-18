

<section id="content">
  <div class="main">
    <div class="wrapper img-indent-bot">
           <article class="col-1"> <a href="#"><img class="img-border" src="<?php base_url();?>images/banner-1.jpg" alt=""></a> </article>

      <article class="col-1"> <a href="#"><img class="img-border" src="<?php base_url();?>images/banner-2.jpg" alt=""></a> </article>
      <article class="col-2"> <a href="#"><img class="img-border" src="<?php base_url();?>images/banner-3.jpg" alt=""></a> </article>
    </div>
   
    <!---------------------------------------------Catagory Start--------------------------------->
    <div class="wrapper">
       <!---------------------------------------Main Body Start, Product Show-------------------------------------->

    <!---------------------------------------------Catagory 1 Start--------------------------------->
   <div id="cataheader12">
   <div id="text">
   &nbsp&nbspSea Food  
   <a href=" <?php echo base_url().'view_all_dry_fish';?>""><div align="right" id="cataheader1"><div id="text1"> View all &nbsp&nbsp </div>  </div>
   </div>
   </div>
   
   <div id="body_right_side_ads">
<div align="left">
	<h1 align="center"></h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php 
			foreach ($p_dry_fish_view_all as $product){
				$id = $product['serial'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
		?>
    	<tr>
        	<td><a href="<?php echo $id ?>"><br /><img style="margin-right:15px" src="<?php echo $product['picture']?>" /></td>
            <td ><br /><b style="color:#000"><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
                    Price:<big style="color:green">TK.
                    <?php echo $price; ?></big>/=<br /><br /></a>
                    
                    <?php
					echo form_open('products_view/view_details/1');	//here 1 define for dry_fish
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'View Details');
					echo form_close();
					?></br>
                    
                    <td> <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to Cart');
					echo form_close();
					?></br>   </td>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td> 
        <?php } ?>
    </table>
</div>
</div>
<div id="body_right_side_ads_right" align="right">
 <div class="fb-like-box" data-href="https://www.facebook.com/pollihat" data-width="280" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false">
 
 </div>
 <div class="container">
    
    
    <!-- This div is used to indicate the original position of the scrollable fixed div. -->
    <div class="scroller_anchor"></div>
    
    <!-- This div will be displayed as fixed bar at the top of the page, when user scrolls -->
    <div class="scroller" ><article class="col-1"> <a href="#"><img class="img-border" src="<?php base_url();?>images/ads_right.jpg" alt=""></a> </article></div>
</div>

</div>

 <!---------------------------------------------Catagory 2 Start--------------------------------->


 
<!------------------------------------------------------------END------------------------------------------->
</div>
</section>
