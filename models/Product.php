<?php

class Product {
    const SHOW_BY_DEFAULT = 6;
    
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT){
        $count = intval($count);
        
        $db = Db::getConnection();
        
        $productList = array();
        
        $resalt  = $db->query('SELECT id,name,price,is_new FROM product'.
                ' WHERe status = "1" ORDER BY id DESC LIMIT ' . $count);
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productList ;
        
    }
  
    public static function getProductsListByCategory($categoryId = false, $page = 1){
        if($categoryId) {
            $categoryId = intval($categoryId);
            $offset = ($page-1) * self::SHOW_BY_DEFAULT; 
            $db = Db::getConnection();
            $product = array();
            $resalt  = $db->query('SELECT id,name,price,is_new FROM product'.
                ' WHERe status = "1" AND category_id = '.$categoryId
                    .' ORDER BY id ASC LIMIT ' . self::SHOW_BY_DEFAULT.
                    ' OFFSET '.$offset);
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $product[$i]['id'] = $row['id'];
            $product[$i]['name'] = $row['name'];
            $product[$i]['price'] = $row['price'];
            $product[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $product ;
        }
    }
    
    public static function getProductById($id){
        
        $id = intval($id);
        if($id){
        $db = Db::getConnection();
        
        $resalt  = $db->query('SELECT * FROM product WHERE id = '.$id);
        $resalt->setFetchMode(PDO::FETCH_ASSOC);
        
        return $resalt->fetch();
        }
    }
    public static function getProductByIds($idsArray){
        
        $products = array();
        
        $db = Db::getConnection();
        
        $idsArray = implode(',',$idsArray);
        
        $sql = "SELECT * FROM product WHERE status = '1' AND id IN ({$idsArray})";
        $result  = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i=0;
        while ($row = $result->fetch()){
           $products[$i]['id']=$row['id'];
           $products[$i]['code']=$row['code'];
           $products[$i]['name']=$row['name'];
           $products[$i]['price']=$row['price'];
           $i++;
        }
       
        return $products;
        }
    
    
    public static function getTotalProductsInCategory($categoryId){
         $db = Db::getConnection();
        $resalt  = $db->query('SELECT count(id) AS count FROM product WHERE category_id = '.$categoryId);
        $resalt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $resalt->fetch();
        
        return $row['count'];
     }
     
    public static function getRecomendedProducts(){
           $db = Db::getConnection();
        
        $recomendedList = array();
        
        $resalt  = $db->query('SELECT id,name,price,is_new FROM product'.
                ' WHERe status = "1" AND is_recommended = "1" ORDER BY id DESC LIMIT 20');
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $recomendedList[$i]['id'] = $row['id'];
            $recomendedList[$i]['name'] = $row['name'];
            $recomendedList[$i]['price'] = $row['price'];
            $recomendedList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $recomendedList ;
      }
      
    public static function getProductsList(){

        $db = Db::getConnection();
        
        $productList = array();
        
        $resalt  = $db->query('SELECT id,name,price,code FROM product'.
                ' WHERe status = "1" ORDER BY id ASC');
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['code'] = $row['code'];
            $i++;
        }
        return $productList ;
        
    }
    
    public static function deleteProductById($id){

        $db = Db::getConnection();
        
        $sql = 'DELETE FROM product WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        return $result->execute() ;
        
    }
    
    public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_new = :is_new, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Добавляет новый товар
     * @param array $options <p>Массив с информацией о товаре</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO product '
                . '(name, code, price, category_id, brand, availability,'
                . 'description, is_new, is_recommended, status)'
                . 'VALUES '
                . '(:name, :code, :price, :category_id, :brand, :availability,'
                . ':description, :is_new, :is_recommended, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
    
     public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }

    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no_image.png';

        // Путь к папке с товарами
        $path = '/upload/images/products/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
      
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

}
