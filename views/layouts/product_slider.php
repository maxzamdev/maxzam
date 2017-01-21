<div id="product_slider">
            <h2>Рекомендуемые товары</h2>
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                         <?php foreach ($recommendedList as $product): ?>
                        <div class="SlideItMoo_element">
                                <a  href="/product/<?php echo $product['id']; ?>" target="_parent"><?php echo $product['name']; ?>
                                <img src="\template\images\gallery\01.jpg" alt="product 1" /></a>
                        </div>	
                         <?php endforeach;?>
                    </div>			
                </div>
            </div>
            <div class="cleaner"></div>
        </div><!-- END of content -->
