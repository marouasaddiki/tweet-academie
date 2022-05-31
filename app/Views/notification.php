<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/styleSideResponsive.css">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../public/css/homeResponsive.css">
  <link rel="stylesheet" href="../../public/css/notifications.css">


  <title>Notifications</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!--                                                REQUIRE DE LA SIDE BAR DE GAUCHE                                 -->
      <header>
        <div class="side-bar">
          <div class="col navigation">

            <?php require("./sideBar.php");
            ?>
          </div>

        </div>
      </header>
      <!--                                                               NOTIFICATIONS                                            -->
      <main class="main">
        <div class="col-8 mur_actu">
          <div class="notification__titre">
            <h5>Notifications</h5><span><i class="fa-solid fa-gear settings"></i></span>
          </div>

          <div class="all-mentions">
            <a href="#" class="all">
              <div class="all__bg">
                <span>
                  All
                </span>
              </div>
            </a>

            <a href="#" class="mentions">
              <div class="mentions__bg">
                <span>
                  Mentions
                </span>
              </div>
            </a>
          </div>
        </div>

        <!--                                                   REQUIRE DE LA SIDE BAR DE DROITE                                                           -->

        <div class="barre_recherche">
          <div class="col-6 right-sidebar">
            <?php require("./right-sideBar.php")
            ?>
          </div>
        </div>


      </main>


      <!--                                                         FOOTER SIDE BAR RESPONSIVE                                                      -->
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
</body>

</html>