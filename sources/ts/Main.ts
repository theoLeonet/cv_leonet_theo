import {LanguagePicker} from "./LanguagePicker";
import {SearchBar} from "./SearchBar";
import {Header} from "./Header";
import {Slider} from "./Slider";

const backgroundVideo: HTMLVideoElement = document.querySelector('.background__video') as HTMLVideoElement;
const about: HTMLElement = document.querySelector('.about') as HTMLElement;
const secNav: HTMLElement = document.querySelector('.sec-nav') as HTMLElement;
const mainNav: HTMLElement = document.querySelector('.main-nav') as HTMLElement;
const burgerMenuIcon: HTMLDivElement = document.querySelector('.burger-menu__icon') as HTMLDivElement;
const checkbox: HTMLInputElement = document.querySelector('.burger-menu__icon__input') as HTMLInputElement;

const header: HTMLElement = document.querySelector('header') as HTMLElement;
const languagePicker = new LanguagePicker(document.querySelector('.sec-menu__language'));
const search = new SearchBar();
const headerClass = new Header();
const slider = new Slider();

let burgerOpen: boolean = false;

document.addEventListener('scroll', (e: Event) => {
    if (scrollY > about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = about.offsetTop - window.innerHeight + 'px';
    }
    if (scrollY < about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = '0';
    }
});

window.addEventListener('load', () => {
    if (checkbox.checked && innerWidth < 1200) {
        document.body.classList.add('js-noscroll');
        burgerOpen = true;
    }
})

window.addEventListener('resize', () => {
    if (checkbox.checked && innerWidth < 1200) {
        document.body.classList.add('js-noscroll');
        burgerOpen = true;
        console.log('hello true')
    }

    if (checkbox.checked && innerWidth > 1200) {
        document.body.classList.remove('js-noscroll');
        burgerOpen = false;
        console.log('hello false')
    }
})

burgerMenuIcon.addEventListener('click', () => {
    if (burgerOpen) {
        document.body.classList.remove('js-noscroll');
        burgerOpen = false;
        return;
    }
    if (innerWidth < 1200){
        document.body.classList.add('js-noscroll');
        burgerOpen = true;
        return;
    }
})

checkbox.addEventListener('click', ()=>{
    if (innerWidth > 1200) {
        checkbox.checked = false
    }
})
