<?php


class CabinetController {
   
    public function actionIndex(){
        
        $userId = User::checkLogged();
       
        $user = User::getUserById($userId);
        
        require_once (ROOT.'/views/cabinet/index.php');
        return true;
    }
    
    public function actionEdit(){
        
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
        
        $result = false;
        
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
               $errors[] = 'Имя не должно быть короче 3 символов';
            }

             if (!User::checkPassword($password)) {
                $errors[] = 'Пароль слишком короткий, он должен быть не меньше 6 символов';
            } 
            
            if($errors == false){
                $result = User::edit($userId, $name, $password);
            }
        }
        require_once '/views/cabinet/edit.php';
        
        return true;
        
    }
    
     public function actionHistory(){
         
          $userId = User::checkLogged();
          $ordersList = Order::getOrderByUserId($userId);
 
          require_once '/views/cabinet/history.php';
        
        return true;
          
     }
     
     public function actionHistoryId($id){
         
          
         // Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);

        // Получаем массив с идентификаторами и количеством товаров
        $productsQuantity = json_decode($order['products'], true);

        // Получаем массив с индентификаторами товаров
        $productsIds = array_keys($productsQuantity);

        // Получаем список товаров в заказе
        $products = Product::getProductByIds($productsIds);
 
        require_once '/views/cabinet/historyView.php';
        
        return true;
          
     }
}
