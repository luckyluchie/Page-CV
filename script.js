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