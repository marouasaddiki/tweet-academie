<?php
require('../Models/User_Model.php');
require('../database/DB.php');

class searchCtrl {
    private $user_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->user_table = new User();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }
    function search(){
        $a =  $this->user_table->searchUser($this->db, $_POST['dataUser']);
        return $a;
         
    }
}
$obj = new searchCtrl();
$table = $obj->search();

foreach($table as $key => $col){
    foreach ($col as $clé  => $valeur){
        if($clé === "username"){
            echo $valeur.";";
        } 
    }
}
?>