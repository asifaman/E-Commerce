
<section id="content">
  <div class="main">
    <div class="wrapper img-indent-bot">
      <article class="col-1"> <div class="fb-like-box" data-href="https://www.facebook.com/pollihat" data-width="300" data-height="180" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div></article>
      <article class="col-1"> <a href="#"><img class="img-border" src="<?php base_url();?>assets/images/banner-2.jpg" alt=""></a> </article>
      <article class="col-2"> <a href="#"><img class="img-border" src="<?php base_url();?>assets/images/banner-3.jpg" alt=""></a> </article>
    </div>
   
    <!---------------------------------------------Catagory Start--------------------------------->
    <div class="wrapper">
    
    <!---------------------------------------------Catagory 1 Start--------------------------------->
   <div id="cataheader">
   <div id="text">
   &nbsp&nbspDry Fish (Shutki)  <a href="#"><div align="right" id="cataheader1"><div id="text1"> View all &nbsp&nbsp </div>  </div></a>
   </div>
   </div>
    
      <div align="center">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($products as $product){
				$id = $product['serial'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
		?>
    	<tr>
        	<td><img src="<?php echo $product['picture']?>" /></td>
            <td><b><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
                    Price:<big style="color:green">
                    $<?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to Cart');
					echo form_close();
					?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
      <!---------------------------------------------Catagory 2 Start--------------------------------->
      
      <div id="cataheader">
   <div id="text">
   &nbsp&nbspBag Collection  <a href="#"><div align="right" id="cataheader1"><div id="text1"> View all &nbsp&nbsp </div>  </div></a>
   </div>
   </div>
    
      <div class="products">
       
        <div class="cl" >&nbsp;</div>
        <ul align="center">
          <li > <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big2.jpg" alt="" /></a>
           
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big3.jpg" alt="" /></a>
            
          </li>
          <li class="last"> <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      
      <!---------------------------------------------Catagory 3 Start--------------------------------->
      
      <div id="cataheader">
   <div id="text">
   &nbsp&nbspT-Shirt Collection <a href="#"><div align="right" id="cataheader1"><div id="text1"> View all &nbsp&nbsp </div>  </div></a>
   </div>
   </div>    
      <div class="products">
       
        <div class="cl" >&nbsp;</div>
        <ul align="center">
          <li > <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big2.jpg" alt="" /></a>
           
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big3.jpg" alt="" /></a>
            
          </li>
          <li class="last"> <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      
      
  </div>
  
  <!---------------------------------------------Catagory 4 Start--------------------------------->
      
      <div id="cataheader">
   <div id="text">
   &nbsp&nbspSpice <a href="#"><div align="right" id="cataheader1"><div id="text1"> View all &nbsp&nbsp </div>  </div></a>
   </div>
   </div>    
      <div class="products">
       
        <div class="cl" >&nbsp;</div>
        <ul align="center">
          <li > <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big2.jpg" alt="" /></a>
           
          </li>
          <li> <a href="#"><img src="<?php base_url();?>assets/images/big3.jpg" alt="" /></a>
            
          </li>
          <li class="last"> <a href="#"><img src="<?php base_url();?>assets/images/big1.jpg" alt="" /></a>
            
          </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      
      
  </div>
</section>