<?php

class Product {
    const SHOW_BY_DEFAULT = 6;
    
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
  
    public static function getProductsListByCategory($categoryId = false, $page = 1){
        if($categoryId) {
            $categoryId = intval($categoryId);
            $offset = ($page-1) * self::SHOW_BY_DEFAULT; 
            $db = Db::getConnection();
            $product = array();
            $resalt  = $db->query('SELECT id,name,price,image,is_new FROM product'.
                ' WHERe status = "1" AND category_id = '.$categoryId
                    .' ORDER BY id ASC LIMIT ' . self::SHOW_BY_DEFAULT.
                    ' OFFSET '.$offset);
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $product[$i]['id'] = $row['id'];
            $product[$i]['name'] = $row['name'];
            $product[$i]['price'] = $row['price'];
            $product[$i]['image'] = $row['image'];
            $product[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $product ;
        }
    }
    
        public static function getProductById($id){
        
        $id = intval($id);
        if($id){
        $db = Db::getConnection();
        
        $resalt  = $db->query('SELECT * FROM product WHERE id = '.$id);
        $resalt->setFetchMode(PDO::FETCH_ASSOC);
        
        return $resalt->fetch();
        }
    }
    
     public static function getTotalProductsInCategory($categoryId){
         $db = Db::getConnection();
        $resalt  = $db->query('SELECT count(id) AS count FROM product WHERE category_id = '.$categoryId);
        $resalt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $resalt->fetch();
        
        return $row['count'];
     }
}
