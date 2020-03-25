<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function addPage($h1, $content, $meta_title, $meta_desc) {
        $h1 = htmlspecialchars($h1);
        $content = htmlspecialchars($content);
        $meta_title = htmlspecialchars($meta_title);
        $meta_desc = htmlspecialchars($meta_desc);

        $table_name = $this->value('h1', 'content', 'meta_title', 'meta_desc');
        $this->insert('pages', $table_name, $h1, $content, $meta_title, $meta_desc);
        // $this->insert($h1, $content, $meta_title, $meta_desc);
    }

}