<?php

class Router {

    function __construct() {
        if(isset($_GET['url'])) {
            $url = explode('/', rtrim($_GET['url'], '/'));
        } else {
            $url = ['index.php'];
        }

        if($url[0] == 'index.php') {
            $controller = 'Index';
        } else {
            $controller = ucfirst($url[0]);
        }

        $file = 'controllers/'.$controller.'Controller.php';

        if(file_exists($file)) {
            include $file;
            $controller = $controller.'Controller';
            $control = new $controller($url);
        }

        else {
            echo "Nie znaleziono kontrollera";
        }

    }

}