<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getPage() {
        $query = $this->select('pages', '*', 'id = 1');
        return $query;
    }

    function getPage2() {
        $query = $this->select('pages', '*', 'id = 2');
        return $query;
    }

    function getPage3() {
        $query = $this->select('pages', '*', 'id = 3');
        return $query;
    }

    function getPage4() {
        $query = $this->select('pages', '*', 'id = 4');
        return $query;
    }

}