<?php
session_start();
require('../database/DB.php');

$obj = new MyDatabase();
$db = $obj->connect_to_db();
require('../Controllers/showTweetContentAction.php');
require('../Controllers/postReplyAction.php');
require('../Controllers/showAllCommentAction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!--                                                REQUIRE DE LA SIDE BAR DE GAUCHE                                 -->
            <header>
                <div class="side-bar">
                    <div class="col navigation">
                        <?php
                        require("./sideBar.php");
                        ?>
                    </div>
                </div>
            </header>
            <main class="main">

                <div class="col-8 mur_actu">
                    <br><br><br><br><br>

                    <?php
                    if (isset($errorMsg)) {
                        echo $errorMsg;
                    }

                    if (isset($tweet_publication_date)) {
                    ?>
                        <section class="show-content">
                            <h3><?= $tweet_username; ?></h3>
                            <hr>
                            <p><?= $tweet_content; ?></p>
                            <hr>
                            <small>Publié le <?= $tweet_publication_date; ?></small>
                        </section>
                        <section class="show-comment">
<br>
                            <form method="POST" class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Commentaire :</label>
                                    <textarea name="comment" class="form-control"></textarea>
                                    <br>
                                    <button class="btn btn-dark" type="submit" name="validate">Répondre</button>
                                </div>
                            </form>

                            <?php
                            while($reply = $getAllCommentOfThisTweet->fetch()){
                                ?>
                                <br>
                                <div class="card">

                                    <div class="card-header">
                                        <?= $tweet_username; ?>
                                    </div>
                                    <div class="card-body">
                                        <?= $reply['comment']; ?>
                                    </div>
                                    <div class="card-footer">
                                        <?= $reply['date_comment']; ?>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>
                        </section>
                    <?php
                    }
                    ?>

                    <br><br><br>
                </div>

                <div class="barre_recherche">
                    <div class="col right-sidebar">
                        <?php require("./right-sideBar.php")
                        ?>
                    </div>
                </div>

            </main>
            <footer>
                <?php
                require("./sideBarMobile.php");
                ?>
            </footer>
        </div>
    </div>
</body>

</html>