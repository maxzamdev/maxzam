<?php require_once(ROOT.'/views/layouts/header.php');?>


 <div id="content">
     <?php if ($result):?>
     <p>Данные отредактированы!</p>
     <?php else :?>
       		<h2>Редактирование</h2>
                <?php if(isset($errors)&& is_array($errors)):?>
                <ul> <?php foreach ($errors as $error):?>
                    <li> - <?php echo $error;?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                
            <div class="col col_13 checkout">
                
                <form action="#" method="post"> 
                    <p>Имя: </p><input type="text" name="name" placeholder="Имя" value="<?php echo $name;?>"/>
                    <p>Пароль: </p> <input type="password" name="password" placeholder="Пароль" value="<?php echo $password;?>"/><br>
                    <input type="submit" name="submit" value="Подтвердить"/>
                </form>
            </div>
            <?php endif; ?>
            
           </div> <!-- END of content -->
        <div class="cleaner"></div>
   
<?php require_once(ROOT.'/views/layouts/footer.php');?>