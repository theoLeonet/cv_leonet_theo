export class Slider {
    private slider: HTMLDivElement;
    private leftArrow: HTMLDivElement;
    private rightArrow: HTMLDivElement;
    private position: number;
    private dots: NodeListOf<HTMLDivElement>;
    private slideNumber: number;
    
    constructor() {
        this.slider = document.querySelector('.did-you-know__slider') as HTMLDivElement;
        this.leftArrow = document.querySelector('.left-arrow__btn') as HTMLDivElement;
        this.rightArrow = document.querySelector('.right-arrow__btn') as HTMLDivElement;
        this.position = 0;
        this.dots = document.querySelectorAll('.slider__dot') as NodeListOf<HTMLDivElement>;
        this.dots[0].classList.add('slider__dot--selected');

        this.addEventListeners();
        this.resize();
    }

    private addEventListeners() {
        this.leftArrow.addEventListener('click', () => {
            !this.position ? this.position = -960 * 4 : this.position += this.clamp(256, (innerWidth/100)*80, 960 );
            this.slider.style.left = this.position + 'px';

            this.colorDots();
        })

        this.rightArrow.addEventListener('click', () => {
            this.position <= -(960 * 4)? this.position = 0 : this.position -= this.clamp(256, (innerWidth/100)*80, 960 );
            this.slider.style.left = this.position + 'px';

            this.colorDots();
        })

        this.dots.forEach((dot:HTMLDivElement) => {
            dot.addEventListener('click', ()=>{
                this.position = -this.clamp(256, (innerWidth/100)*80, 960 ) * parseInt(dot.dataset.index);
                this.slider.style.left = this.position + 'px';

                this.slideNumber = parseInt(dot.dataset.index)

                this.colorDots();
            })
        });
    }

    private colorDots() {
        this.dots.forEach((dot:HTMLDivElement)=>{
            dot.classList.remove('slider__dot--selected');
        })
        this.dots[this.position/this.clamp(256, (innerWidth/100)*80, 960 )*-1].classList.add('slider__dot--selected');
    }

    private clamp(min: number, num: number, max: number): number {
        return Math.min(Math.max(num, min), max);
    }

    private resize(){
        window.addEventListener('resize', ()=>{
            this.position = this.position = -this.clamp(256, (innerWidth/100)*80, 960 ) * this.slideNumber;
            this.slider.style.left = this.position + 'px';
        })
    }
}