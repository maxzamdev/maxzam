 <div id="sidebar">
        	<h3>Каталог</h3>
            <ul class="sidebar_menu">
                <?php foreach ($categories as $category): ?>
                <li class="<?php if($categoryId == $category['id']) echo 'active'; ?>"><a href="/category/<?php echo $category['id']; ?>" class="<?php if($categoryId == $category['id']) echo 'active'; ?>" > <?php echo $category['name']; ?></a></li>
                <?php endforeach;  ?>
            </ul>
            <h3>Подписка</h3>
            <p>Подпишитесь и получайте новости об акциях и специальных предложениях</p>
            <div id="newsletter">
                <form action="#" method="post">
                  <input type="text" value="Ваш e-mail" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Подписаться" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->

