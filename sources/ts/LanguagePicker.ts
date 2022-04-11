export class LanguagePicker {
    private container: HTMLLIElement;

    constructor() {
        this.container = document.querySelector('.sec-menu__language') as HTMLLIElement;
        this.container.innerHTML = '';
        this.container.innerHTML = `
            <button class=""></button>
        `
    }
}