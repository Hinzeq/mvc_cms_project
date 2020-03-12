<?php

class Router {

    function __construct() {
        $url = explode('/', rtrim($_GET['url'], '/'));

        
        if($url[0] == 'index.php') {
            $controller = "Index"; // default
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