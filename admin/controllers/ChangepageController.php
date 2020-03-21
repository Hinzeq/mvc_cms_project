<?php

class ChangepageController extends Controller {

    function __construct() {
        parent::__construct();
        echo 'Changepage Controller';
        $this->view->Change();
    }

}