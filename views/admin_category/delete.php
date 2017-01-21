<?php require_once(ROOT.'/views/layouts/header_admin.php');?>


    <div class="main">
        <p>Вы действительно хотите удалить категорию с id=<?php echo $id;?></p>
        <form method="post">
            <input type="submit" name="submit" value="Да"/>
        </form>
       
    </div>
    

    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

