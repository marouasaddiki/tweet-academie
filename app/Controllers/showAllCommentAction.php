<?php

$getAllCommentOfThisTweet = $db->prepare('SELECT user_id, tweet_id, comment, date_comment FROM comment WHERE tweet_id = ?');
$getAllCommentOfThisTweet->execute(array($idOfTheTweet));