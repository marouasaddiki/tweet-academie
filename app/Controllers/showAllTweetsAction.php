<?php
session_start();
require('../database/DB.php');

$obj = new MyDatabase();
$db = $obj->connect_to_db();



$getAllTweets = $db->query('SELECT username, tweet.id AS tweet_id, user_id, content, tweet_date  FROM tweet INNER JOIN user WHERE user_id = user.id ORDER BY tweet.id DESC');
