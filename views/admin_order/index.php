<?php require_once(ROOT.'/views/layouts/header_admin.php');?>
    
<br>
    	
<br><br>
    <table  width="90%" cellspacing="0" cellpadding="7">
                 
                <tr>
                    <th>ID заказа</th>
                    <th>ID покупателя</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_id']; ?></td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть">Смотреть</a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать">Редактировать</a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    

<?php require_once(ROOT.'/views/layouts/footer_admin.php');?>

