<?php require_once(ROOT.'/views/layouts/header_admin.php');?>
    
<br>
    	
<a href="/admin/category/create" >Добавить категорию</a>
<br><br>
    <table  width="90%" cellspacing="0" cellpadding="6">
                  <tr bgcolor="#CCCCCC">
                        <th  align="left">Id категории </th> 
                        <th  align="left">Название</th> 
                        <th align="left">сортировка</th> 
                        <th  align="left">статус</th> 
                        <th  align="right"></th> 
                        <th align="right"> </th>
                  </tr>
                <?php foreach ($categoriesList as $category):   ?>  
                    <tr>
                        <td><?php echo $category['id'];  ?></td> 
                        <td><?php echo $category['name'];  ?></td>
                        <td ><?php echo $category['sort_order'];  ?></td>
                        <td ><?php echo $category['status'];  ?></td> 
                        <td > <a href="/admin/category/update/<?php echo $category['id'];  ?>"><br />Изменить</a> </td>
                        <td > <a href="/admin/category/delete/<?php echo $category['id'];  ?>"><br />Убрать</a> </td>
                    </tr>
                     
                  <?php endforeach;?>

              </table>
    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

