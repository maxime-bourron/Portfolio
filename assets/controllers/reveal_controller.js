import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static values = { delay: { type: Number, default: 0 } };

    connect() {
        this.element.classList.add('reveal');
        this.element.style.transitionDelay = `${this.delayValue}ms`;

        this.observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    this.element.classList.add('visible');
                    this.observer.disconnect();
                }
            });
        }, { threshold: 0.15 });

        this.observer.observe(this.element);
    }

    disconnect() {
        this.observer?.disconnect();
    }
}