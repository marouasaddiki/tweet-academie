<?php session_start();
require('../Controllers/showAllTweetsAction.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <script src='/app/Javascript/jquery-3.6.0.js'></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <link rel="stylesheet" href="../../public/css/home.css">
  <script src="../Controllers/script-js/other_profil.js" defer></script>

  <title>Home</title>
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
      <!--                                                               MENU                                            -->
      <main class="main">

        <div class="col-8 mur_actu">
          <div class="texte">

            <div class="home">
              <h5>Home</h5>
            </div>


            <!--                                                  INPUT POUR TWEET                                                  -->
            <form action="../Controllers/publish-tweetAction.php" method="POST" enctype="multipart/form-data">
              <div class="text-area" contentEditable="true">
                <button class="icones"><i class="fa-solid fa-user avatar"></i></button>
                
                <textarea maxlength=140 class="tweet_ici" name="content" placeholder="What's happening ?"></textarea>
              </div>
             <p style="font-size: 11px;"><em>140 caractère maximum</em></p>
              <div class="les_icones">
                <div class="image-upload">
                  <!-- <button class="icones"> -->
                  <label for="file-input">
                    <i class="fa-regular fa-image"></i>
                  </label>
                  <!-- </button> -->
                  <input id="file-input" type="file" />
                  <i class="fa-solid fa-g"></i>
                  <i class="fa-solid fa-square-poll-vertical"></i>
                  <i class="fa-regular fa-calendar"></i>
                  <button class="btn btn-primary tweetbtn" name="validate" type="submit">Tweet</button>
                </div>
              </div>
            </div>
          </form>

          <!--                                                      FIL D'ACTUALITE                                                  -->
          <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
            <div class="welcome_to_twitter">
          <br>
              <?php
              while ($tweet = $getAllTweets->fetch()) {
              ?>

                <div class="card">
                  <div class="card-header">
                  @<?= $tweet['username']; ?>  
                  </div>
                  <div class="card-body">
                    <?= $tweet['content']; ?>
                  </div>

                  <div class="card-footer">
                    Publié le <?= $tweet['tweet_date']; ?>
                    <a href="reply.php?id=<?= $tweet['tweet_id']; ?>"><button type="submit" class="btn btnTweetContent">Commenter</button></a>
                    <form method="POST">
                    <button type="submit" name="retweet" class="btn btnTweetContent">Retweeter</button>
                    </form>

                  </div>
                </div>
                <br>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <!--                                                   REQUIRE DE LA SIDE BAR DE DROITE                                                           -->
        <div class="barre_recherche">
          <div class="col right-sidebar">
            <?php require("./right-sideBar.php")
            ?>
          </div>
        </div>

      </main>

      <!--                                                         FOOTER SIDE BAR RESPONSIVE                                                      -->
      <footer>
        <?php
        require("./sideBarMobile.php");
        ?>
      </footer>

    </div>
  </div>

  <!-- Script JAVASCRIPT -->
  <script src="../Javascript/sideToggle.js"></script>

  <!-- Refresh timeline -->
<script type="text/javascript">
  window.addEventListener('change',(event) => {
    window.setTimeout( function() {
    window.location.reload();
  }, 1000);
  });

  
</script>
</body>

</html>