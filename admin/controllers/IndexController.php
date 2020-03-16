<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
        echo 'IndexController<br/>';
        $this->view->Render();
    }

}