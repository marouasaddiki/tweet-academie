<?php
session_start();
require('../Controllers/showMyTweetsAction.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/054fdad312.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../public/css/profil.css">
    <link rel="stylesheet" href="../../public/css/styleSideResponsive.css">
    <script src="../Controllers/script-js/edit.js" defer></script>
</head>

<body>
    <div class="container-fluid">


        <div class="row justify-content-center">
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
                            <h1 class="user__name--bold"><?php echo $_SESSION['name'] ?></h1>
                            <p class="user__pseudo"> 0 Tweets</p>
                        </div>
                        <div class="user__banner">
                            <div class="user__banner--info">
                                <div class="user_image--lg"></div>
                                <a href="#" id="btnEdit" class="btn btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Edit profil</a>
                            </div>
                        </div>


                        <div>
                            <div class="profil__tweet--header" style="line-height: 25px; padding-left: 5px;">
                                <h1 class="user__name--bold"><?php echo $_SESSION['name'] ?></h1>
                                <p class="user__pseudo">@<?php echo $_SESSION['username'] ?></p>
                                <p class="bio"><?php echo $_SESSION['bio'] ?></p>
                                <span class="location"><?php echo $_SESSION['location'] ?></span>
                                <a class="website" target="_blank" href="<?php echo $_SESSION['website'] ?>"><?php echo $_SESSION['website'] ?></a>
                                <p class="user__pseudo mt-2"><i class="far fa-calendar-alt"></i> A rejoint Twitter le <?php echo substr($_SESSION['register_date'], 0, 10) ?></p>
                                <p class="user__pseudo tweet_message mt-2"></p>
                                <div>
                                    <a href="#" class="user__pseudo mr-3" id="abonnements"><span class="user__pseudo bold">0</span> Following</a>
                                    <a href="#" class="user__pseudo" id="abonnes"><span class="user__pseudo bold">0</span> Followers</a>
                                </div>
                                <br>

                            </div>



                            <div>


                            </div>
                            <div class="row barre_2">
                                <div class="col-sm-3">
                                    <button class="btn btn__tab active sub-item-profil">Tweets</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn__tab active sub-item-profil">Tweets & replies</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn__tab active sub-item-profil">Media</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn__tab active sub-item-profil">Likes</button>
                                </div>

                            </div>
                            <br><br>
                            <?php
                            while ($tweet = $getAllMyTweets->fetch()) {
                            ?>

                                <div class="card">
                                    <h6 class="card-header">
                                        @<?= $_SESSION['username'] ?>
                                    </h6>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?= $tweet['content']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <?= $tweet['tweet_date']; ?>
                                    </div>
                                </div>
                                <br><br>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit profile</h5>
                            <button type="button" class="btn-close test" id="closeEdit" data-bs-dismiss="modal"></button>
                            <button type="button" class="btn-save btn-outline-primary edit_btn">Save</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="modalImg">

                                <div class="modal-imgCover">
                                    <img class="user__banner" id="userBanner">
                                    <input type="file" class="inputFile">
                                    <span class="iconify" id="iconPhoto" data-icon="ic:baseline-photo-camera"></span>
                                </div>

                                <div class="modal-imgAvatar">
                                    <img class="user_image--lg">
                                    <input type="file" class="inputFile2">
                                    <span class="iconify" id="iconPhoto" data-icon="ic:baseline-photo-camera"></span>
                                </div>

                            </div>

                            <input autocapitalize="sentences" maxlength="50" name="inputName" spellcheck="true" placeholder="Name" value="<?php echo $_SESSION['name'] ?>" id="name_edit">
                            <textarea maxlength="160" name="areaBio" placeholder="Bio" id="bio_edit"><?php echo $_SESSION['bio'] ?></textarea>
                            <input autocapitalize="sentences" maxlength="30" name="inputLocation" spellcheck="true" placeholder="Location" value="<?php echo $_SESSION['location'] ?>" id="location_edit">
                            <input autocapitalize="sentences" maxlength="100" name="inputWebsite" spellcheck="true" placeholder="Website" value="<?php echo $_SESSION['website'] ?>" id="website_edit">
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <p>Birth date . <a href="#" id="editBirthDate">Edit</a></p>
                            <h4><?php echo $_SESSION['birthdate'] ?></h4>
                            <h4>Switch to professional</h4>
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
                <?php
                require("./sideBarMobile.php");
                ?>
            </footer>
        </div>

    </div>

    <!-- Script JAVASCRIPT -->

    <script src="../Javascript/sideToggle.js"></script>
    <script type="text/javascript" src="../Javascript/editProfil.js"></script>
</body>

</html>

