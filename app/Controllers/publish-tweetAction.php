<?php
session_start();
require('../database/DB.php');

// require('../Views/home.php');
$obj = new MyDatabase();
$db = $obj->connect_to_db();

// VALIDATION DU FORMULAIRE
if(isset($_POST['validate'])){

    // VERIFIER SI LE CHAMPS N'EST PAS VIDE
    if(!empty($_POST['content'])){

        // LES DONNÉES DU TWEET
        $tweet_userid = intval($_SESSION['id']);
        $tweet_date = date('Y-m-d h:i:s');
        $tweet_content = nl2br(htmlspecialchars($_POST['content']));
        
        
        //INSERER LE TWEET SUR LE SITE
        $insertTweetOnWebsite = $db->prepare('INSERT INTO tweet(user_id, tweet_date, content)VALUES(:id, :dt, :content)');
        
        $insertTweetOnWebsite->execute(
            array(
                "id" => $tweet_userid,
                "dt" => $tweet_date,
                "content" => $tweet_content
                )
                
            );
            header('Location: ../Views/home.php');
        
    }
}