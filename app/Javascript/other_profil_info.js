username_other_profil = window.location.href.split("user=")[1];
$.ajax({
    type: "POST",
    url: "../Controllers/other_profil.php",
    data: {
        username: username_other_profil
    },
    success: function(response) {
        response = response.split(";");

        $(response).each(function(index, val) {
            val = val.split(" => ");
            profil_info[val[0]] = val[1];
        })
        $('#name').text(profil_info['name']);
        $('#username').text("@" + profil_info['username']);
        $('.bio').text(profil_info['token']);
        $('.email').text(profil_info['email']);
        $('.phone').text(profil_info['phone']);
        $('.birthdate').text(profil_info['birthdate']);
        $('.avatar').text(profil_info['avatar']);
        $('.cover').text(profil_info['cover']);
        $('.register_date').text(profil_info['register_date'].substr(0, 10));
        $('.country').text(profil_info['country']);
        $('.website').text(profil_info['website']);

        $('.website').attr('href', profil_info['website']);
        $('.id').attr('value', profil_info['id']);
        $.ajax({
            type: "POST",
            url: "../Controllers/add_follow.php",
            data: {
                id: profil_info['id'],
                click: "no_click"
            },
            success: function(response) {
                console.log(response)
                $('#follow').text(response);
                $(document).attr('title', `Profil de ${profil_info['username']}`)
            }
        });
    }
})