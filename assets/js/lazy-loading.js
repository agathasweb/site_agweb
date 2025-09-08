// Lazy Loading Otimizado para Performance
(function() {
    'use strict';
    
    // Verificar se IntersectionObserver está disponível
    if (!('IntersectionObserver' in window)) {
        // Fallback para browsers antigos - carregar todas as imagens
        loadAllImages();
        return;
    }
    
    let imageObserver;
    let config = {
        root: null,
        rootMargin: '50px 0px',
        threshold: 0.01
    };
    
    function handleIntersect(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                loadImage(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }
    
    function loadImage(img) {
        // Adicionar classe de loading
        img.classList.add('lazy-loading');
        
        const src = img.dataset.src || img.dataset.lazySrc;
        const srcset = img.dataset.srcset || img.dataset.lazySrcset;
        
        if (src) {
            const imageLoader = new Image();
            imageLoader.onload = function() {
                img.src = src;
                if (srcset) img.srcset = srcset;
                img.classList.remove('lazy-loading');
                img.classList.add('lazy-loaded');
                
                // Trigger evento personalizado
                img.dispatchEvent(new CustomEvent('lazy-loaded'));
            };
            imageLoader.onerror = function() {
                img.classList.remove('lazy-loading');
                img.classList.add('lazy-error');
            };
            imageLoader.src = src;
        }
    }
    
    function loadAllImages() {
        // Fallback: carregar todas as imagens lazy
        const lazyImages = document.querySelectorAll('img[data-src], img[data-lazy-src]');
        lazyImages.forEach(loadImage);
    }
    
    function initLazyLoading() {
        const lazyImages = document.querySelectorAll('img[data-src], img[data-lazy-src]');
        
        if (lazyImages.length === 0) return;
        
        imageObserver = new IntersectionObserver(handleIntersect, config);
        
        lazyImages.forEach(function(img) {
            // Adicionar placeholder se não tiver src
            if (!img.src || img.src === '') {
                img.src = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1"%3E%3C/svg%3E';
            }
            
            // Adicionar classe lazy
            img.classList.add('lazy');
            
            // Observar a imagem
            imageObserver.observe(img);
        });
    }
    
    // Inicializar quando DOM estiver pronto
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLazyLoading);
    } else {
        initLazyLoading();
    }
    
    // Cleanup quando página for descarregada
    window.addEventListener('beforeunload', function() {
        if (imageObserver) {
            imageObserver.disconnect();
        }
    });
    
})();