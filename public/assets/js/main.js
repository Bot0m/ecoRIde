import { handleActiveLinks, handleMenuToggle } from './navigation.js';
import { handleFormToggle, validateForm } from './form.js';
import { handleScrollToTop } from './scrollToTop.js';

document.addEventListener('DOMContentLoaded', () => {
    initialize();
});

// Initialisation des fonctionnalités principales au chargement du DOM
function initialize() {
    handleActiveLinks();
    handleMenuToggle();
    handleFormToggle();
    validateForm();
    handleScrollToTop();
}
