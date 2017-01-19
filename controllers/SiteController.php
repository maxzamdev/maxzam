<?php
/**
 * Description of SiteController
 *
 * @author Max
 */


class SiteController {
    
    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
         
        require_once (ROOT.'/views/site/index.php');
        
        return true;
    } 
    
    public function actionContact(){
        
        $userMail = '';
        $userText = '';
        $result = false;
        if (isset($_POST['submit'])) {
            
            $userMail = $_POST['userMail'];
            $userText = $_POST['userText'];
            
            $errors= false;
            
            if (!User::checkEmail($userMail)) {
                $errors[] = 'email не ok';
            } 
            
            if($errors == false){
                $adminEmail = 'max_dev@inbox.ru';
                $subject='Тема письма';
                $message="Текст: {$userText}. от {$userMail} ";
                $result = mail($adminEmail,$subject,$message);
                $result = true;
            }
        }
        require_once (ROOT.'/views/site/contact.php');
       return true;
    }
       public function actionAbout(){
           require_once (ROOT.'/views/site/about.php');
           return true;
       }
}
