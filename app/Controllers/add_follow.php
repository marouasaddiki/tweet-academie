<?php
session_start();
require_once('../Models/follow.php');
require_once('../database/DB.php');

class Add_Follow{
    private $follow_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->follow_table = new Follow();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }
    function add_follow(){
        $this->follow_table->add_follow($this->db, intval($_POST['id']), intval($_SESSION['id']));
    }
    function delete_follow(){
        $this->follow_table->delete_follow($this->db, intval($_POST['id']), intval($_SESSION['id']));
    }
    function check_follow(){
        return $this->follow_table->found_follow($this->db, intval($_POST['id']), intval($_SESSION['id']));
    }

}
$obj = new Add_Follow();
$check = $obj->check_follow();
if($_POST['click'] === "no_click"){
    if(count($check) < 1 ){
        echo "Follow";
    }
    else{
        echo "Unfollow";
    }

}
else{
    if(count($check) < 1 ){
            $obj->add_follow();
            echo "Unfollow";
        }
    else{
            $obj->delete_follow();
            echo "Follow";
    
    }
}
?>