<?php

function dd($e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
}

include 'config/Router.php';
include 'config/Controller.php';
include 'config/Model.php';
include 'config/View.php';

$_SESSION['login'] = true; // test - temporarily for login system

$Router = new Router();