<?php
session_start();
require_once('../Models/User_Model.php');
require_once('../database/DB.php');
class Edit{
    private $user_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->user_table = new User();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }
    function edit_name(){
        $this->user_table->edit_update_name($this->db, $_SESSION['id'], $_POST['name']);
    }
    function edit_bio(){
        $this->user_table->edit_update_bio($this->db, $_SESSION['id'], $_POST['bio']);
    }
    function edit_location(){
        $this->user_table->edit_update_location($this->db, $_SESSION['id'], $_POST['location']);
    }
    function edit_website(){
        $this->user_table->edit_update_website($this->db, $_SESSION['id'], $_POST['website']);
    }
    

}
$obj = new Edit();
$obj->edit_name();
$obj->edit_bio();
$obj->edit_location();
$obj->edit_website();

$_SESSION['name'] = $_POST['name'];
$_SESSION['bio'] = $_POST['bio'];
$_SESSION['location'] = $_POST['location'];
$_SESSION['website'] = $_POST['website'];

// echo $_SESSION['name']."\n".$_SESSION['bio']."\n".$_SESSION['location']."\n".$_SESSION['website'];
?>