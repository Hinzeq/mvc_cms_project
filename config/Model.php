<?php

class Model {

    function __construct() {
        try {
            include 'config.php';
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
            //$this->pdo = new PDO("mysql:host=localhost;dbname=mvc_cms;charset=utf8", 'root', '');
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

}