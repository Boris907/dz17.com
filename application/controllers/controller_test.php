<?php

/**
 * Created by PhpStorm.
 * User: ITSCHOOL4
 * Date: 15.01.2017
 * Time: 12:52
 */
class Controller_test extends Controller
{
    function action_index(){
        $this->view->generate('test_view.php','template_view.php');
    }
}