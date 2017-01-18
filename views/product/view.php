<?php require_once(ROOT.'/views/layouts/header.php');?>
    
<div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
      <?php include ROOT.'/views/layouts/sidebar.php'; ?>
        
        <div id="content">
        	<h2><?php echo $product['name']; ?></h2>
            <div class="col col_13">
                <a  rel="lightbox[portfolio]" href="/template/images/product/10_l.jpg" title="Lady Shoes"><img src="/template/images/product/10.jpg" alt="Image 10" /></a>
            </div>
            <div class="col col_13 no_margin_right">
                <table>
                    <tr>
                        <td height="30" width="160">цена:</td>
                        <td><?php echo $product['price']; ?> $ </td>
                    </tr>
                    <tr>
                        <td height="30">Доступность:</td>
                        <td><?php if($product['status'] == 1) echo 'Есть на складе' ; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Артикуль:</td>
                        <td><?php echo $product['code']; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Manufacturer:</td>
                        <td>Apple</td>
                    </tr>
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5><strong>Описание товара</strong></h5>
            <p><?php echo $product['description']; ?></p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Other Products</h4>
        	<div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/01.jpg" alt="Product 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="images/product/02.jpg" alt="Product 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="images/product/03.jpg" alt="Product 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>
            <a href="#" class="more float_r">View all</a>
            
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>

