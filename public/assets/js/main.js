/**
 * Fichier principal de l'application
 * Initialise toutes les fonctionnalités JavaScript au chargement du DOM
 */

import { handleActiveLinks, handleMenuToggle } from './navigation.js';
import { handleFormToggleSwitch } from './form-toggle.js';
import { handleSearchForm } from './form.js';
import { handleScrollToTop } from './scroll-to-top.js';

/**
 * Initialise toutes les fonctionnalités au chargement du DOM
 * @returns {void}
 */
document.addEventListener('DOMContentLoaded', () => {
    try {
        handleActiveLinks();
        handleMenuToggle();
        handleSearchForm();
        handleScrollToTop();
        handleFormToggleSwitch();
    } catch (error) {
        console.error('Error during initialization:', error);
    }
});
