const menuButton = document.querySelector('.header-modal__btn');
const burgerIcon = document.querySelector('.header-modal__trigger');
const menuLinks = document.querySelectorAll('.header-modal__links');
const bodyWrap2 = document.body


if (burgerIcon) {
  burgerIcon.addEventListener('click', function(e) {
    this.classList.toggle('header-modal__trigger--active');
  });
}

if (menuLinks.length > 0) {
  menuLinks.forEach((menuLink)=> {
    menuLink.addEventListener('click', function(e) {
        var menuToggle = document.querySelector('.header-modal__overlay');
        if (menuToggle.classList.contains('header-modal__overlay--active')) {
            menuToggle.classList.add('header-modal__overlay--inactive');
            menuToggle.classList.remove('header-modal__overlay--active');
            burgerIcon.classList.toggle('header-modal__trigger--active');
        }
    });
    });
}

if (menuButton) {
  menuButton.addEventListener('click', function(e) {
    var menuToggle = document.querySelector('.header-modal__overlay');
    if (menuToggle.classList.contains('header-modal__overlay--inactive')) {
      menuToggle.classList.add('header-modal__overlay--active');
      menuToggle.classList.remove('header-modal__overlay--inactive');
      bodyWrap2.classList.add('overflow-y--none');
    } else if (menuToggle.classList.contains('header-modal__overlay--active')) {
      menuToggle.classList.add('header-modal__overlay--inactive');
      menuToggle.classList.remove('header-modal__overlay--active');
      bodyWrap2.classList.remove('overflow-y--none');
    }
  });
}


var scroll = new SmoothScroll('a[href*="#"]',{
  header: '[data-scroll-header]',
  offset: 100
});

window.sr = ScrollReveal();
sr.reveal('.reveal', { 
  origin: 'bottom',
  distance: '50px',
  duration: 2000 
});
sr.reveal('.reveal2', { 
  origin: 'bottom',
  distance: '50px',
  delay: '400',
  duration: 2000 
});
sr.reveal('.reveal3', { 
  origin: 'bottom',
  distance: '50px',
  delay: '600',
  duration: 2000 
});
sr.reveal('.reveal4', { 
  origin: 'center',
  duration: 2000 
});