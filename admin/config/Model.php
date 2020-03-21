<?php

class Model {

    private $value = array();

    function __construct() {
        try {
            include 'config.php';
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
        }
        catch(PDOException $e) {
            die('Nie można nawiązać połączenia z bazą danych:<br/>'.$e->getMessage());
        }
    }

    function __descruct() {
        $this->pdo = NULL;
    }

    // in $this->value I have name of column then I can insert into this column data
    function value(...$items) {
        foreach ($items as $item) {
            array_push($this->value, $item);
        }
        return $this->value;
    }

    // I created this method because i don't know how many column will have query
    public function insertPage(...$items) {
        $column = $items[0];
        array_shift($items);
        $add = '';

        for($i = 0; $i < count($column); $i++) {
            $add = $add.":$column[$i],";
        }
        $add = rtrim($add, ",");

        $query = $this->pdo->prepare("INSERT INTO pages VALUES(NULL, $add)");
        dd($query);
        for($i = 0; $i < count($items); $i++) {
            $query->bindValue(":$column[$i]", $items[$i]);
        }

        $query->execute();

    } 

    // public function insert($h1, $content, $meta_title, $meta_desc) {    
    //     $query = $this->pdo->prepare("INSERT INTO pages VALUES(NULL, :h1, :content, :meta_title, :meta_desc)");
    //     $query->bindValue(':h1', $h1);
    //     $query->bindValue(':content', $content);
    //     $query->bindValue(':meta_title', $meta_title);
    //     $query->bindValue(':meta_desc', $meta_desc);
    //     $query->execute();
        // dd($query);
    // }

}

    