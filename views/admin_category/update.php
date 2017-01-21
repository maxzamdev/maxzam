<?php require_once(ROOT.'/views/layouts/header_admin.php');?>
    
<br>
    	
<   <h4>Добавить новый товар</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div>
                
                <form id="create_form"  action="#" method="post" enctype="multipart/form-data">

                       <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>сортировка</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $category['sort_order']; ?>">

                    

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                
            </div>
    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

