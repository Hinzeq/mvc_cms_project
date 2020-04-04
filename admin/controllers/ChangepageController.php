<?php

class ChangepageController extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'Changepage Controller';

        include 'models/ChangepageModel.php';
        $this->model = new ChangepageModel();

        $id = 1;
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        if(
            (@$_POST['h1_text'] != '') &&
            ($_POST['content_text'] != '') &&
            ($_POST['meta_title'] != '') &&
            ($_POST['meta_desc'] != '')
        ) {
            $this->model->updatePage($id, $_POST['h1_text'], $_POST['content_text'], $_POST['meta_title'], $_POST['meta_desc']);

            $_SESSION['message'] = 'Strona została pomyślnie zmieniona';
        }
        else {
            $_SESSION['message'] = 'Nie podano wszystkich wartości!';
        }

        $this->view->nav = $this->model->getNav();
        $this->view->h1 = $this->model->getPage('h1', $id)['h1'];
        $this->view->content = $this->model->getPage('content', $id)['content'];
        $this->view->title = $this->model->getPage('meta_title', $id)['meta_title'];
        $this->view->desc = $this->model->getPage('meta_desc', $id)['meta_desc'];
        $this->view->index = $this->model->getPage('meta_index', $id)['meta_index'];
        $this->view->follow = $this->model->getPage('meta_follow', $id)['meta_follow'];
        $this->view->menu_nav = $this->model->getPage('menu_nav', $id)['menu_nav'];
        $this->view->ChangepageView();
    }

}