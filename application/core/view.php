<?php

/**
 * Created by PhpStorm.
 * User: ITSCHOOL4
 * Date: 15.01.2017
 * Time: 12:11
 */
class View
{
    public function generate($content_view,$template_view, $data = null){
        // $content_view - вид отображающий контент страницы
        // $template_view - общий для всех страниц шаблон
        // $data - массив с данными
        // $data = array('name' => 'alex','nickname' => 'unit');
        if(is_array($data)){
            extract($data);
        }
        include 'application/views/'.$template_view;
    }
}