<?php
session_start();

$db = $obj->connect_to_db();


if (isset($_POST['validate'])) {

    if (!empty($_POST['comment'])) {

        $tweetuser_id = intval($_SESSION['id']);
        $tweet_id = intval($_GET['id']);
        $date_comment = date('Y-m-d h:i:s');
        $tweet_comment = nl2br(htmlspecialchars($_POST['comment']));

     

        $insertReply = $db->prepare('INSERT INTO comment(user_id, tweet_id, comment, date_comment)VALUES(:userid, :tweetid, :comment, :datecomment)');
        $insertReply->execute(
            array(
                "userid" => $tweetuser_id,
                "tweetid" => $tweet_id,
                "comment" => $tweet_comment,
                "datecomment" => $date_comment
    
            )
        );
    }
}