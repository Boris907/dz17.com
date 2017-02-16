<?php

/**
 * Created by PhpStorm.
 * User: ITSCHOOL4
 * Date: 15.01.2017
 * Time: 11:28
 */
class Route
{
    static  public function start(){
        //контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if(!empty($routes[1])){
            $controller_name = $routes[1];
        }
        //Получаем имя экшена
        if(!empty($routes[2])){
            $action_name = $routes[2];
        }

        //Добавим префиксы
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        //Подключим файл с классом модели
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path)){
            include $model_path;
        }
        //подключим файл с классом контроллера
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path)){
            include $controller_path;
        }else{
            Route::ErrorPage404();
        }

        // Создаём контроллер
        $controller = new $controller_name;
        $action = $action_name;
        $parameter = null;

        if(!empty($routes[3])){
            $parameter = $routes[3];
        }

        if(method_exists($controller,$action)){
            $controller->$action($parameter);
        }else{
            Route::ErrorPage404();
        }
    }
    public static function ErrorPage404(){
        $host = 'http://'.$_SERVER['SERVER_NAME'].'/main/404';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:'.$host);
        //less19.com/404
    }

}