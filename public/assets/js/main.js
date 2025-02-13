import { handleActiveLinks, handleMenuToggle } from './navigation.js';
import { handleFormToggleSwitch } from './formToggle.js';
import {handleSearchForm } from './form.js';
import { handleScrollToTop } from './scrollToTop.js';

document.addEventListener('DOMContentLoaded', () => {
    initialize();
});

// Initialisation des fonctionnalités principales au chargement du DOM
function initialize() {
    handleActiveLinks();
    handleMenuToggle();
    handleSearchForm();
    handleScrollToTop();
    handleFormToggleSwitch();
}
