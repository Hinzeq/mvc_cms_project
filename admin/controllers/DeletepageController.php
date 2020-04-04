<?php

class DeletepageController extends Controller {

    function __construct(){
        parent::__construct();
        //echo 'Deletepage Controller';

        include 'models/DeletepageModel.php';
        $this->model = new DeletepageModel();

        $this->view->nav = $this->model->getNav();

        if(isset($_POST['id'])) {
            $this->model->deletePage($_POST['id']);
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /mvc_cms/admin/deletepage");
        }

        $this->view->DeletepageView();
    }

}