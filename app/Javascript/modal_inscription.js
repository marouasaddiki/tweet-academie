let input = ""; // selection tout les input de la 1 page du Modal
let select = ""; // selection tout les select de la 1 page du Modal

$('.recap_btn').click(function(){ // Button situé dans le Modal page 3 permettant d'afficher les infos dans la Page 4 Pré-inscription
    input = $('#myModal .modal-body input')
    select = $('#myModal .modal-body select');

    for(let a = 0; a < input.length; a++){  //Ajoute toute les info des input (Nom / Prénom / email/tel) 
        $('.recap_log').append(input[a]); 
    };

    $('.recap_log').append("<div class='row'>"); //Encadre dans une row
    for (let a = 0; a < select.length; a++){
        $('.recap_log').append("<div class='col'>");
        $('.recap_log').append(select[a]);   //Ajoute toute les info des select (date de naissance)
        $('.recap_log').append("</div>");
    };
    $('.recap_log').append("</div>"); // fin de l'encadrement de la row
});

$('.check_tel').click(function(){ // Annonce de confirmation de numéro
    let check_tel = confirm(`Nous enverrons votre code de vérification par SMS au 0676790383. Des frais standard de SMS peuvent s'appliquer.`)
    if(check_tel){
        return;
    }
    else{
        alert('Retouner à la page 3  et changer le numéro enregistrez.')
    }
})