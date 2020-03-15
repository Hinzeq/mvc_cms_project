<?php

class Model {

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

    public function select($from, $select = '*', $where = NULL) {
        $query = 'SELECT '.$select.' FROM '.$from;
        if($where != NULL) $query = $query.' WHERE '.$where;

        $query = $this->pdo->prepare($query);
        $query->execute(); 
        
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // for nav
    public function selectAll($from, $select = '*') {
        $query = 'SELECT '.$select.' FROM '.$from;

        $query = $this->pdo->prepare($query);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}