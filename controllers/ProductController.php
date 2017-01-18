<?php

include_once ROOT.'/models/Category.php';
class ProductController {
    
     public function actionView($id){
         
        $categories = array();
        $categories = Category::getCategoriesList();
        
        require_once (ROOT.'/views/product/view.php');
        
        return true;
    } 
}
