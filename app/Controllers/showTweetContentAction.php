<?php

// VERIFIER SI L'ID DU TWEET EST RENTRÉE DANS L'URL
if(isset($_GET['id']) && !empty($_GET['id'])){

    // RECUPERER L'ID DU TWEET
    $idOfTheTweet = $_GET['id'];

    //VERIFIER SI LE TWEET EXISTE
    $checkIfTweetExists = $db->prepare('SELECT username, tweet.id AS tweet_id, user_id, content, tweet_date FROM tweet INNER JOIN user ON user_id = user.id WHERE tweet.id = ?');
    $checkIfTweetExists->execute(array($idOfTheTweet));

    if($checkIfTweetExists->rowCount() > 0){


        //RECUPERER TOUTES LES DATAS DU TWEET
        $tweetInfos = $checkIfTweetExists->fetch();
    

        // STOCKER LES DATAS DU TWEET DANS DES VARIABLES PROPRES
        $tweet_username = $tweetInfos['username']; 
        $tweet_content = $tweetInfos['content'];
        $tweet_id_author = $tweetInfos['user_id'];
        $tweet_publication_date = $tweetInfos['tweet_date'];

    }else{
       
    }

}else{
    
}