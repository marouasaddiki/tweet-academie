<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/054fdad312.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../public/css/profil.css">
    <link rel="stylesheet" href="../../public/css/styleSideResponsive.css">
    <script src="../Controllers/script-js/other_profil.js" defer></script>
    <script src="../Javascript/other_profil_info.js" defer></script>
    <script src="../Controllers/script-js/add_follow.js" defer></script>
</head>
<body>
<div class="container-fluid" >
   
    <div class="row justify-content-center" >
        <div class="col side-bar">
            <?php 
                require('./sideBar.php');
            ?>
        </div>
        <div class="col-sm-6">
            <div class="tweet__feed" id="profilePage">
                <div class="row item__border p-0">
                    <div class="left__col--item">
                        <a href="../" class="fas fa-arrow-left"></a>
                    </div>
                    <div class="profil__tweet--header">
                        <h1 class="user__name--bold" id="name"></h1>
                        <p class="user__pseudo"> 0 Tweets</p>
                        <H1>OTHER</H1>
                    </div>

                    <div class="user__banner">
                        <div class="user__banner--info">
                            <div class="user_image--lg" ></div>
                            <button id="follow" class="btn btn-edit id" >Follow</button>
                        </div>
                    </div>
                       

                    <div>
                        <div class="profil__tweet--header" style="line-height: 25px; padding-left: 5px;">
                            <h1 class="user__name--bold" id="username"></h1>
                            <p class="user__pseudo"><span id="username"></span></p>
                            <p class="bio"></p>
                            <span class="location"></span>
                            <a class="website" target="_blank"></a>
                            <p class="user__pseudo mt-2"><i class="far fa-calendar-alt"></i> A rejoint Twitter en <span class="register_date"></span></p>
                            <p class="user__pseudo tweet_message mt-2"></p>
                            <div>
                                <a href=". /followers.php" class="user__pseudo mr-3" id="abonnements"><span class="user__pseudo bold">0</span> Following</a>
                                <a href="./followers.php" class="user__pseudo" id="abonnes"><span class="user__pseudo bold">0</span> Followers</a>
                            </div>
                            <br>
                        
                        </div>
                        <div class="row barre_2">
                            <div class="col-sm-3">
                                <button class="btn btn__tab active sub-item-profil" >Tweets</button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn__tab active sub-item-profil" >Tweets & replies</button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn__tab active sub-item-profil" >Media</button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn__tab active sub-item-profil" >Likes</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
                <?php 
                require("./right-sideBar.php")
                ?>
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
    <script type="text/javascript" src="../Javascript/editProfil.js"></script>
</body>
</html>