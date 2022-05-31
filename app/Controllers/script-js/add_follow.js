$('#follow').click(function(e) {

    $.ajax({
        type: "POST",
        url: "../Controllers/add_follow.php",
        data: {
            id: e.target.value,
            click: "click",
        },
        success: function(response) {
            console.log(response)
            $('#follow').text(response);
        }
    })
})