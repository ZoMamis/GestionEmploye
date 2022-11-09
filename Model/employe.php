<?php
require_once "config.php";
class employe extends dbConfig{
    public function __construct(){
        parent::__construct();
    }

    public function getData($sql){
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function action($sql){
        $this->conn->query($sql);
    }
}


?>