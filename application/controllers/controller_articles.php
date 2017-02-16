<?php

/**
 * Created by PhpStorm.
 * User: bori
 * Date: 02.02.2017
 * Time: 11:26
 */
class Controller_Articles extends Controller
{
    function __construct()
    {
        $this->model = new Model_Articles();
        parent::__construct();
    }
    function action_index()
    {
        $data['articles'] = $this->model->getAllWorks();
        $this->view->generate('articles_all_view.php','template_view.php',$data);
    }

}