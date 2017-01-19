<?php require_once(ROOT.'/views/layouts/header.php');?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>      

        <div id="content">
            <h2>Корзина</h2>
            <?php if ($productsInCart):   ?>
              <p>Вы выбрали такие товары:</p>
              <table id="cart">
                  <tr>
                      <th>Код товара</th>
                      <th>Название</th>
                      <th>Стоимость, грн</th>
                      <th>Количество, шт</th>
                  </tr>
                <?php foreach ($products as $product):   ?>  
                  <tr>
                      <td><?php echo $product['code'];  ?></td>
                      <td><a id="a_cart" href="/product/<?php echo $product['id'];  ?> "><?php echo $product['name'];  ?></a></td>
                      <td><?php echo $product['price'];  ?></td>
                      <td><?php echo $productsInCart[$product['id']];  ?></td>
                  </tr>
                  <?php endforeach;?>
                  <tr>
                      <td colspan="3">Общая стоимсоть:</td>
                      <td><?php echo $totalPrice;  ?></td>
                  </tr>
              </table>
              <?php endif;?>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
 
    

<?php require_once(ROOT.'/views/layouts/footer.php');?>