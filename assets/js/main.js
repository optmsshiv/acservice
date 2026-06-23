const menuToggle = document.getElementById('menu-toggle');
const siteNav = document.getElementById('site-nav');

if (menuToggle && siteNav) {
  menuToggle.addEventListener('click', () => {
    siteNav.classList.toggle('open');
  });
}

window.addEventListener('scroll', () => {
  document.querySelector('.site-header').classList.toggle('scrolled', window.scrollY > 20);
});