<?php
require_once('../Models/User_Model.php');
require_once('../database/DB.php');

class Inscription{
    private $user_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->user_table = new User();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }
    function add_email($pswd_hash){
        $this->user_table->add_user_email($this->db, $_POST['username'], $_POST['login'] , $pswd_hash, $_POST['birthdate']);
    }
    function add_tel($pswd_hash){
        $this->user_table->add_user_phone($this->db, $_POST['username'], $_POST['login'], $pswd_hash, $_POST['birthdate']);
    }
    function check(){
        return $this->user_table->check_user_exist($this->db, $_POST['login']);
    }

}
$obj = new Inscription();
// Hash le MDP avant de l'implementer dans la BD
$pswd_hash = password_hash( "vive le projet tweet_academy".$_POST['pswd'], PASSWORD_DEFAULT);
// Appel la fonction par rapport à si le login === tel OR login === email
if( $_POST['check'] === "tel" ){ 
    $obj->add_tel($pswd_hash);
}
else{
    $obj->add_email($pswd_hash);
}
$info = $obj->check();
if(count($info) < 1){
    echo "lose";
}
else{
    echo "win";
}

?>