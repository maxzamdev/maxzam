<?php require_once(ROOT.'/views/layouts/header_admin.php');?>


    <div class="main">
       <h4>Удалить заказ #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить этот заказ?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>
       
    </div>
    

    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

