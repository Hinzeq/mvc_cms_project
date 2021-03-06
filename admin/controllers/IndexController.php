<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'Index Controller<br/>';

        include 'models/IndexModel.php';
        $this->model = new IndexModel();

        if(
            (@$_POST['h1_text'] != '') &&
            ($_POST['content_text'] != '') &&
            ($_POST['meta_title'] != '') &&
            ($_POST['meta_desc'] != '') &&
            ($_POST['meta_index'] != '') &&
            ($_POST['meta_follow'] != '') &&
            ($_POST['menu_text'] != '')
        ) {
            $this->model->addPage($_POST['h1_text'], $_POST['content_text'], $_POST['meta_title'], $_POST['meta_desc'], $_POST['meta_index'], $_POST['meta_follow'], $_POST['menu_text']);

            $_SESSION['message'] = 'Strona została pomyślnie dodana';
        } else {
            $_SESSION['message'] = 'Nie podano wszystkich wartości!';
        }

        $this->view->IndexView();
    }

}