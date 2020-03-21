<?php

class LogoutController extends Controller {

    function __construct() {
        session_start();
        $_SESSION['login'] = NULL;
        dd($_SESSION['login']);
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /mvc_cms/admin");
    }

}