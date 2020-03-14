<?php

class IndexController extends Controller {

    function __construct($url) {
        parent::__construct();

        include 'models/IndexModel.php';
        $this->model = new IndexModel();

        $action = 'Home';
        if(isset($url[1])){
            $action = ucfirst($url[1]);
        }

        $this->$action();
    }

    private function Home() {
        $this->view->h1 = $this->model->getPage()['h1'];
        $this->view->content = $this->model->getPage()['content'];
        $this->view->Render();
    }

    private function Offert() {
        $this->view->h1 = $this->model->getPage2()['h1'];
        $this->view->content = $this->model->getPage2()['content'];
        $this->view->Render();
    }

    private function About_us() {
        $this->view->h1 = $this->model->getPage3()['h1'];
        $this->view->content = $this->model->getPage3()['content'];
        $this->view->Render();
    }

    private function Blog() {
        $this->view->h1 = $this->model->getPage4()['h1'];
        $this->view->content = $this->model->getPage4()['content'];
        $this->view->Render();
    }

}