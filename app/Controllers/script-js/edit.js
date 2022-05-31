$('.edit_btn').click(function(){
    $.ajax({
        type: "POST",
        url: "../Controllers/edit.php",
        data:{
            name: $('#name_edit').val(),
            bio: $($('#bio_edit')[0]).val(),
            location: $('#location_edit').val(),
            website: $('#website_edit').val()
        },
        success: function(){
            window.location.href =  window.location.href;
        }
    })
});