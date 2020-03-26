<?php

class DeletepageModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getNav() {
        $query = $this->selectAll('pages', '*');
        return $query;
    }

    function deletePage($id) {
        $this->delete($id, 'pages');
    }

}