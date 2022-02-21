const backgroundVideo:any = document.querySelector('.background__video');
const lastIntroTitle:any = document.querySelector('.intro div:last-of-type')

document.addEventListener('scroll', (e:Event)=>{
    console.log(lastIntroTitle.offsetTop, scrollY);
    if (scrollY > lastIntroTitle.offsetTop){
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = lastIntroTitle.offsetTop + "px";
    }
    if (scrollY < lastIntroTitle.offsetTop){
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = 0;
    }
})