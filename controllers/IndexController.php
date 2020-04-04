<?php

class IndexController extends Controller {

    function __construct($url) {
        parent::__construct();

        include 'models/IndexModel.php';
        $this->model = new IndexModel();

        $id = 1;
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        
        $this->view->nav = $this->model->getNav();
        $this->view->h1 = $this->model->getPage('h1', $id)['h1'];
        $this->view->content = $this->model->getPage('content', $id)['content'];
        $this->view->title = $this->model->getPage('meta_title', $id)['meta_title'];
        $this->view->desc = $this->model->getPage('meta_desc', $id)['meta_desc'];
        $this->view->index = $this->model->getPage('meta_index', $id)['meta_index'];
        $this->view->follow = $this->model->getPage('meta_follow', $id)['meta_follow'];
        $this->view->Render();
    }

}