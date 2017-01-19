<?php require_once(ROOT.'/views/layouts/header.php');?>

    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="product_slider">
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                <img src="\template\images\gallery\01.jpg" alt="product 1" /></a>
                        </div>	
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                <img src="/template/images/gallery/02.jpg" alt="product 2" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                 <img src="/template/images/gallery/03.jpg" alt="product 3" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                <img src="/template/images/gallery/04.jpg" alt="product 4" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                               <img src="/template/images/gallery/05.jpg" alt="product 5" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                <img src="/template/images/gallery/06.jpg" alt="product 6" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#" target="_parent">
                                <img src="/template/images/gallery/07.jpg" alt="product 7" /></a>
                        </div>
                    </div>			
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        
       <?php include ROOT.'/views/layouts/sidebar.php'; ?>
        
        <div id="content">
            <?php foreach ($latestProducts as $product): ?>
        	<div class="col col_14 product_gallery no_margin_right">
            	<a href="/product/<?php echo $product['id']; ?>"><img src="/template/images/product/01.jpg" alt="Product 01" /></a>
                <h3><?php echo $product['name']; ?></h3>
                <p class="product_price"><?php echo $product['price']; ?></p>
                <a href="/cart/add/<?php echo $product['id']; ?>" class="add_to_cart">В корзину!</a>
                </div>
            <?php endforeach;?>
                    	
            	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>