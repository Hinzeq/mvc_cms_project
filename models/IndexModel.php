<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getPage($select, $id) {
        $query = $this->select("pages", "$select", "id = $id");
        return $query;
    }

    function getNav() {
        $query = $this->selectAll('pages', '*');
        return $query;
    }

}