<?php

class MyDatabase{
    private $dbName;
    private $username;
    private $password;
    function __construct(){
        $this->dbName  = "twitter";
        $this->username = "maroua";
        $this->password = "Studentes01@";
    }
    function connect_to_db(){
        try{
            $db = new PDO("mysql:host=localhost;dbname=".$this->dbName, $this->username, $this->password);
            return $db;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
?>