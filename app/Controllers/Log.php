<?php
require_once('../Models/User_Model.php');
require_once('../database/DB.php');

class Log{
    private $user_table;    
    private $logController;
    private $db;     
    function __construct(){
        $this->user_table = new User();        
        $this->logController = new MyDatabase();  
        $this->db = $this->logController->connect_to_db();      
    }

    function log(){ // Vérifie si l'utilisateur existe
        $user = $this->user_table->check_user_exist($this->db, $_POST['login']);
        return [    password_verify("vive le projet tweet_academy".$_POST['pswd'], $user[0]['password']), $user[0]['username'], $user[0]['email'], $user[0]['phone'], $user[0]['birthdate'], $user[0]['avatar'], $user[0]['cover'], $user[0]['website'], $user[0]['register_date'], $user[0]['country'], $user[0]['location'], $user[0]['id'], $user[0]['name'], $user[0]['token']  ];
        // password_verify Retourne true si le MDP est bon OU false 
    }
}
$obj = new Log();
$check = $obj->log();
if($check[0] /* === password_verify */){
    session_start();
    // $check[1] -> $check[10] === Info de l'utisateur connecter
    $_SESSION['username'] = $check[1];
    $_SESSION['email'] = $check[2];
    $_SESSION['phone'] = $check[3];
    $_SESSION['birthdate'] = $check[4];
    $_SESSION['avatar'] = $check[5];
    $_SESSION['cover'] = $check[6];
    $_SESSION['website'] = $check[7];
    $_SESSION['register_date'] = $check[8];
    $_SESSION['country'] = $check[9];
    $_SESSION['location'] = $check[10];
    $_SESSION['id'] = $check[11];
    $_SESSION['name'] = $check[12];
    $_SESSION['bio'] = $check[13];
    echo($_SESSION['username']);
    exit();
}
else{
    echo "ERROR"; // Retourne "EROR" au fichier Log.js si le username OU le MDP est incorecte
    exit();
}