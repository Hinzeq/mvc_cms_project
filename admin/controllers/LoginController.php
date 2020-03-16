<?php

class LoginController extends Controller {

    function __construct() {
        echo 'Login Controller<br/>';

        // new view here to avoid redirection loops 
        $this->view = new View();
        $this->view->LoginRender();
    }

}