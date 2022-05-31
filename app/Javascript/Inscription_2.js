let username_final = $('#username_final');
let login_final = "";
let year_final = $('#year_final');
let month_final = $('#month_final');
let day_final = $('#day_final');

function day_count(number){
    if(number <= 9){
        $('#myModal_P3 #day_final').append(`<option value="0${number}">0${number}</option>`);
    }
    else{
        $('#myModal_P3 #day_final').append(`<option value="${number}">${number}</option>`);
    }
}

$(".recap_btn").click(function(){
    username = $(username[0]).val();
    year = $(year).val()
    month = $(month[0]).val()
    day = $(day[0]).val()
    divLog_final = $(".login_final")

    for(let number = 0; number < 31; number++ ){
        day_count(number)
    }

    username_final.val(username);
    year_final.val(year);
    month_final.val(month);
    day_final.val(day);
    divLog_final.append($('#myModal .login input')[0])
    login_final = $('.login_final input').val();
})
