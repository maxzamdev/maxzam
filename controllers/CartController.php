<?php


class CartController {
   
    public function actionAdd($id){
        
        
        Cart::addProduct($id);
       
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: {$referrer}");
        
    }

    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $productsInCart = false;
        
        $productsInCart = Cart::getProducts();
 
        if($productsInCart){
            $productIds = array_keys($productsInCart);
           
            $products = Product::getProductByIds($productIds);
            
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once (ROOT.'/views/cart/index.php');
        return true;
    }

     public function actionCheckout(){
         
        $categories = array();
        $categories = Category::getCategoriesList();
         
        $result = false;
        
        if(isset($_POST['submit'])){
            
           
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            
            $errors = false;
            
             if (!User::checkName($userName)) 
               $errors[] = 'Неправильное имя';
              if (!User::checkPhone($userPhone)) 
                 $errors[] = 'Неправильный телефон';
           if ($errors == false) {
               
               $productsInCart = Cart::getProducts();
               if (User::isGuest()){
                   $userId = 0;
               } else {
                   $userId = User::checkLogged();
               }
             
                
               $result = Order::save($userName,$userPhone,$userComment,$userId,$productsInCart);
           
               if ($result) {
                   $adminEmail = 'max_dev@inbox.ru';
                   $message = 'новый заказ';
                   $subject = 'новый заказ';
                   mail($adminEmail,$message,$subject );
                   
                   Cart::clear();
               }
             }else {
                $productsInCart = Cart::getProducts();
                $productIds = array_keys($productsInCart);
                $products = Product::getProductByIds($productIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
                 
             }
            
        } else {
             
          $productsInCart = Cart::getProducts();
            if($productsInCart == false){
                
                header("Location: /");
            } else {
                $productIds = array_keys($productsInCart);
                $products = Product::getProductByIds($productIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
                
                 $userName = false;
                 $userPhone = false;
                 $userComment = false;
                 
                 if (User::isGuest()) {
                     
                 } else {
                     
                     $userId = User::checkLogged();
                     $user = User::getUserById($userId);
                     $userName = $user['name'];
                 }
            }
        }
         
         require_once (ROOT.'/views/cart/checkout.php');
         return true;
     }
     
     public function actionDelete($id){
         
         Cart::deleteProduct($id);
         
        
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: {$referrer}");
     }
}
