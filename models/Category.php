<?php
class Category {
   
    
    public static function getCategoriesList(){
        
        $db = Db::getConnection();
        
        $categoryList = array();
        
        $resalt  = $db->query('SELECT id,name FROM category ORDER BY sort_order ASC');
        
        $i=0;
        while ($row = $resalt->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList ;
    }
}
