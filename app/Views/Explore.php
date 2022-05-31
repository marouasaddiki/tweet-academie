<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="../../public/css/styleExplore.css">
    <link rel="stylesheet" href="../../public/css/styleSide.css">
    <link rel="stylesheet" href="../../public/css/styleSideResponsive.css">
    <link rel="stylesheet" href="../../public/css/rightSideBar.css">
    <script src="../Controllers/script-js/other_profil.js" defer></script>
    <script src="../Javascript/modalSearch.js" defer></script>
    <title>Explore</title>
</head>
<body>
    <div class="sideBarTop">

        <div class="search">
            <i class="iconify" id="logo-search" data-icon="akar-icons:search"></i>
            <input type="text" id="searchInput" placeholder="Search Twitter">
            <!-- The Modal Search -->
            <div class="MS-container">
                <div class="MS-content">
                    <div class="card" id="card_input">
                        <div class="card-content ">
                            <div class="card-img">
                                <img src="../../public/asset/UserLogo.png">
                            </div>
                            <div class="card-pseudo content-user-sugg">
                                <h5><small>User name</small></h5>
                                <p><small>@userpseudo</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- The Modal Search END -->
            <span id="closeInput">&times;</span>
            <span class="iconify" id="logo-settings" data-icon="healthicons:ui-settings-outline"></span>
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <h2><span class="close">&times;</span>Explore settings</h2>

                <div class="title-modal">
                    <h3>Location</h3>
                </div>

                <div class="content-modal">
                    <p>Show content in this location</p>
                    <p><small>When this is on,you'll see what's happenning around you right now.</small> <button class="btn-modal"><span class="iconify" data-icon="clarity:success-line"></span></button></p>
                </div>

                <div class="divider"></div>

                <div class="title-modal">
                    <h3>Personalization</h3>
                </div>

                <div class="content-modal">
                    <p>Trends for you</p>
                    <p><small>You can personalize trends based on your location and who you follow.</small> <button class="btn-modal"><span class="iconify" data-icon="clarity:success-line"></span></button></p>
                </div>

                <div class="void-modal"></div>
            </div>

        </div>
    </div>
    
    <!-- REQUIRE -->
    <?php
        require('./sideBar.php');
        // require("./right-sideBar.php");
    ?>


    <footer>
      <?php 
        // require("./sideBarMobile.php");
      ?> 
    </footer>
    
    <!-- Script JAVASCRIPT -->
    <script src="../Javascript/sideToggle.js"></script>
    <script src="../Javascript/modal.js"></script>
    <script src="../Javascript/inputSearchExplore.js"></script>
    <script src="../Javascript/modalSearch.js"></script>
</body>
</html>

 