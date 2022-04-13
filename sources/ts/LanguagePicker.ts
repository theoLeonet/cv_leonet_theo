export class LanguagePicker {
    private container: HTMLLIElement;
    private button: HTMLButtonElement;
    private dropdown: HTMLDivElement;
    private srIntro: HTMLParagraphElement;
    private options: NodeListOf<HTMLLIElement>;
    private list: HTMLUListElement;
    private language: string;

    constructor() {

        this.container = document.querySelector('.sec-menu__language') as HTMLLIElement;
        this.container.innerHTML = '';
        this.container.insertAdjacentHTML('beforeend', `
            <button class="sr-intro language-picker__button">FR</button>
            <div class="language-picker__dropdown closed">
                <p class="hidden">Selectionez votre langue</p>
                <ul class="language-picker__list">
                    <li class="language-picker__option__container ">
                        <a href="#" class="language-picker__option french is-selected">FR</a>
                    </li>
                    <li class="language-picker__option__container">
                        <a href="#" class="language-picker__option english">EN</a>
                    </li>
                </ul>
            </div>
        `)
        this.button = document.querySelector('.language-picker__button') as HTMLButtonElement;
        this.dropdown = document.querySelector('.language-picker__dropdown') as HTMLDivElement
        this.list = document.querySelector('.language-picker__list') as HTMLUListElement;
        this.options = document.querySelectorAll('.language-picker__option__container') as NodeListOf<HTMLLIElement>;
        this.addEventListeners();
    }

    private addEventListeners() {
        this.button.addEventListener('click', (event:MouseEvent)=>{
            this.dropdown.classList.toggle('closed');
        })

        this.options.forEach((option:HTMLLIElement)=>{
            option.addEventListener('click', ()=>{
                this.options.forEach((option:HTMLLIElement)=>option.querySelector('a').classList.remove('is-selected'));
                option.querySelector('a').classList.add('is-selected');
            })
        })
    }
}