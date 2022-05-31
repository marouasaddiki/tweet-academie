let date = new Date;
let date_now = date.getFullYear();
let date_100 = date.getFullYear() - 100; 
while(date_100 <= date_now){ // Ajoute les année dans le select de la page 1 du Modal inscription
    $('#year').append(`<option value='${date_100}'>${date_100}</option>`);
    $('#year_final').append(`<option value='${date_100}'>${date_100}</option>`);
    date_100++;
};

let month_modal = "";
$('#myModal #month').change( function(){// Ajoute les jour dans le select de la page 1 du Modal inscription
    month_modal = $('#myModal #month').val();
    function day_count(number){
        if(number <= 9){
            $('#myModal #day').append(`<option value="0${number}">0${number}</option>`);
        }
        else{
            $('#myModal #day').append(`<option value="${number}">${number}</option>`);
        }

    }
    $('#myModal #day').html(`<option value="">Jour</option>`);
    for(let number = 1; number <= 31; number++){
        if(month_modal === "02"){
            if(number <= 29){
                day_count(number);
            }
        }
        if(month_modal === "01" || month_modal === "03" || month_modal === "05" || month_modal === "07" || month_modal === "08"  || month_modal ==="10"  || month_modal === "12"){
            day_count(number);
        }
        else{
            if(number <= 30 && month_modal != "02"){
                day_count(number);
            }
        }
        
    }
});

$('#myModal_P3 #month_final').change( function(){// Ajoute les jour dans le select de la page 1 du Modal inscription
    month_modal = $('#myModal_P3 #month_final').val();
    function day_count(number){
        if(number <= 9){
            $('#myModal_P3 #day_final').append(`<option value="0${number}">0${number}</option>`);
        }
        else{
            $('#myModal_P3 #day_final').append(`<option value="${number}">${number}</option>`);
        }

    }
    $('#myModal_P3 #day_final').html(`<option value="">Jour</option>`);
    for(let number = 1; number <= 31; number++){
        if(month_modal === "02"){
            if(number <= 29){
                day_count(number);
            }
        }
        if(month_modal === "01" || month_modal === "03" || month_modal === "05" || month_modal === "07" || month_modal === "08"  || month_modal ==="10"  || month_modal === "12"){
            day_count(number);
        }
        else{
            if(number <= 30 && month_modal != "02"){
                day_count(number);
            }
        }
        
    }
});


let login_Space = $('.login');
// let link = $('.link');

$('.txtLink').click(function(){

    if($('.txtLink').text() === 'utiliser un numéro de télephone'){
        $('.email').remove();
        login_Space.append('<input type="tel" id="tel" class="form-control tel" placeholder="Téléphone">');
        $('.txtLink').replaceWith('<span class="btn text-info text-start txtLink" >Utiliser un email</span>');
    }
    else{
        $('.tel').remove();
        $('.txtLink').replaceWith('<span class="btn text-info text-start txtLink" >Utiliser un numéro de télephone</span>');
        login_Space.append('<input type="email" id="email" class="form-control email" placeholder="Email">');

    }
});
