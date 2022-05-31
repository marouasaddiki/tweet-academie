<?php
session_start();

include_once('../database/DB.php');
if(isset($_GET['followeid']) AND !empty($_GET['followedid'])) {
$getfollowedid = intval($_GET['followedid']);

if($getfollowedid != $_SESSION['id']) {
   $dejafollowed = $db->prepare('SELECT * FROM follow WHERE follow_id = ? AND follower_id = ?');
   $dejafollowed->execute(array($_SESSION['id'],$getfollowedid));
  $dejafollowed = $dejafollowed->rowCount();
    
 
    if($dejafollowed == 0){
      $addfollow = $db->prepare('INSERT INTO follow(follow_id,follower_id) VALUES(?,?)' );
      $addfollow->execute(array($_SESSION['id'],$getfollowedid));

    }elseif($dejafollowed == 1) {
      $deletefollow = $db->prepare('DELETE FROM follow WHERE follow_id = ? AND follower_id = ?');
      $deletefollow->execute(array($_SESSION['id'], $getfollowedid));
    }
  }
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>

<!-- session_start();
//   require('../Controllers/Log.php');
   require('../database/DB.php');
   

    if(isset($_POST['id']) AND $_POST['id'])
    {
        $getid = intval($_POST['id']);
        $requser = $db->prepare('SELECT * FROM user WHERE id = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
    } -->




    <!-- //  if(isset($_SESSION['id']) AND $_SESSION['id'] !=  $getid) {
                            //     $isfollowingornot = $db->prepare('SELECT * FROM follow WHERE follow_id = ? AND follower_id = ?');
                            //     $isfollowingornot->execute(array($_SESSION['id'],$getid));
                            //     // $isfollowingornot = $isfollowingornot->rowCount();

                            //       if($isfollowingornot == 1){ -->
                              <!-- //   }else{
                                //  }
                            //  } -->