let birthdate = "";
let email_OR_tel = "";
$(".validation_btn").click(function() {
    birthdate = $(year_final[0]).val() + "-" + $(month_final[0]).val() + "-" + $(day_final[0]).val();
    // Fusionne la date en format XXXX-XX-XX
    // Check si le login est un email ou un télephone
    if (login_final.match(/\w{1,}\@{1}\w{1,}\.\w{1,}/) != null) {
        email_OR_tel = "email";
    } else {
        email_OR_tel = "tel";
    }
    // Lance le fichier Inscription.php via Ajax et recupere la reponse
    $.ajax({
        url: "../Controllers/Inscription.php",
        type: "POST",
        data: {
            username: $(username_final[0]).val(),
            login: login_final,
            check: email_OR_tel,
            pswd: $(pswd[0]).val(),
            birthdate: birthdate
        },
        success: function(ressubvenueponse) {
            if (response === "win") {
                alert('Bienvenue ' + login_final);
            } else {
                alert('Une ereur est survenue, veuillez essayer une nouvelle fois');
            }
        }
    })
})
