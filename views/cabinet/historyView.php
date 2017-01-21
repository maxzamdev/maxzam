<?php require_once(ROOT.'/views/layouts/header.php');?>


        <h4>Просмотр заказа #<?php echo $order['id']; ?></h4>
            <br/>


            <div>

            <h3>Информация о заказе</h3>
            <table  width="50%" cellspacing="2" cellpadding="6">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>
            <br>
            <br>
          <h3>Товары в заказе</h3>

            <table  width="90%" cellspacing="0" cellpadding="6">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                        <td><?php echo $product['price']; ?> грн</td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
          <div class="cleaner"></div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>