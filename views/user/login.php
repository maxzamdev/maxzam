<?php require_once(ROOT.'/views/layouts/header.php');?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

 <div id="content">
    
   
       		<h2>Вход на сайт</h2>
                <?php if(isset($errors)&& is_array($errors)):?>
                <ul> <?php foreach ($errors as $error):?>
                    <li> - <?php echo $error;?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                
            <div class="col col_13 checkout">
                
                <form action="#" method="post"> 
                    <input type="email" name="email" placeholder="e-mail" />
                    <br>
                    <input type="password" name="password" placeholder="Пароль"/><br>
                    <input type="submit" name="submit" value="Вход"/>
                </form>
            </div>
            
            
           </div> <!-- END of content -->
        <div class="cleaner"></div>
   
<?php require_once(ROOT.'/views/layouts/footer.php');?>