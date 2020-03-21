<?php

class View {

    public function Render() {
        include 'views/index.php';
    }

    public function LoginRender() {
        include 'views/login.php';
    }

    public function Change() {
        include 'views/changepage.php';
    }

}