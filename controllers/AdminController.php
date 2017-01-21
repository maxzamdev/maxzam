<?php

class AdminController extends AdminBase
{
    public static function actionIndex(){
        self::checkAdmin();
        
        require_once '/views/admin/index.php';
        return true;
    }
    
}
