<?php

// use function PHPSTORM_META\map;

session_start();

require('../database/DB.php');

$obj = new MyDatabase();
$db = $obj->connect_to_db();

if(isset($_GET['id']) AND !empty($_GET['id']))
{
    
    $getid = $_GET['id'];  
    $recupUser = $db->prepare('SELECT * FROM user WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0)
 {
        if(isset($_POST['envoyer']))
        {
            $message = htmlspecialchars($_POST['message']);
            $insererMessage = $db->prepare('INSERT INTO `message`(`content`, `destination_id`, `expeditor_id`, `view`) VALUES(?,?,?,0)');
            $insererMessage->execute(array($message,$getid, $_SESSION['id']));
        }
 }
    else{
        echo "AUCUN UTILISATEUR";
         }

} 
else
  {
    echo 'AUCUN';
 }     
?>
<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
  
     <form method="POST" action="">

     <textarea name="message" ></textarea>
    <br/><br/>
    <input type="submit" name="envoyer">
     </form>
     <section id="message">
        <?php
         $recupMessages = $db->prepare('SELECT * FROM `message` WHERE expeditor_id = ? AND destination_id = ? OR
         expeditor_id = ? AND destination_id = ?');  
          $recupMessages->execute(array($_SESSION['id'],$getid,$getid,$_SESSION['id']));
          while($message =$recupMessages->fetch()){
              if($message['destination_id'] == $_SESSION['id']){
                  ?>
                 <p style="color: royalblue ;"><?=$message[3]; ?><br><?=$message[5]; ?><br><?=$message[1]; ?></p>
                     <?php
              }elseif($message['destination_id'] == $getid){
                ?>
                <p style="color: purple;"> <?=$message[3]; ?><br><?=$message[5]; ?><br><?=$message[1]; ?></p>
                    <?php 
        }
          }
        ?>
     </section>
</body>
</html>