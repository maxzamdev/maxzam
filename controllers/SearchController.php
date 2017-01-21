<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchController
 *
 * @author Max
 */
class SearchController {
    public function actionSearch()
    {
        print_r($_POST);
        
        if ($_POST['submit']) {
            $search = $_POST['search'];
            printf($search) ;
            die();
        }
        return true;
    }
}
