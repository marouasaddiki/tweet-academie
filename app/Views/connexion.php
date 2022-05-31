<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../Javascript/date_inscription.js" defer></script>
    <script src="../Javascript/checkModal_inscription.js" defer></script>
    <script src="../Javascript/footer_connexion.js" defer></script>
    <script src="../Javascript/Inscription_2.js" defer></script>
    <script src="../Javascript/modal_disable_btn_insciption.js" defer></script>
    <script src="../Controllers/Inscription.Js" defer></script>
    <script src="../Controllers/Log.js" defer></script>
    <link rel="stylesheet" href="../../public/css/connexion.css">
    <title>Twitter | Accueil</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- IMAGE ET BACKGROUND GAUCHE -->
            <div class="col-6 first"> 
                    <img src="../../public/asset/logo_twitter_black.png" class="img_left" alt="">
            </div>
            <!-- INSCRIPTION / CONNEXION / -->
            <div class="col-6">
                    <!-- LOGO -->
                <div class="col">
                    <img src="../../public/asset/twt_logo.png" width="50" height="50" alt="">
                </div>
                    <!-- TITLE -->
                <div class="row">
                    <span class="fw-bold mtn">Ça se passe maintenant</span>
                </div>
                <div class="row">
                    <span class="fw-bold join">Rejoignez Twitter dès aujourd'hui.</span>
                </div>
                    <!-- BTN GOOGLE /APPLE -->
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-dark border-dark rounded-pill mb-3 mt-3"><img src="../../public/asset/google_logo.png" width="10" alt=""> S'inscrire avec Google</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-dark border-dark rounded-pill mb-1"><img
                                src="../../public/asset/Apple_logo_black.svg.png" width="10" alt=""> S'inscrire avec Apple</button>
                    </div>
                </div>
                    <!-- HR OU HR  -->
                <div class="row ou mt-3">
                    <hr class="col-3">ou<hr class="col-3">
                </div>
                    <!-- BTN INSCRIPTION + MODAL INSCRIPTION -->
                <div class="row">
                    <div class="col">
                        <button class="btn bg-info rounded-pill white mb-1" data-bs-toggle="modal" data-bs-target="#myModal">
                            <span class="inscription_btn">S'inscrire avec un numéro de téléph... one ou une adresse email</span>
                        </button>
                    </div>
                    <div class="modal_inscription">
                        <?php 
                            require('./Modal_Inscription/myModal_P1.php');
                            require('./Modal_Inscription/myModal_P2.php');
                            require('./Modal_Inscription/myModal_P3.php');
                            require('./Modal_Inscription/myModal_P4.php');
                            require('./Modal_Inscription/myModal_P5.php');
                        ?>
                    </div>
                </div>
                <div class="row">
                    <span class="fw-light lh-sm  mb-5 ">En vous inscrivant, vous acceptez les <a href="#">condition
                            d'utilisation</a> et la <a href="#">politique de confidentialité</a>, incluant l'<a
                            href="#">utilisation de cookies</a>.</span>
                </div>
                <div class="row">
                    <span class="fw-bold mb-2">Vous avez déjà un compte ?</span>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-dark border-dark rounded-pill text-info" data-bs-toggle="modal"
                            data-bs-target="#myModal_2">Se connecter</button>
                    </div>
                    <div class="modal_connexion">
                        <?php 
                            require('./Modal_Connexion/myModal_2_P1.php');
                            require('./Modal_Connexion/myModal_2_P2.php');
                        ?>
                    </div>
                    <div class="modal_Mot_de_passe_oublier">
                        <div class="modal" id="myModal_3">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <div class="row">
                                            <button class="btn-close rounded-pill" style="margin: 0px;" data-bs-dismiss="modal"></button>
                                            <img src="../../public/asset/twt_logo.png" class="rounded mx-auto _50"  alt="logo Twitter">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-body mb-5">
                                        <div class="row">
                                            <h4 class="fw-bold">Recherchez votre compte Twitter</h4>
                                        </div>
                                        <div class="row mt-3">
                                            <input type="text" class="form-content" placeholder="Entrez votre adresse email, numéro de téléphone ou nom d'utilisateur.">
                                        </div>
                                    </div> 
    
                                    <div class="modal-footer">
                                        <button class="bg-dark white rounded-pill _470" >Recherchez</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- NAV BAR -->
        <div class="row">
            <nav class="text-center fw-light ">
            </nav>
        </div>
    </div>

</body>

</html>