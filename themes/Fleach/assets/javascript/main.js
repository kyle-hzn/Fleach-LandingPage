const menu__button = document.querySelector('.menu-toggle');
const burger = document.querySelector('.burger-wrapper');
const body = document.querySelector('body');
const saveMoneyPhoto = [
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/borabora.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/scooter.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/pool.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/cuisine.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/wedding.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/shop.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/supercar.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/boat.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/second-home.jpg',
  'https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/homepage-hero.JPEG'
];

window.addEventListener('DOMContentLoaded', function() {
  saveMoneyPhoto.forEach((url) => {
    const load = new Image();
    load.src = url;
  });
});

if (burger) {
  burger.addEventListener('click', function(e) {
    this.classList.toggle('active');
  });
}

if (menu__button) {
  menu__button.addEventListener('click', function(e) {
    var menu = document.querySelector('.navigation-mobile__overlay');
    if (menu.classList.contains('navigation-mobile__overlay--inactive')) {
      menu.classList.add('navigation-mobile__overlay--active');
      menu.classList.remove('navigation-mobile__overlay--inactive');
      document.body.style.overflowY = 'hidden';
    } else if (menu.classList.contains('navigation-mobile__overlay--active')) {
      menu.classList.add('navigation-mobile__overlay--inactive');
      menu.classList.remove('navigation-mobile__overlay--active');
      document.body.style.overflowY = 'visible';
    }
  });
}

const cursor = document.querySelector('.home-simulation__cursor');
const image = document.getElementById('image');
const money = document.querySelector('.money');
const bien = document.getElementById('bien');

if (cursor) {
  let economie = cursor.value ? (cursor.value * 5) / 100 - 2990 : 0;

  // Init
  bien.textContent = cursor.value ? cursor.value : 0;
  money.textContent = economie;

  const valueEconomie = () => {
    economie = (cursor.value * 5) / 100 - 2990;

    if (economie < 5000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/borabora.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Un voyage';
    } else if (economie < 10000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/scooter.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Un scooter neuf';
    } else if (economie < 15000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/pool.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Une piscine';
    } else if (economie < 25000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/cuisine.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Une cuisine';
    } else if (economie < 35000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/wedding.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = "Les frais d'un mariage";
    } else if (economie < 45000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/shop.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Dix ans de courses alimentaires';
    } else if (economie < 55000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/supercar.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Une voiture neuve';
    } else if (economie < 65000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/boat.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Un bâteau';
    } else if (economie < 75000) {
      image.style.backgroundImage = "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/second-home.jpg')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Une résidence secondaire';
    } else if (economie > 75000) {
      image.style.backgroundImage =
        "url('https://partenaire-particuliers.com/wp-content/themes/Partenaire-Particuliers/dist/img/homepage-hero.JPEG')";
      document.querySelector('.home-simulation__bonus').innerHTML = 'Une nouvelle maison';
    }

    const newValue = economie;
    bien.innerHTML = cursor.value;
    money.textContent = economie;
  };

  cursor.addEventListener('input', valueEconomie);
}

const homeSlider = document.getElementById('home-services__slider');
if (homeSlider) {
  var imgSlider = simpleslider.getSlider({
    container: document.getElementById('home-services__slider'),
    prop: 'left',
    init: 100,
    show: 0,
    end: -100,
    unit: '%',
    delay: 2,
    duration: 0.4
  });
}

const adSlider = document.getElementById('single-ann__slider');
if (adSlider) {
  var imgSliderAd = simpleslider.getSlider({
    container: document.getElementById('single-ann__slider'),
    prop: 'opacity',
    unit: '',
    init: 0,
    transitionTime: 1,
    delay: 2,
    show: 1,
    end: 0
  });
}

var scroll = new SmoothScroll('a[href*="#"]');

const poppin_toggle = document.querySelector('.ad-toggle');
const poppin_btn = document.querySelector('.single-ann__btn');
const html = document.querySelector('html');
const poppin_close = document.querySelector('.single-ann__close');
const poppin_overlay = document.querySelector('.single-ann__alert');

if (poppin_btn) {
  poppin_btn.addEventListener('click', function(e) {
    this.classList.toggle('active');
  });
}

if (poppin_close) {
  poppin_btn.addEventListener('click', function(e) {
    this.classList.toggle('active');
  });
}

if (poppin_toggle) {
  poppin_toggle.addEventListener('click', function(e) {
    const menu = document.querySelector('.single-ann__poppin');
    if (menu.classList.contains('single-ann__poppin--inactive')) {
      menu.classList.add('single-ann__poppin--active');
      poppin_overlay.classList.remove('single-ann__alert--inactive');
      poppin_overlay.classList.add('single-ann__alert--active');
      menu.classList.remove('single-ann__poppin--inactive');
      document.documentElement.style.overflow = 'hidden';
    }
  });
}
if (poppin_close) {
  poppin_close.addEventListener('click', function(e) {
    const menu = document.querySelector('.single-ann__poppin');
    if (menu.classList.contains('single-ann__poppin--active')) {
      menu.classList.add('single-ann__poppin--inactive');
      poppin_overlay.classList.remove('single-ann__alert--active');
      poppin_overlay.classList.add('single-ann__alert--inactive');
      menu.classList.remove('single-ann__poppin--active');
      document.documentElement.style.overflow = 'visible';
    }
  });
}

const poppin_toggle2 = document.querySelector('.ad-toggle2');
const poppin_btn2 = document.querySelector('.single-ann__btn2');
const poppin_close2 = document.querySelector('.single-ann__close2');
const poppin_overlay2 = document.querySelector('.single-ann__alert2');

if (poppin_btn2) {
  poppin_btn2.addEventListener('click', function(e) {
    this.classList.toggle('active');
  });
}

if (poppin_close2) {
  poppin_btn2.addEventListener('click', function(e) {
    this.classList.toggle('active');
  });
}

if (poppin_toggle2) {
  poppin_toggle2.addEventListener('click', function(e) {
    const menu2 = document.querySelector('.single-ann__poppin2');
    if (menu2.classList.contains('single-ann__poppin2--inactive')) {
      menu2.classList.add('single-ann__poppin2--active');
      poppin_overlay2.classList.remove('single-ann__alert2--inactive');
      poppin_overlay2.classList.add('single-ann__alert2--active');
      menu2.classList.remove('single-ann__poppin2--inactive');
      document.documentElement.style.overflow = 'hidden';
    }
  });
}
if (poppin_close2) {
  poppin_close2.addEventListener('click', function(e) {
    const menu2 = document.querySelector('.single-ann__poppin2');
    if (menu2.classList.contains('single-ann__poppin2--active')) {
      menu2.classList.add('single-ann__poppin2--inactive');
      poppin_overlay2.classList.remove('single-ann__alert2--active');
      poppin_overlay2.classList.add('single-ann__alert2--inactive');
      menu2.classList.remove('single-ann__poppin2--active');
      document.documentElement.style.overflow = 'visible';
    }
  });
}

var cookie = document.cookie;
if (cookie.indexOf('visited=', 0) == -1) {
  var expiration = new Date();
  expiration.setDate(expiration.getDate() + 1);
  document.cookie = 'visited=1;expires=' + expiration + ';path=/';

  var cookies = document.querySelector('.cookies-banneer');
  cookies.classList.add('cookies-banneer--active');
  cookies.classList.remove('cookies-banneer--inactive');
}

var closeCook = document.querySelector('.cookies-banneer__close');
var close__toggleBis = document.querySelector('.close-togglebis');

if (closeCook) {
  closeCook.addEventListener('click', function() {
    this.classList.toggle('active');
  });
}
if (close__toggleBis) {
  close__toggleBis.addEventListener('click', function(e) {
    var element = document.querySelector('.cookies-banneer');
    if (element.classList.contains('cookies-banneer--active')) {
      element.classList.add('cookies-banneer--inactive');
      element.classList.remove('cookies-banneer--active');
    }
  });
}

var overlay = document.querySelector('.overlay');

if (overlay) {
    (function () {
        'use strict';

        var overlay = document.querySelector('.overlay'),
            overlayTL = new TimelineMax();

        var animateOut_2 = function () {
            overlayTL.to(overlay, 0.6, {top: '100%', ease: Power4.easeInOut, delay: 3});
        };

        animateOut_2();

        var tl = new TimelineLite();
        var tl2 = new TimelineLite();

        tl.from('#title', 1, {y: 100, opacity: 0, ease: Power4.easeOut}).to('#title', 1, {
            y: 200,
            opacity: 0,
            ease: Power4.easeIn
        }, '+=1');
        tl2
            .from('#title2', 1, {y: 100, opacity: 0, ease: Power4.easeOut, delay: 0.3})
            .to('#title2', 0.3, {y: 200, opacity: 0, ease: Power4.easeIn}, '+=1');
    })();
}

const containerComments = document.querySelectorAll(".home-comments__marquee");


const commentsLoop = (container, direction, selectTop) => {
  const oldComments = container.querySelectorAll(".com-container");
  for (var i = 0; i < oldComments.length; i++) {
    var elm = oldComments[i];
    var newone = elm.cloneNode(true);
    elm.parentNode.replaceChild(newone, elm);
  }


  const comments = container.querySelectorAll(".com-container");


  const currentComment = selectTop ? comments[0] : comments[comments.length - 1]

  for (var i = 0; i < comments.length; i++) {

    comments[i].classList.add('home-comments__animation' + direction)
  }
  setTimeout(() => {
    currentComment.addEventListener('animationend', function commentsReverse() {
      for (var i = 0; i < comments.length; i++) {
        comments[i].classList.remove('home-comments__animation' + direction)
      }  
      currentComment.removeEventListener('animationend', commentsReverse)
      container.removeChild(currentComment);
      if(selectTop) {
        container.appendChild(currentComment)      
      } else {
        container.insertBefore(currentComment, container.firstChild)
      }
      commentsLoop(container, direction, selectTop)
    })
  }, 100)
}

commentsLoop(containerComments[0], 'Up', true)
commentsLoop(containerComments[1], 'Down', false)