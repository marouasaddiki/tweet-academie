  // Get the modal
const modal = document.getElementById("myModal");
const body = document.querySelector('body');

// Get the button that opens the modal
const btn = document.getElementById("logo-settings");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  body.style.backgroundColor = "var(--background)";
}

// // When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  body.style.backgroundColor = "var(--background)"; // SET LE BACKGROUND COLOR de la var root
}

// // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    body.style.backgroundColor = "var(--background)";
  }
}