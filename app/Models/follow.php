<?php

class Follow{
    function add_follow($db, $follow, $following){
        $db = $db->prepare("INSERT INTO follow(follow_id, follower_id, follow_date ) VALUES(:following, :follower, NOW() )");
        $db->execute([ "following" => $following, "follower" => $follow]);
    }
    function found_follow($db, $follow, $following){
        $db = $db->prepare("SELECT * FROM follow WHERE follow_id = :following AND follower_id =  :follower ");
        $db->execute([ "following" => $following, "follower" => $follow]);
        $info = $db->fetchAll();    
        return $info;
    }
    function delete_follow($db, $follow, $following){
        $db = $db->prepare("DELETE FROM follow  WHERE follow_id = :following AND follower_id = :follower ");
        $db->execute([ "following" => $following, "follower" => $follow]);
    }
}
?>