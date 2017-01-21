<?php require_once(ROOT.'/views/layouts/header.php');?>

    
    <div id="templatemo_middle">
    	<img src="/template/images/templatemo_image_01.png" alt="Image 01" />
    	<h1>Добро пажоловать!</h1>
        <p>Это тестовый интернет магазин ,весь функцонал реализован, и можете его тестировать, и именно:<br>
            Регистрация, авторизация, корзина, обратная связь, каталог товаров. Можете производить заказы любого количества товаров, и тем самым проверить функционал сайта.
        Дерзайте!</p>
        
    </div> <!-- END of middle -->
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        
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
                    	
            	
        </div> 
        <div class="cleaner"></div>
         <?php include ROOT.'/views/layouts/product_slider.php'; ?>
        
    </div> <!-- END of main -->
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>