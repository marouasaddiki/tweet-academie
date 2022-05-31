let suggestions = [];
let counter = 0;


const searchContainer = document.getElementsByClassName('search')[0];
const searchInput = document.getElementById('searchInput');
const msContent = document.getElementsByClassName('MS-content')[0];

searchInput.onkeyup = (e) => {
    let userData = e.target.value; // Entré utilisateur
    $.ajax({
        type: "POST",
        url: "../Controllers/searchUserController.php",
        data: {
            dataUser: userData,
        },
        success: function(response) {
            suggestions = response.split(';');
        }

    })
    let emptyArray = [];
    if (userData) {
        emptyArray = suggestions.filter((data) => { // Si il y'a une entré utlisateur, emptyArray = suggestions.data
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()); // data = Elements du array suggestions
        });
        emptyArray = emptyArray.map((data) => {
            return data = `<div class="card-content" >
                        <div class="card-img">
                            <img src="../../public/asset/UserLogo.png">
                        </div>
                        <div class="card-pseudo content-user-sugg">
                            <h5><small class='username_search'>${data} </small></h5>
                        </div>
                    </div>`
        });
        searchContainer.classList.add("active");
    } else {

    }
    showSuggestions(emptyArray);
}

function showSuggestions(list) {
    let listData;
    // if(!list.length) {

    // }else {
    listData = list.join('');
    // }
    listData = list.join('');
    msContent.innerHTML = listData;
}