import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['burger', 'nav'];

    connect() {
        this.update();
    }

    // Fond du header après 50 px de défilement, ou quand le menu est ouvert
    update() {
        const menuOuvert = this.navTarget.classList.contains('active');
        this.element.classList.toggle('header-active', window.scrollY > 50 || menuOuvert);
    }

    // Ouvre ou ferme le menu mobile
    toggle() {
        const ouvert = this.navTarget.classList.toggle('active');
        this.burgerTarget.classList.toggle('open', ouvert);
        this.majBurger(ouvert);
        document.body.style.overflow = ouvert ? 'hidden' : '';
        this.update();
    }

    // Referme le menu après un clic sur un lien
    close() {
        this.burgerTarget.classList.remove('open');
        this.navTarget.classList.remove('active');
        this.majBurger(false);
        document.body.style.overflow = '';
    }

    // Annonce l'état du menu aux lecteurs d'écran
    majBurger(ouvert) {
        this.burgerTarget.setAttribute('aria-expanded', ouvert);
        this.burgerTarget.setAttribute('aria-label', ouvert ? 'Fermer le menu' : 'Ouvrir le menu');
    }
}
