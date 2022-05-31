<?php
session_start();
require('../database/DB.php');

$obj = new MyDatabase();
$db = $obj->connect_to_db();

$getAllMyTweets = $db->prepare('SELECT id, user_id, tweet_date, content FROM tweet WHERE user_id = ? ORDER BY id DESC');
$getAllMyTweets->execute(array($_SESSION['id']));