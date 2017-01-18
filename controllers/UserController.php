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
                $errors[] = 'email не ok';
            } 
            
             if (!User::checkPassword($password)) {
                $errors[] = 'password ne ok';
            } 
            
             if (User::checkEmailExists($email)) {
                $errors[] = 'такой email уже существует';
            } 
            
            if($errors == false){
                $result = User::register($name, $email, $password);
            }
        }
        require_once '/views/user/register.php';
        
        return true;
        
    }
}
