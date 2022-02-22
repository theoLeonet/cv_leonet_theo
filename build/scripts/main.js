var backgroundVideo = document.querySelector('.background__video');
var about = document.querySelector('.about');
document.addEventListener('scroll', function (e) {
    //console.log(intro.offsetHeight, window.innerHeight, scrollY, intro.offsetHeight - window.innerHeight);
    if (scrollY > about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.add('not-fixed');
        backgroundVideo.style.top = about.offsetTop - window.innerHeight + 'px';
    }
    if (scrollY < about.offsetTop - window.innerHeight) {
        backgroundVideo.classList.remove('not-fixed');
        backgroundVideo.style.top = 0;
    }
});
