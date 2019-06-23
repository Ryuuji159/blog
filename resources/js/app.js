function classToggle() {
  const navs = document.querySelectorAll('.navbar-items')
  
  navs.forEach(nav => nav.classList.toggle('navbar-toggleshow'));
}

document.querySelector('.navbar-link-toggle').addEventListener('click', classToggle);
