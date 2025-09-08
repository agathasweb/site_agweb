// Menu Mobile - Otimizado para performance
(function() {
    'use strict';
    
    let isInitialized = false;
    
    function initializeMenu() {
        if (isInitialized) return;
        
        const elements = {
            mobileMenuButton: document.getElementById('mobile-menu-button'),
            mobileMenu: document.getElementById('mobile-menu'),
            blogButton: document.getElementById('mobile-blog-button'),
            blogMenu: document.getElementById('mobile-blog-menu'),
            blogIcon: document.getElementById('mobile-blog-icon'),
            servicesButton: document.getElementById('mobile-services-button'),
            servicesMenu: document.getElementById('mobile-services-menu'),
            servicesIcon: document.getElementById('mobile-services-icon'),
            productsButton: document.getElementById('mobile-products-button'),
            productsMenu: document.getElementById('mobile-products-menu'),
            productsIcon: document.getElementById('mobile-products-icon')
        };
        
        // Verificar se todos os elementos existem
        if (!elements.mobileMenuButton || !elements.mobileMenu) return;
        
        // Toggle menu principal
        elements.mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            elements.mobileMenu.classList.toggle('hidden');
        });
        
        // Toggle submenus
        const submenus = [
            { button: elements.blogButton, menu: elements.blogMenu, icon: elements.blogIcon },
            { button: elements.servicesButton, menu: elements.servicesMenu, icon: elements.servicesIcon },
            { button: elements.productsButton, menu: elements.productsMenu, icon: elements.productsIcon }
        ];
        
        submenus.forEach(({ button, menu, icon }) => {
            if (button && menu && icon) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    menu.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            }
        });
        
        // Fechar menu ao clicar fora
        document.addEventListener('click', function(e) {
            if (!elements.mobileMenuButton.contains(e.target) && !elements.mobileMenu.contains(e.target)) {
                elements.mobileMenu.classList.add('hidden');
            }
        });
        
        isInitialized = true;
    }
    
    // Inicializar quando DOM estiver pronto
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeMenu);
    } else {
        initializeMenu();
    }
})();