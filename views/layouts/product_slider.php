<div id="product_slider">
            <h2>Рекомендуемые товары</h2>
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                         <?php foreach ($recommendedList as $product): ?>
                        <div class="SlideItMoo_element">
                                <a  href="/product/<?php echo $product['id']; ?>"><img src="<?php echo Product::getImage($product['id']); ?>"  alt="" />
                        </div>	
                         <?php endforeach;?>
                    </div>			
                </div>
            </div>
            <hr style="color: #ccc"/> 
            <div class="cleaner"></div>
        </div><!-- END of content -->
