<?php

class Cart {
    
    public static function addProduct($id){
        $id = intval($id);
        
        $productsInCart = array();
        
        if(isset($_SESSION['products'])){
            $productsInCart = $_SESSION['products'];
            
        }
        
        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id] ++;
        } else {
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;

        
        return true;
    }
    
    public static function downperCart($id){
        $id = intval($id);
        
        
        if(isset($_SESSION['products']["{$id}"])){
            $_SESSION['products']["{$id}"] --;
            
        }
  
        return true;
    }
    public static function upperCart($id){
        $id = intval($id);
        
        
        if(isset($_SESSION['products']["{$id}"])){
            $_SESSION['products']["{$id}"]++;
            
        }
  
        return true;
    }
    
     public static function countItems(){
         if(isset($_SESSION['products'])){
             $count = 0;
             foreach ($_SESSION['products'] as $id => $quantity) {
                 $count = $count + $quantity;
             }
             return $count;
         } else {
             return 0;
         }
     }
     
     public static function getProducts(){
         if (isset($_SESSION['products'])) {
             return $_SESSION['products'];
         }
         return false;
     }
     
     public static function getTotalPrice($products){
         $productsInCart = self::getProducts();
         
         $total = 0;
         if ($productsInCart) {
             foreach ($products as $item){
                 $total += $item['price'] * $productsInCart[$item['id']];
             }
         }
         return $total;
     }
     
      public static function clear(){
          if ($_SESSION['products']) {
              unset($_SESSION['products']);
          }
      }
      
       public static function deleteProduct($id){
        $id = intval($id);
        
        if(isset($_SESSION['products'])){
            unset( $_SESSION['products'][$id]);
        }

        return true;
    }
}
