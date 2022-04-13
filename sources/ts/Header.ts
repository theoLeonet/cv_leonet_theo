export class Header {
    private header: HTMLElement;
    private oldScroll: number;

    constructor() {
        this.header = document.querySelector('header') as HTMLElement;
        this.oldScroll = 0;

        this.addEventListeners();
    }

    private addEventListeners() {
        window.addEventListener('scroll', ()=>{
            if (!(scrollY >= this.header.offsetHeight)) return;

            if (this.oldScroll > scrollY){
                this.header.classList.remove('header--close');
                this.header.classList.add('header--open');
            }
            else{
                this.header.classList.remove('header--open');
                this.header.classList.add('header--close');
            }

            this.oldScroll = scrollY;
        })
    }
}