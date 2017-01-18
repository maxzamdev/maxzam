<?php

class Product {
    const SHOW_BY_DEFAULT = 10;
    
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT){
        $count = intval($count);
        
        $db = Db::getConnection();
        
        $productList = array();
        
        $resalt  = $db->query('SELECT id,name,price,image,is_new FROM product'.
                ' WHERe status = "1" ORDER BY id DESC LIMIT ' . $count);
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productList ;
        
    }
}
