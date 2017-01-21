<?php require_once(ROOT.'/views/layouts/header.php');?>

        <?php if(!empty($ordersList)):?>
        <div id="content">
            <h2>История покупок</h2>
    
            <table  width="100%" cellspacing="5" cellpadding="7">
                 
                <tr>
                    <th>ID заказа</th>
                   
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr align="center">
                        <td>
                           <?php echo $order['id']; ?>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/cabinet/history/<?php echo $order['id']; ?>">Подробности</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
 <?php else:?> <div id="content">
            <h2>История покупок пуста</h2>
     </div> <!-- END of content -->
        <div class="cleaner"></div>
<?php endif;?> 
        
<?php require_once(ROOT.'/views/layouts/footer.php');?>