<?php require_once(ROOT.'/views/layouts/header.php');?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

 <div id="content">
     <?php if ($result):?>
     <p>Заказ оформлен. Мы Вам перезвоним!</p>
     <?php else :?>
       		<h2>Оформление заказа</h2>
                
                <?php if(isset($errors)&& is_array($errors)):?>
                <ul> <?php foreach ($errors as $error):?>
                    <li> - <?php echo $error;?></li>
                    <?php endforeach; ?>
                </ul>
               
            <?php endif; ?>
                
            <div class="col col_13 checkout">
                
                <form action="#" method="post"> 
                     <p>Выбрано товаров <?php echo $totalQuantity;?> шт, на сумму <?php echo $totalPrice;?> грн </p>
                     <p>Ваше Имя:</p>
                    <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName;?>"/>
                    <p>Ваш телефон, формат ввода 38(ххх)ххх-хх-хх</p>
                    <input type="text"  name="userPhone" placeholder="Телефон" value="<?php echo $userPhone;?>"/>
                    <p>Ваш коментарий к заказу:</p>
                    <input type="text"  name="userComment" placeholder="Комментарий" value="<?php echo $userComment;?>"/><br>
                    <input type="submit" name="submit" value="Отправить"/>
                </form>
            </div>
            <?php endif; ?>
            
           </div> <!-- END of content -->
        <div class="cleaner"></div>
   
<?php require_once(ROOT.'/views/layouts/footer.php');?>