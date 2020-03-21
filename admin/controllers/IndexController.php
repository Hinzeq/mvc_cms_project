<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
        echo 'Index Controller<br/>';
        $this->view->Render();
    }

}