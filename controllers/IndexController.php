<?php

class IndexController extends Controller {

    function __construct($url) {
        parent::__construct();

        include 'models/IndexModel.php';
        $this->model = new IndexModel();
        
        $this->view->h1 = $this->model->getPage()['h1'];
        $this->view->Render();
    }

}