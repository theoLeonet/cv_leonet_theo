export class SearchBar {
    private searchButton: HTMLButtonElement;
    private dropdownContainer: HTMLDivElement;
    private closeButton: HTMLButtonElement;

    constructor() {
        this.searchButton = document.querySelector('.search__link') as HTMLButtonElement;
        this.closeButton = document.querySelector('.search__button--close') as HTMLButtonElement;
        this.dropdownContainer = document.querySelector('.search__dropdown__container') as HTMLDivElement;
        this.addEventListeners();
    }

    private addEventListeners() {
        this.searchButton.addEventListener('click', (event:MouseEvent)=>{
            event.preventDefault();
            this.dropdownContainer.classList.remove('search__dropdown--closed');
            this.dropdownContainer.classList.add('search__dropdown--open');
        })

        this.closeButton.addEventListener('click', ()=>{
            this.dropdownContainer.classList.remove('search__dropdown--open');
            this.dropdownContainer.classList.add('search__dropdown--closed')
        })
    }
}