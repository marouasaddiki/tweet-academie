const displaySide = document.getElementById('display'); // Button Display dans la side bar
const displayModal = document.getElementsByClassName('customize-theme'); // Le modal
const displayClose = document.getElementById('closeIcon'); // Icon close 
const displayDone = document.getElementById('doneBtn'); // Button Done
let root = document.querySelector(':root'); // element :root du css styleDisplay
let theme = {fontSize : "16px", primaryHue : 252, background : "#fff" };

// OPEN MODAL
displaySide.addEventListener('click', function(){  
    displayModal[0].style.display ="grid";
})

// CLOSE MODAL
displayClose.addEventListener('click', function(){
  displayModal[0].style.display ="none";
})

displayDone.addEventListener('click', function(){
  displayModal[0].style.display ="none";
})

// FONT SIZE 

const fontSizes = document.querySelectorAll('.choose-size span');

const removeSizeSelector = () => { // Remove active class des spans
  fontSizes.forEach(size => {
    size.classList.remove('active');
  })
}

fontSizes.forEach(size => { // Pour chaque span dans choose-size

  size.addEventListener('click',() => {     // A chaque clique sur le span de font-size
    removeSizeSelector();   // remove la class active
    let fontSize;          // size = span , fontSize = variable qui servira a changer la font du html   
    size.classList.toggle('active');  // ajoute la class active

    if (size.classList.contains('font-size-1')) {
      fontSize = '10px';
    } else if (size.classList.contains('font-size-2')) {
      fontSize = '13px';
    } else if (size.classList.contains('font-size-3')) {
      fontSize = '16px';
    } else if (size.classList.contains('font-size-4')) {
      fontSize = '19px';
    } else if (size.classList.contains('font-size-5')) {
      fontSize = '22px';
    }
   // Change la font-size de l'élement HTML
   theme.fontSize = fontSize;
   setLocalStorage(theme);
  })
})


// CHANGE PRIMARY COLORS

const colorPalette = document.querySelectorAll('.choose-color span');

const removeColorSelector = () => {
  colorPalette.forEach(colorPicker => {
    colorPicker.classList.remove('active');
  })
}

colorPalette.forEach(color => {
  color.addEventListener('click', () => {
    let primaryHue;
    removeColorSelector();

    if (color.classList.contains('color-1')) {
      primaryHue = 252;
    } else if (color.classList.contains('color-2')) {
      primaryHue = 52;
    } else if (color.classList.contains('color-3')) {
      primaryHue = 352;
    } else if (color.classList.contains('color-4')) {
      primaryHue = 152;
    } else if (color.classList.contains('color-5')) {
      primaryHue = 202;
    }
    color.classList.add('active');
    theme.primaryHue = primaryHue;
    setLocalStorage(theme);
  })
})


// CHANGE THEME COLORS
const Bg1 = document.querySelector('.bg-1'); // Default
const Bg2 = document.querySelector('.bg-2'); // Dim
const Bg3 = document.querySelector('.bg-3'); // Dark

const Sp1 = document.querySelector('.sp-1');
const Sp2 = document.querySelector('.sp-2');
const Sp3 = document.querySelector('.sp-3');

Bg1.addEventListener('click', () => {
  // Ajout de la class active
  Bg1.classList.add('active');
  Sp1.classList.add('active');
  const background = '#fff';
  // Enlever la classe active des autres Bg
  Bg2.classList.remove('active');
  Bg3.classList.remove('active');
  Sp2.classList.remove('active');
  Sp3.classList.remove('active');
  theme.background = background;
  setLocalStorage(theme);
})

Bg2.addEventListener('click', () => {
  // Ajout de la class active
  Bg2.classList.add('active');
  Sp2.classList.add('active');
  const background = "rgb(21,32,43)";
  // Enlever la classe active des autres Bg
  Bg1.classList.remove('active');
  Bg3.classList.remove('active');
  Sp1.classList.remove('active');
  Sp3.classList.remove('active');
  theme.background = background;
  setLocalStorage(theme);
})

Bg3.addEventListener('click', () => {
  // Ajout de la class active
  Sp3.classList.add('active');
  Bg3.classList.add('active');
  const background = '#000';
  // Enlever la classe active des autres Bg
  Bg1.classList.remove('active');
  Bg2.classList.remove('active');
  Sp1.classList.remove('active');
  Sp2.classList.remove('active');
  theme.background = background;
  setLocalStorage(theme);
})

function setLocalStorage(dataTheme) {
  localStorage.setItem("ThemeStorage", JSON.stringify(dataTheme));
  let getStorage = localStorage.getItem("ThemeStorage");
  let fontSizeTarget = JSON.parse(getStorage).fontSize;
  let primaryHueTarget = JSON.parse(getStorage).primaryHue;
  let backgroundTarget = JSON.parse(getStorage).background;
  document.documentElement.style.setProperty('--fontSize', fontSizeTarget);
  document.documentElement.style.setProperty('--primary-color-hue', primaryHueTarget);
  document.documentElement.style.setProperty('--background', backgroundTarget);

  if (JSON.parse(getStorage).background === "#fff") {
    document.documentElement.style.setProperty('--colorText', '#000');
  } else{
    document.documentElement.style.setProperty('--colorText', '#fff');
  }
} 

// Actualise la page via une function anonyme
(function (){
  let getStorage = localStorage.getItem("ThemeStorage");
  let fontSizeTarget = JSON.parse(getStorage).fontSize;
  let primaryHueTarget = JSON.parse(getStorage).primaryHue;
  let backgroundTarget = JSON.parse(getStorage).background;
  document.documentElement.style.setProperty('--fontSize', fontSizeTarget);
  document.documentElement.style.setProperty('--primary-color-hue', primaryHueTarget);
  document.documentElement.style.setProperty('--background', backgroundTarget);

  if (JSON.parse(getStorage).background === "#fff") {
    document.documentElement.style.setProperty('--colorText', '#000');
  } else{
    document.documentElement.style.setProperty('--colorText', '#fff');
  }
})();