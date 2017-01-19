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

}
