import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['burger', 'nav'];

    // Appelé automatiquement quand le header apparaît
    connect() {
        this.update();
    }

    // Ton ancien "Scroll Header"
    update() {
        const menuOuvert = this.navTarget.classList.contains('active');
        this.element.classList.toggle('header-active', window.scrollY > 50 || menuOuvert);
    }

    // Ton ancien clic sur le burger
    toggle() {
        this.burgerTarget.classList.toggle('open');
        this.navTarget.classList.toggle('active');
        document.body.style.overflow = this.navTarget.classList.contains('active') ? 'hidden' : '';
        this.update();
    }

    // Ton ancien clic sur un lien : on referme le menu
    close() {
        this.burgerTarget.classList.remove('open');
        this.navTarget.classList.remove('active');
        document.body.style.overflow = '';
    }
}