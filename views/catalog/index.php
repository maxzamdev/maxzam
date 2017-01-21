<?php require_once(ROOT.'/views/layouts/header.php');?>

    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        
        
       <?php include ROOT.'/views/layouts/sidebar.php'; ?>
        
        <div id="content">
            <?php foreach ($latestProducts as $product): ?>
        	<div class="col col_14 product_gallery no_margin_right">
            	<a href="/product/<?php echo $product['id']; ?>"><img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" /></a>
                <h3><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
                <p class="product_price"><?php echo $product['price']; ?></p>
                <a href="/cart/add/<?php echo $product['id']; ?>" class="add_to_cart">В корзину!</a>
                </div>
            <?php endforeach;?>
                    	
            	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
        <?php include ROOT.'/views/layouts/product_slider.php'; ?>
    </div> <!-- END of main -->
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>