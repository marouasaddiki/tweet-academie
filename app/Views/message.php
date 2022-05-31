<?php
require('../database/DB.php');
$obj = new MyDatabase();
$db = $obj->connect_to_db();

?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>message</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../public/css/styleMessage.css">
</head>
<body>
<div class="container-fluid" >
    <div class="row" id="mainRow" >
           <!-- COLUMN 1 -->
        <div class="col-lg-3 col-md-3 col-sm-3 side-bar" id="col1">
            <?php
                require("./sideBar.php");
            ?>
        </div>
           <!-- COLUMN 2 -->
<div class="modal"  id="mod">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

       
        <h5 class="modal-title">New message</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <i class="fa-solid fa-magnifying-glass"></i><input class="rechercher" type="recherche" placeholder="Search people ">
        
      <?php
      
    $recupUser = $db->query('SELECT * FROM user');
    while($user = $recupUser->fetch()){
        ?>
        <a href="msgtest.php?id=<?php echo $user['id']; ?>">
        
            <p><?php echo $user['username'] ;?></p>
           </a>
          <?php 
    }
    ?>
      <!-- <i class="fa-solid fa-magnifying-glass"></i><input class="rechercher" type="recherche" placeholder="Search people "> -->
  
      </div>
      <div class="modal-footer">
        
        <a href="msgtest.php" type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Next</a>
      </div>
    </div>
  </div>
</div>

        <div class="col-md-4 col-lg-4 col-sm-8 col-12" id="col2">
            <div class="row ">
                <div class="col-sm">
                    <h4> Message</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="col-sm-1">
                    <i class="fa fa-pencil square-o" aria-hidden="true"  data-toggle="modal" data-target="#mod"></i>
                </div>
            </div>
            <div class="row">
                <h2 class="fs-1" >Send a message, get a message</h2>
            </div>
            <div class="row">
                <p class="fs-6 fw-lighter">Direct Messages are private conversations between you and other people on Twitter. Share Tweets, media, and more!</p>
            </div>
            <div class="row d-grid gap-2 mx-auto btnRow">
                <button class="btn btn-message" type="button" data-toggle="modal" data-target="#myModal ">Start a conversation</button>
            </div>
        </div>
           <!-- COLUMN 3 -->
        <div class="col-lg-4 col-md-4 last_col_msg" id="col3">
            <div class="contentCol3">
                <div class="row">
                    <h2>You don’t have a message selected</h2>
                </div>
                <div class="row">
                    <p class="fs-8 fw-lighter">Choose one from your existing messages, or start a new one.</p>
                </div>
                <div class="row d-grid gap-2 mx-auto btnRow">
                    <button class="btn btn-message" type="button">New message</button>
                </div>
            </div>
        </div> 
        <footer>

<div class="fixed-bottom bg-white">
  <div class="SideBarMobile">
    <ul class="nav-bar">
      <li class="nav-item">
        <a href="../Views/home.php" class="item-icon"><span class="iconify" data-icon="ion:home-outline"></span></a>
      </li>
      <li class="nav-item">
        <a href="../Views/right-sideBar.php" class="item-icon"><span class="iconify" data-icon="akar-icons:search"></span></a>
      </li>
      <li class="nav-item">
        <a href="../Views/notification.php" class="item-icon"><span class="iconify" data-icon="carbon:notification"></span></a>
      </li>
      <li class="nav-item">
        <a href="../Views/message.php" class="item-icon"><span class="iconify" data-icon="ic:baseline-mail-outline"></span></a>
      </li>
      <a href="#" class="tweet-btn">
        <span class="iconify icon-btn-twt" data-icon="ion:pencil-outline"></span>
        <div class="text">Tweet</div>
      </a>
    
    </ul>
  </div>
</div>
</footer>
    </div>  
</div>

    <!-- Script JAVASCRIPT -->
  <script src="../Javascript/sideToggle.js"></script>
  <script src="../Javascript/modalSearch.js"></script>
</body>
</html>