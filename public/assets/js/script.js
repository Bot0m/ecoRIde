document.addEventListener('DOMContentLoaded', () => {
    // Gestion des liens actifs
    const handleActiveLinks = () => {
        const menuLinks = document.querySelectorAll('.navbar-menu a');
        const urlParams = new URLSearchParams(window.location.search);
        const currentPage = urlParams.get('page') || 'home';

        console.log("Page actuelle :", currentPage);

        menuLinks.forEach(link => {
            const linkParams = new URL(link.href).searchParams;
            const linkPage = linkParams.get('page');

            console.log(`Lien analysé : ${link.href}, Page du lien : ${linkPage}`);

            if (linkPage === currentPage) {
                console.log(`Lien actif trouvé : ${link.href}`);
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    };

    // Gestion du menu burger
    const handleMenuToggle = () => {
        const toggle = document.querySelector('.navbar-toggle');
        const menu = document.querySelector('.navbar-menu');

        if (toggle && menu) {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('active');
                menu.classList.toggle('active');
            });
        } else {
            console.warn("Navbar toggle ou menu introuvable.");
        }
    };

    // Initialisation des fonctions
    handleActiveLinks();
    handleMenuToggle();
});

document.addEventListener("DOMContentLoaded", function () {
    const toggleSearch = document.getElementById("toggleSearch");
    const togglePublish = document.getElementById("togglePublish");
    const searchForm = document.getElementById("searchForm");
    const publishForm = document.getElementById("publishForm");

    toggleSearch.addEventListener("click", function () {
        searchForm.classList.add("active");
        publishForm.classList.remove("active");
        toggleSearch.classList.add("active");
        togglePublish.classList.remove("active");
    });

    togglePublish.addEventListener("click", function () {
        publishForm.classList.add("active");
        searchForm.classList.remove("active");
        togglePublish.classList.add("active");
        toggleSearch.classList.remove("active");
    });
});