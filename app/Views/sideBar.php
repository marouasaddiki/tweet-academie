<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/styleSide.css">
    <link rel="stylesheet" href="../../public/css/styleSideResponsive.css">
    <title>Twitter</title>
</head>
<body>
    <!-- Side Bar -->
    <div class="side-bar">
    <!-- Nav Bar -->
        <ul class="nav-bar">
            <li class="nav-bar-brand">
                <a href="#"><span class="iconify" data-icon="ion:logo-twitter" id="logo-twitter"></span></a>
            </li>

            <li class="nav-item">
                <a href="../Views/home.php" class="item-icon home"><span class="iconify" data-icon="ion:home-outline"></span></a>
                <a href="../Views/home.php" class="item-link">Home</a>
            </li>

            <li class="nav-item hash">
                <a href="../Views/Explore.php" class="item-icon hash"><span>#</span></a>
                <a href="../Views/Explore.php" class="item-link">Explore</a>
            </li>

            <li class="nav-item">
                <a href="./notification.php" class="item-icon"><span class="iconify" data-icon="carbon:notification"></span></a>
                <a href="./notification.php" class="item-link">Notification</a>
            </li>

            <li class="nav-item">
                <a href="./message.php" class="item-icon"><span class="iconify" data-icon="ic:baseline-mail-outline"></span></a>
                <a href="./message.php" class="item-link">Messages</a>
            </li>
 
            <li class="nav-item">
                <a href="#" class="item-icon"><span class="iconify" data-icon="eva:bookmark-outline"></span></a>
                <a href="#" class="item-link">Bookmarks</a>
            </li>

            <li class="nav-item">
                <a href="#" class="item-icon"><span class="iconify" data-icon="ion:reader-outline"></span></a>
                <a href="#" class="item-link">Lists</a>
            </li>

            <li class="nav-item">
                <a href="./profil.php" class="item-icon"><span class="iconify" data-icon="ion:person-outline"></span></a>
                <a href="./profil.php" class="item-link">Profile</a>
            </li>

            <li class="nav-item" id="moreBtn">
                <a href="#" class="item-icon"><span class="iconify" data-icon="ion:ellipsis-horizontal-circle-outline"></span></a>
                <a href="#" class="item-link">More</a>
            </li>
    <!-- Tweet Button -->
            <a href="#" class="tweet-btn">
                <span class="iconify icon-btn-twt" data-icon="ion:pencil-outline"></span>
                <div class="text">Tweet</div>
            </a>
    <!-- Sub menu start -->
            <div class="sub-items-box">
                <ul>
                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify sub-item-icon" data-icon="ion:chatbubble-ellipses-outline"></span>
                        </a>

                        <a href="#" class="item-link">Topic</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="carbon:flash"></span>
                        </a>

                        <a href="#" class="item-link">Moments</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:newspaper-outline"></span>
                        </a>

                        <a href="#" class="item-link">Newsletters</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:megaphone-outline"></span>
                        </a>

                        <a href="#" class="item-link">Twitter Ads</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:stats-chart-outline"></span>
                        </a>

                        <a href="#" class="item-link">Analytics</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:film-outline"></span>
                        </a>

                        <a href="#" class="item-link">Media Studio</a>
                    </li>
                </ul>
    <!-- Config sub items -->
                <ul class="config">
                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:settings-outline"></span>
                        </a>

                        <a href="../Views/logout.php" id="logoutBtn" class="item-link">Logout</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ic:twotone-help-outline"></span>
                        </a>

                        <a href="#" class="item-link">Help Center</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:color-palette-outline"></span>
                        </a>

                        <a href="#" class="item-link" id="display">Display</a>
                    </li>

                    <li class="sub-item">
                        <a href="#" class="item-icon">
                            <span class="iconify" data-icon="ion:accessibility-outline"></span>
                        </a>

                        <a href="#" class="item-link">Keyboard Shortcuts</a>
                    </li>
                </ul>
            </div> 

        </ul>
    <!-- Profile Button -->
        <a  href="#" class="profile-btn">

            <div class="profile-info">
                <img src="../../public/asset/UserLogo.png" alt="userLogo" class="profile-img" width="35" height="35">
                <div>
                    <p class="name"><?php echo $_SESSION['name']?></p>
                    <p class="username">@<?php echo $_SESSION['username']?></p>
                </div>
            </div>

            <div class="option-icon">
                <span class="iconify" data-icon="gridicons:ellipsis"></span>
            </div>
        </a>
    </div>

    <!-- overlay for sub item box -->
    <div class="overlay"></div>

    <!-------- REQUIRE -------->
    <?php 
        include_once('./DisplayTheme.php');
    ?>
    <!-------- SCRIPT -------->
    <script src="../Javascript/displayModal.js"></script>
    <script src="../Javascript/sideToggle.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>
