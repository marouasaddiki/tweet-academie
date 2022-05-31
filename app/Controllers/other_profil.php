<?php
require_once('../Models/User_Model.php');
require_once('../database/DB.php');

class Other_profil{
    private $user_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->user_table = new User();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }

    function info_other_user(){
        return $this->user_table->search_User_username($this->db, $_POST['username']);
        
    }

}
$obj = new Other_profil();
$table = $obj->info_other_user();
foreach($table as $key => $col){
    foreach($col as $clé => $valeur){
        echo $clé." => ".$valeur.";";
    }

}
?>