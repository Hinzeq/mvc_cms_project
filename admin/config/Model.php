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

    function select($from, $select = '*', $where = NULL) {
        $query = 'SELECT '.$select.' FROM '.$from;
        if($where != NULL) $query = $query.' WHERE '.$where;

        $query = $this->pdo->prepare($query);
        $query->execute(); 
        
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // for nav
    function selectAll($from, $select = '*') {
        $query = 'SELECT '.$select.' FROM '.$from;

        $query = $this->pdo->prepare($query);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // in $this->value I have name of column then I can insert into this column data
    function value(...$items) {
        foreach ($items as $item) {
            array_push($this->value, $item);
        }
        return $this->value;
    }

    // I created this method because i don't know how many column will have query
    function insertPage(...$items) {
        /* expected argument:
        first -> mane of table
        second -> array columns name
        rest -> values [you can use value method]*/
        $from = $items[0];
        array_shift($items);

        $column = $items[0];
        array_shift($items);
        $add = '';

        for($i = 0; $i < count($column); $i++) {
            $add = $add.":$column[$i],";
        }
        $add = rtrim($add, ",");

        $query = $this->pdo->prepare("INSERT INTO $from VALUES(NULL, $add)");
        for($i = 0; $i < count($items); $i++) {
            $query->bindValue(":$column[$i]", $items[$i]);
        }

        $query->execute();
    } 
    
    function update(...$items) {
        $from = $items[0];
        array_shift($items);

        $column = $items[0];
        array_shift($items);

        $id = $items[0];
        array_shift($items);
        $add = '';

        for($i = 0; $i < count($column); $i++) {
            $add = $add."$column[$i] = :$column[$i],";
        }
        $add = rtrim($add, ",");

        $query = $this->pdo->prepare("UPDATE $from SET $add WHERE id = $id");
        for($i = 0; $i < count($items); $i++) {
            $query->bindValue(":$column[$i]", $items[$i]);
        }

        $query->execute();
    }

    function delete($id, $from) {
        $query = $this->pdo->prepare("DELETE FROM $from WHERE id = $id");
        dd($query);
        $query->execute();
    }

}