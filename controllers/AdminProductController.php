<?php

class AdminProductController extends AdminBase{
    
    
    public static function actionIndex(){
        self::checkAdmin();
        
        $productsList = Product::getProductsList();
        
        require_once (ROOT.'/views/admin_product/view.php');
        return true;
        
    }
    public static function actionCreate(){
        
        self::checkAdmin();
    }
    public static function actionUpdate(){
        self::checkAdmin();
    }
    
    public static function actionDelete($id){
        self::checkAdmin();
        
        if (isset($_POST['submit'])) {
            Product::deleteProductById($id);
            
            header("Location: /admin/product");
        }
        
        require_once (ROOT.'/views/admin_product/delete.php');
        return true;
    }
}
