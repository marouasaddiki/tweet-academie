let login = ""; // login choisis par l'utilisateur === email OU tel
$("#myModal").mousemove(function(){
    tel = $("#tel"); 
    email = $("#email")
    // username && tel && email sont innitialiser dans chekModal_inscription.js
    if(tel[0] === undefined){
        // Verifie si l'email a un patern XXXX@XXXX.XXX et l'implemente dans un tableau        
        if( email.val().match(/\w{1,}\@{1}\w{1,}\.\w{1,}/) != null ){
            login = email;
        }
    }
    else{
        // Verifie si phone a un patern 923048904284 et l'implemente dans un tableau
        if(tel.val().match(/\d{10,}/)){
            login = tel;
        }
    }
    if( ($(username[0]).val() != "")  && ($(years[0]).val() != "") && ( $(month[0]).val() != "") && ($(month[0]).val() != "" ) && ( $(login).val() != "" ) && (login != "" ) && ( ($(login).val() === tel.val() ) || ( $(login).val() === email.val()) ) ){
        $("#myModal .btn-lg").removeAttr('disabled');
        $("#myModal .btn-lg").removeClass('bg-secondary').addClass('bg-dark');
        // $("#myModal_P3 .btn-lg").removeAttr('disabled');
        // $("#myModal_P3 .btn-lg").removeClass('bg-secondary').addClass('bg-dark');
    }
    else{
        $("#myModal .btn-lg").attr('disabled', 'true');
        $("#myModal .btn-lg").removeClass('bg-dark').addClass('bg-secondary');
        // $("#myModal_P3 .btn-lg").attr('disabled', 'true');
        // $("#myModal_P3 .btn-lg").removeClass('bg-dark').addClass('bg-secondary');
        
    }

})
$("#myModal_P3").mousemove(function(){
    tel = $("#tel"); 
    email = $("#email")
    // username && tel && email sont innitialiser dans chekModal_inscription.js
    if(tel[0] === undefined){
        // Verifie si l'email a un patern XXXX@XXXX.XXX et l'implemente dans un tableau        
        if( email.val().match(/\w{1,}\@{1}\w{1,}\.\w{1,}/) != null ){
            login = email;
        }
    }
    else{
        // Verifie si phone a un patern 923048904284 et l'implemente dans un tableau
        if(tel.val().match(/\d{10,}/)){
            login = tel;
        }
    }
    if( ($(username[0]).val() != "")  && ($(years[0]).val() != "") && ( $(month[0]).val() != "") && ($(month[0]).val() != "" ) && ( $(login).val() != "" ) && (login != "" ) && ( ( $(login).val() === tel.val() ) || ($(login).val() === email.val()) ) ){
        $("#myModal_P3 .btn-lg").removeAttr('disabled');
        $("#myModal_P3 .btn-lg").removeClass('bg-secondary').addClass('bg-dark');
    }
    else{
        $("#myModal_P3 .btn-lg").attr('disabled', 'true');
        $("#myModal_P3 .btn-lg").removeClass('bg-dark').addClass('bg-secondary');
        
    }

})

$('#myModal_P5').mousemove(function(){
    pswd = $('#mdp');
        
    if($(pswd).val().length < 8){
        $("#myModal_P5 .btn-lg").attr('disabled', 'true');
        $("#myModal_P5 .btn-lg").removeClass('bg-dark').addClass('bg-secondary');

    }
    else{
        $("#myModal_P5 .btn-lg").removeAttr('disabled');
        $("#myModal_P5 .btn-lg").removeClass('bg-secondary').addClass('bg-dark');
    }
})