import {LanguagePicker} from "./LanguagePicker";
import {SearchBar} from "./SearchBar";
import {Header} from "./Header";

const backgroundVideo: HTMLVideoElement = document.querySelector('.background__video') as HTMLVideoElement;
const about: HTMLElement = document.querySelector('.about') as HTMLElement;
const secNav: HTMLElement = document.querySelector('.sec-nav') as HTMLElement;
const mainNav: HTMLElement = document.querySelector('.main-nav') as HTMLElement;
const burgerMenuIcon: HTMLDivElement = document.querySelector('.burger-menu__icon') as HTMLDivElement;

const header: HTMLElement = document.querySelector('header') as HTMLElement;
const languagePicker = new LanguagePicker();
const search = new SearchBar();
const headerClass = new Header();

let burgerOpen: boolean = false;

document.addEventListener('scroll', (e:Event)=>{
    if (scrollY > about.offsetTop - window.innerHeight ){
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = about.offsetTop - window.innerHeight + 'px';
    }
    if (scrollY < about.offsetTop - window.innerHeight){
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = '0';
    }
});

window.addEventListener('load', ()=>{
    if (window.innerWidth <= 1220 && !burgerOpen){
        [secNav, mainNav].forEach((e)=> e.classList.add('hidden'));
    }
})

window.addEventListener('resize', ()=>{
    if (window.innerWidth <= 1220 && !burgerOpen){
        [secNav, mainNav].forEach((e)=> e.classList.add('hidden'));
    }
    if ((window.innerWidth) > 1220){
        [secNav, mainNav].forEach((e)=> e.classList.remove('hidden'));
    }
})

burgerMenuIcon.addEventListener('click', (e)=>{
    if (burgerOpen){
        [secNav, mainNav].forEach((e)=> e.classList.add('hidden'));
        [document.body, /*backgroundVideo*/].forEach((e)=>{
            e.classList.remove('burger_menu');
        })
        header.classList.add('header__burger_menu--close');
        header.classList.remove('header__burger_menu--open');
        burgerOpen = false;
    }
    else if(!burgerOpen){
        [secNav, mainNav].forEach((e)=> e.classList.remove('hidden'));
        [document.body, /*backgroundVideo*/].forEach((e)=>{
            e.classList.add('burger_menu');
        })
        header.classList.add('header__burger_menu--open');
        header.classList.remove('header__burger_menu--close');
        burgerOpen = true;
    }
    header.addEventListener('animationend', ()=>{
        header.classList.remove('header__burger_menu--close');
    })
})