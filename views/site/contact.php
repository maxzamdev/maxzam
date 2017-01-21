<?php require_once(ROOT.'/views/layouts/header.php');?>



 <div id="content">
     <?php if ($result):?>
     <p>Сообщение успешно отправлено, ждите ответа администратора!</p>
     <?php else :?>
       		<h2>Обратная связь</h2>
                <?php if(isset($errors)&& is_array($errors)):?>
                <ul> <?php foreach ($errors as $error):?>
                    <li> - <?php echo $error;?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                
            <div class="col col_13 checkout">
                
                <form action="#" method="post"> 
                    <p>Ваш e-mail:</p>
                    <input type="email" name="userMail" placeholder="e-mail"/>
                    <br>
                    <p>Ваше сообщение:</p>
                    <textarea name="userText" placeholder="Сообщение"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Отправить"/>
                </form>
            </div>
            <?php endif; ?>
            
           </div> <!-- END of content -->
        <div class="cleaner"></div>
   
<?php require_once(ROOT.'/views/layouts/footer.php');?>