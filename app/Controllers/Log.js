let log_co = $("#login_connexion")[0]; // username
let pswd_co = $("#pswd_connexion")[0]; // MDP
let new_url = "";
let split_url = [];
$('#btn_connexion').click(function() {
    $.ajax({
        type: "POST",
        url: "../Controllers/Log.php",
        data: {
            login: $(log_co).val(),
            pswd: $(pswd_co).val(),
        },
        success: function(response) {
            if (response === "EROR") { // Empeche la redirection si Log.Php retourne "EROR" 
                alert("Le mot de passe OU le nom d'utilisateur est incorecte");
                return;
            } else {
                alert(`Bienvenue ${response}`)
            }
            split_url = window.location.href.split("/"); // URL de la page connexion split

            for (let a = 0; a < (split_url.length - 1); a++) { // Création de la nouvel URL 
                new_url += split_url[a] + "/";
            }
            window.location.href = new_url + "home.php"; // Redirection de la page dans la nouvelle URL 
        }
    })

});