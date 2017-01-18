 <div id="sidebar">
        	<h3>Каталог</h3>
            <ul class="sidebar_menu">
                <?php foreach ($categories as $category): ?>
                <li><a href="/category/<?php echo $category['id']; ?>"> <?php echo $category['name']; ?></a></li>
                <?php endforeach;  ?>
            </ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->

