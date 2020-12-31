// navbar collapse
const menuBtn = document.querySelector('.nav-icon')
const menu = document.querySelector('.navbar-collapsed')
const mainContent = document.querySelector('MAIN')

menuBtn.addEventListener('click', function(){
  if (menu.style.display === 'none') {
    menu.style.display = 'block'
    menu.style.marginTop = '180px'
    mainContent.style.marginTop = '50px'
  } else {
    menu.style.display = 'none'
    mainContent.style.marginTop = '250px'
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
