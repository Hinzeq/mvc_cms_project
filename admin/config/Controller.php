<?php

class Controller {

    function __construct() {
        session_start();
        if(isset($_SESSION['login'])) {
            $this->view = new View();
        } 
        // if not logged
        else {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /mvc_cms/admin/login");
        }
        
    }

}