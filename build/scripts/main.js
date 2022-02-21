var backgroundVideo = document.querySelector('.background__video');
var lastIntroTitle = document.querySelector('.intro div:last-of-type');
document.addEventListener('scroll', function (e) {
    console.log(lastIntroTitle.offsetTop, scrollY);
    if (scrollY > lastIntroTitle.offsetTop) {
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = lastIntroTitle.offsetTop + "px";
    }
    if (scrollY < lastIntroTitle.offsetTop) {
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = 0;
    }
});
