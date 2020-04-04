<?php

class ChangepageModel extends Model {

    function __construct(){
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

    function updatePage($id, $h1, $content, $meta_title, $meta_desc, $meta_index, $meta_follow, $menu_nav) {
        $h1 = htmlspecialchars($h1);
        $content = htmlspecialchars($content);
        $meta_title = htmlspecialchars($meta_title);
        $meta_desc = htmlspecialchars($meta_desc);
        $meta_index = htmlspecialchars($meta_index);
        $meta_follow = htmlspecialchars($meta_follow);
        $menu_nav = htmlspecialchars($menu_nav);

        $table_name = $this->value('h1', 'content', 'meta_title', 'meta_desc', 'meta_index', 'meta_follow', 'menu_nav');
        $this->update('pages', $table_name, $id, $h1, $content, $meta_title, $meta_desc, $meta_index, $meta_follow, $menu_nav);
    }

}