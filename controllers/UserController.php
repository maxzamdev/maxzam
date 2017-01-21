<?php


class UserController {
    
    public function actionRegister(){
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
               $errors[] = 'Имя не должно быть короче 3 символов';
            }
            
             if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный e-mail';
            } 
            
             if (!User::checkPassword($password)) {
                $errors[] = 'Пароль слишком короткий, он должен быть не меньше 6 символов';
            } 
            
             if (User::checkEmailExists($email)) {
                $errors[] = 'такой email уже существует';
            } 
            
            if($errors == false){
                $result = User::register($name, $email, $password);
                if($result){
                    User::auth($result);
                    
                }
                
            }
        }
        require_once ROOT.'/views/user/register.php';
        
        return true;
        
    }
    
    public function actionLogin(){
        $categories = array();
        $categories = Category::getCategoriesList();
        
       
        $email = '';
        $password = '';
       
        
        if (isset($_POST['submit'])) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;

             if (!User::checkEmail($email)) {
                $errors[] = 'email не ok';
            } 
            
             if (!User::checkPassword($password)) {
                $errors[] = 'password ne ok';
            } 
            
             $userId = User::checkUserData($email,$password);
             
             if ($userId == false){
                 $errors[] = 'Неправильные данные для входа на сайт';
             } else {
                 User::auth($userId);
                
                 header("Location: /cabinet/");
             }
            
        }
        
        require_once ROOT.'/views/user/login.php';
        return true;
    }
    
    public function actionLogout(){
      
        unset($_SESSION['user']);
        header("Location: /");
    }
}
