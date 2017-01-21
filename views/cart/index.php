<?php require_once(ROOT.'/views/layouts/header.php');?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>      

        <div id="content">
            <h2>Корзина</h2>
            <?php if ($productsInCart):   ?>
              <p>Вы выбрали такие товары:</p>
              <table  width="700px" cellspacing="0" cellpadding="5">
                  <tr bgcolor="#CCCCCC">
                        <th width="220" align="left">Изображение </th> 
                        <th width="180" align="left">Название </th> 
                        <th width="70" align="center">Количество</th> 
                        <th width="90" align="right">Цена, шт </th> 
                        <th width="60" align="right">Общая стоимость</th> 
                        <th width="90"> </th>
                  </tr>
                <?php foreach ($products as $product):   ?>  
                    <tr>
                        <td><img src="<?php echo Product::getImage($product['id']); ?>" width="100" alt="" /></td> 
                        <td><a id="a_cart" href="/product/<?php echo $product['id'];  ?> "><?php echo $product['name'];  ?></a></td>
                        <td align="center">
                             <a  href="/cart/downper/<?php echo $product['id'];  ?> "> <- </a>
                                <?php echo ' '.$productsInCart[$product['id']].' ';  ?> 
                             <a  href="/cart/upper/<?php echo $product['id'];  ?> ">-></a> 
                        </td>
                        <td align="right"><?php echo $product['price'];  ?> грн </td> 
                        <td align="right"><?php echo ($product['price']*$productsInCart[$product['id']]);  ?> грн</td>
                        <td align="center"> <a href="/cart/delete/<?php echo $product['id'];  ?>"><img src="/template/images/remove_x.gif" alt="remove" /><br />Убрать</a> </td>
                    </tr>
                     
                  <?php endforeach;?>
                      <tr>
                    <td colspan="3" align="right"  height="40px">Вы изменили количество товаров? нажмите  <a href="#"><strong>Сюда</strong></a>&nbsp;&nbsp;</td>
                            <td align="right" style="background:#ccc; font-weight:bold">Общая стоимость: </td>
                            <td align="right" style="background:#ccc; font-weight:bold"><?php echo $totalPrice;  ?> грн</td>
                            <td style="background:#ccc; font-weight:bold"> </td>
						</tr>
                 
              </table>
              <div style="float:right; width: 215px; margin-top: 20px;">
                    
                        <div class="checkout"><a href="/cart/checkout" class="more">Оформить заказ</a></div>
                        <div class="cleaner h20"></div>
                        <div class="continueshopping"><a href="javascript:history.back()" class="more">Продолжить покупки</a></div>
                    	
               </div>
             <?php else:?>
              <div>
                  <p>Ваша корзина пуста, возращайтесь на главную страницу ,чтобы совершить покупки! <a href="/" style="color: #00f">Главная</a> </p>
              </div> 
                  <?php endif;?>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
 
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>