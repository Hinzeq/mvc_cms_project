<?php

class Controller {

    function __construct() {
        if(isset($_SESSION['login'])) {
            $this->view = new View();
        } 
        // if not logged
        else {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /moje_projekty/PHP/my_projects/mvc_cms/admin/login");
        }
        
    }

}