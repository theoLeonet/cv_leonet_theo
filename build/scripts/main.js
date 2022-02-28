var backgroundVideo = document.querySelector('.background__video');
var about = document.querySelector('.about');
var secNav = document.querySelector('.sec-nav');
var mainNav = document.querySelector('.main-nav');
var burgerMenuIcon = document.querySelector('.burger-menu__icon');
var header = document.querySelector('header');
var burgerOpen = false;
document.addEventListener('scroll', function (e) {
    if (scrollY > about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = about.offsetTop - window.innerHeight + 'px';
    }
    if (scrollY < about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = '0';
    }
});
window.addEventListener('load', function () {
    if (window.innerWidth <= 1220 && !burgerOpen) {
        [secNav, mainNav].forEach(function (e) { return e.classList.add('hidden'); });
    }
});
window.addEventListener('resize', function () {
    if (window.innerWidth <= 1220 && !burgerOpen) {
        [secNav, mainNav].forEach(function (e) { return e.classList.add('hidden'); });
    }
    if ((window.innerWidth) > 1220) {
        [secNav, mainNav].forEach(function (e) { return e.classList.remove('hidden'); });
    }
});
burgerMenuIcon.addEventListener('click', function (e) {
    if (burgerOpen) {
        [secNav, mainNav].forEach(function (e) { return e.classList.add('hidden'); });
        [document.body, /*backgroundVideo*/].forEach(function (e) {
            e.classList.remove('burger_menu');
        });
        header.classList.add('header__burger_menu--close');
        header.classList.remove('header__burger_menu--open');
        burgerOpen = false;
    }
    else if (!burgerOpen) {
        [secNav, mainNav].forEach(function (e) { return e.classList.remove('hidden'); });
        [document.body, /*backgroundVideo*/].forEach(function (e) {
            e.classList.add('burger_menu');
        });
        header.classList.add('header__burger_menu--open');
        header.classList.remove('header__burger_menu--close');
        burgerOpen = true;
    }
    header.addEventListener('animationend', function () {
        header.classList.remove('header__burger_menu--close');
    });
});
