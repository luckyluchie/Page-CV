// responsive navbar
const nav = document.querySelector("#myTopnav")

nav.addEventListener('click', function(){
  if (nav.className === "navbar") {
    nav.className += " responsive";
  } else {
    nav.className = "navbar";
  }
})

// scroll animation
let slideInRight = {
  distance: '100%',
  origin: 'right',
}

let slideInLeft = {
  distance: '100%',
  origin: 'left',
}

ScrollReveal().reveal('.symbols-front', slideInRight)
ScrollReveal().reveal('.symbols-back', slideInLeft)
ScrollReveal().reveal('.symbols-mobile', slideInRight)
ScrollReveal().reveal('.symbols-other', slideInLeft)

