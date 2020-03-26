<?php

class LoginController extends Controller {

    function __construct() {
        session_start();
        echo 'Login Controller<br/>';

        if(isset($_SESSION['login'])) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /mvc_cms/admin");
        } 
        
        else {

            if(isset($_POST['login']) && isset($_POST['pass'])) {

                if($_POST['login'] == 'admin' && $_POST['pass'] == 'admin') {
                    $_SESSION['login'] = true;
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: /mvc_cms/admin");
                } else {
                    $_SESSION['error'] = 'zly login lub haslo';
                    $this->view = new View();
                    $this->view->LoginRender();
                }
                
            } else {
                $this->view = new View();
                $this->view->LoginView();
            }

        }

    }

}