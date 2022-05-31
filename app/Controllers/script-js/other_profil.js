let username_other_profil = "";
let profil_info = {};
let split_url = [];
let new_url = [];
$('.MS-content').click(function(e) {

    if ($(e.target).hasClass("card-content")) {
        // console.log($(e.target.children[1].children[0].children[0]).text().trim() );
        username_other_profil = $(e.target.children[1].children[0].children[0]).text().trim();
    } else if ($(e.target).hasClass("username_search")) {
        username_other_profil = $(e.target).text().trim();
        // console.log($(e.target).text().trim());
    } else if ($(e.target).attr('src') != undefined) {
        // console.log($($($(e.target).parent()[0]).parent()[0].children[1].children[0].children[0]).text().trim() )
        username_other_profil = $($($(e.target).parent()[0]).parent()[0].children[1].children[0].children[0]).text().trim();

    } else {
        username_other_profil = e.target;
    }
    $.ajax({
        type: "POST",
        url: "../Views/other_profil.php",
        success: function(response) {
            console.log(username_other_profil, "username_other_profil")
            split_url = window.location.href.split("/"); // URL de la page connexion split
            for (let a = 0; a < (split_url.length - 1); a++) { // Création de la nouvel URL 
                new_url += split_url[a] + "/";
            }
            window.location.href = new_url + `other_profil.php?user=${username_other_profil}`; // Redirection de la page dans la nouvelle URL 
        }
    })

});

$('.card-header').click(function(e) {
    // console.log($(e.target).text().trim())
    // console.log(username_other_profil, "aaaaaaaaaaaa")
    username_other_profil = $(e.target).text().trim().substr(1, $(e.target).text().trim().length);

    $.ajax({
        type: "POST",
        url: "../Views/other_profil.php",
        success: function(response) {
            split_url = window.location.href.split("/"); // URL de la page connexion split
            for (let a = 0; a < (split_url.length - 1); a++) { // Création de la nouvel URL 
                new_url += split_url[a] + "/";
            }
            window.location.href = new_url + `other_profil.php?user=${username_other_profil}`; // Redirection de la page dans la nouvelle URL 

        }

    })

});