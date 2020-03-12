<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getPage() {
        $query = $this->select('pages', '*', 'id = 1');
        return $query;
    }

}