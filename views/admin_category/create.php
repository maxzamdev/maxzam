<?php require_once(ROOT.'/views/layouts/header_admin.php');?>
    
<br>
    	
<   <h4>Добавить новую категорию</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div>
                
                <form id="create_form" action="#" method="post" enctype="multipart/form-data">

                        <p>Название категории</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>сортировка</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p>статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>

                       
                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                
            </div>
    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

