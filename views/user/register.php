<?php require_once(ROOT.'/views/layouts/header.php');?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

 <div id="content">
     <?php if ($result):?>
     <p>Вы зарегистрированы</p>
     <a href="/cabinet">Страница пользователя</a>
     <?php else :?>
       		<h2>Регистрация</h2>
                <?php if(isset($errors)&& is_array($errors)):?>
                <ul> <?php foreach ($errors as $error):?>
                    <li> - <?php echo $error;?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                
            <div class="col col_13 checkout">
                
                <form action="#" method="post"> 
                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name;?>"/><br>
                    <input type="email" name="email" placeholder="e-mail" value="<?php echo $email;?>"/><br>
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password;?>"/><br>
                    <input type="submit" name="submit" value="Регистрация"/>
                </form>
            </div>
            <?php endif; ?>
            
           </div> <!-- END of content -->
        <div class="cleaner"></div>
   
<?php require_once(ROOT.'/views/layouts/footer.php');?>