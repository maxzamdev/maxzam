<?php require_once(ROOT.'/views/layouts/header_admin.php');?>
    
<br>
    	
<a href="/admin/product/create" >Добавить товар</a>
<br><br>
    <table  width="90%" cellspacing="0" cellpadding="6">
                  <tr bgcolor="#CCCCCC">
                        <th  align="left">Id товара </th> 
                        <th  align="left">Артикул</th> 
                        <th align="left">Название</th> 
                        <th  align="left">Цена, шт </th> 
                        <th  align="right"></th> 
                        <th align="right"> </th>
                  </tr>
                <?php foreach ($productsList as $product):   ?>  
                    <tr>
                        <td><?php echo $product['id'];  ?></td> 
                        <td><?php echo $product['code'];  ?></td>
                        <td ><?php echo $product['name'];  ?></td>
                        <td ><?php echo $product['price'];  ?> грн </td> 
                        <td > <a href="/admin/product/update/<?php echo $product['id'];  ?>"><br />Изменить</a> </td>
                        <td > <a href="/admin/product/delete/<?php echo $product['id'];  ?>"><br />Убрать</a> </td>
                    </tr>
                     
                  <?php endforeach;?>

              </table>
    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

