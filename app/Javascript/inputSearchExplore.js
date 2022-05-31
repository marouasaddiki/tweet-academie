/* Initialisation des variables */ 

const input = document.getElementById("searchInput");
const logo = document.getElementById("logo-search");
const closeIN = document.getElementById("closeInput");

/* Color input */ 

input.onclick = function() {
    input.style.borderColor = "var(--color-primary)";
    logo.style.color = "var(--color-primary)";
}

/* Print close button input */ 

// input.addEventListener('keydown', function(){
//     closeIN.style.display= "block";
//     // console.log(input.value.length , 'open');
    
//     if (input.value.length < 1) {
//         closeIN.style.display= "none";
//         // console.log('close');
//     }
// })

/* Reset color */ 

window.onclick = function(event) {
    if (event.target != input) {
      input.style.borderColor = "#fff";
      logo.style.color = "var(--colorWhite)";
    }
  } 
  
// keydown == bug;