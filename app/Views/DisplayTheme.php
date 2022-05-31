<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/styleDisplay.css">
    <title>Display</title>
</head>
<body>
    <!-------- THEME CUSTOMIZATION -------->
    <div class="customize-theme">
        <div class="card">
        <ion-icon name="close-outline" id="closeIcon"></ion-icon>
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background. These settings affect all the Twitter accounts on this browser.</p>

    <!-------- FONT SIZE -------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
 
                    <h6>Aa</h6>

                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>

                    <h4>Aa</h4>
                </div>
            </div>

    <!-------- PRIMARY COLORS -------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

    <!-------- BACKGROUND COLORS -------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">

                    <div class="bg-1 active">
                        <span class="sp-1 active"></span>
                        <h5 for="bg-1">Default</h5>
                    </div>

                    <div class="bg-2">
                        <span class="sp-2"></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>

                    <div class="bg-3">
                        <span class="sp-3"></span>
                        <h5 for="bg-3">Lights out</h5>
                    </div>
 
                </div>
            </div>

    <!-------- BUTTON -------->
            <div class="divBtn">
                <button id="doneBtn" class="btn btn-primary">Done</button>
            </div>
            
        </div>
    </div>

    <!-------- SCRIPT -------->
    <script src="../Javascript/displayModal.js"></script>
</body>
</html>