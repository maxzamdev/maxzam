<?php


class Order {
    public static function save($user_name, $user_phone, $user_comment, $user_id, $products){
      
        $products = json_encode($products);

        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) '.
                ' VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $user_phone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $user_comment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        
        return $result->execute();
        
    }
}
