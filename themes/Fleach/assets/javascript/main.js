const menuButton = document.querySelector('.header-modal__btn');
const burgerIcon = document.querySelector('.header-modal__trigger');
const bodyWrap2 = document.body


if (burgerIcon) {
  burgerIcon.addEventListener('click', function(e) {
    this.classList.toggle('header-modal__trigger--active');
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