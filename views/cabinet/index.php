<?php require_once(ROOT.'/views/layouts/header.php');?>

        
        <div id="content">
            <h2>Кабинет пользователя</h2>
            <h3>Приветствую, <?php echo $user['name']; ?></h3>
            <a href="/cabinet/edit"> Редактировать личные данные</a><br>
            <a href="/cabinet/"> История покупок</a>
            	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
 
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>