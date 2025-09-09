#!/bin/bash

# Fix Production Script - Corrige problemas específicos de produção
# Resolve arquivos 404, layout quebrado e cache issues

set -e

echo "🩺 FIX PRODUCTION - Correção específica para produção"
echo "=================================================="

# Cores
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

log() {
    echo -e "${GREEN}[$(date +'%H:%M:%S')]${NC} $1"
}

error() {
    echo -e "${RED}[ERRO]${NC} $1"
}

warning() {
    echo -e "${YELLOW}[FIX]${NC} $1"
}

info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

# 1. Verificar estrutura de pastas
log "Verificando estrutura de pastas..."
mkdir -p assets/js
mkdir -p assets/css
mkdir -p components

info "Pastas verificadas/criadas"

# 2. Verificar e criar arquivos JavaScript que estão dando 404
log "Verificando arquivos JavaScript..."

# menu.js
if [ ! -f "assets/js/menu.js" ]; then
    warning "Criando assets/js/menu.js..."
    cat > assets/js/menu.js << 'EOF'
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
EOF
    info "menu.js criado"
else
    info "menu.js já existe"
fi

# lazy-loading.js
if [ ! -f "assets/js/lazy-loading.js" ]; then
    warning "Criando assets/js/lazy-loading.js..."
    cat > assets/js/lazy-loading.js << 'EOF'
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
EOF
    info "lazy-loading.js criado"
else
    info "lazy-loading.js já existe"
fi

# 3. Verificar CSS
log "Verificando CSS..."
if [ ! -f "assets/css/styles.css" ] || [ ! -s "assets/css/styles.css" ]; then
    warning "CSS não existe ou está vazio, recompilando..."
    
    # Garantir que input.css existe
    if [ ! -f "assets/css/input.css" ]; then
        warning "Criando input.css..."
        cat > assets/css/input.css << 'EOF'
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Animações personalizadas */
@layer utilities {
  /* Animações extras do index.php */
  @keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
  }
  
  @keyframes pulse-blue {
    0%, 100% { box-shadow: 0 0 0 0 rgba(147, 51, 234, 0.7); }
    50% { box-shadow: 0 0 0 10px rgba(147, 51, 234, 0); }
  }
  
  @keyframes slideInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .animate-float {
    animation: float 6s ease-in-out infinite;
  }
  
  .animate-pulse-blue {
    animation: pulse-blue 2s infinite;
  }
  
  .animate-slide-up {
    animation: slideInUp 0.8s ease-out;
  }
  
  .animate-rotate-y {
    animation: rotateY 10s linear infinite;
  }

  /* Cubo 3D */
  .cube-container {
    perspective: 1000px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .cube {
    position: relative;
    width: 120px;
    height: 120px;
    transform-style: preserve-3d;
    animation: rotateY 8s linear infinite;
  }
  
  .cube-face {
    position: absolute;
    width: 120px;
    height: 120px;
    border: 2px solid rgb(147, 51, 234);
    background: rgba(147, 51, 234, 0.1);
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    color: rgb(147, 51, 234);
    font-weight: bold;
  }
  
  .cube-face.front  { transform: rotateY(0deg) translateZ(60px); }
  .cube-face.back   { transform: rotateY(180deg) translateZ(60px); }
  .cube-face.right  { transform: rotateY(90deg) translateZ(60px); }
  .cube-face.left   { transform: rotateY(-90deg) translateZ(60px); }
  .cube-face.top    { transform: rotateX(90deg) translateZ(60px); }
  .cube-face.bottom { transform: rotateX(-90deg) translateZ(60px); }
  
  /* Efeitos de hover melhorados */
  .feature-card {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  .feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px -12px rgba(147, 51, 234, 0.25);
  }
  
  .btn-primary {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }
  
  .btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }
  
  .btn-primary:hover::before {
    left: 100%;
  }
  
  /* Efeito Typewriter */
  .typewriter-cursor {
    color: rgb(147, 51, 234);
  }
  
  .typewriter-text {
    min-height: 1.2em;
    line-height: 1.2;
    vertical-align: baseline;
  }
  
  h1 {
    line-height: 1.2 !important;
  }
  
  /* Tamanho do h1 responsivo */
  .mobile-h1-size {
    font-size: 1.3em;
  }
  
  @screen sm {
    .mobile-h1-size {
      font-size: 3em;
    }
  }
  
  /* Lazy Loading Styles */
  .lazy {
    transition: opacity 0.3s ease-in-out;
  }
  
  .lazy-loading {
    opacity: 0.6;
    filter: blur(2px);
  }
  
  .lazy-loaded {
    opacity: 1;
    filter: none;
  }
  
  .lazy-error {
    opacity: 0.5;
    background: #f3f4f6;
  }
  
  /* CLS Prevention - Aspect Ratios */
  .aspect-16-9 {
    aspect-ratio: 16/9;
  }
  
  .aspect-1-1 {
    aspect-ratio: 1/1;
  }
  
  .aspect-4-3 {
    aspect-ratio: 4/3;
  }
  
  /* Performance optimizations */
  .will-change-transform {
    will-change: transform;
  }
  
  .gpu-acceleration {
    transform: translateZ(0);
    backface-visibility: hidden;
    perspective: 1000px;
  }
}
EOF
    fi
    
    # Compilar CSS
    if command -v npm &> /dev/null && [ -f "build-css.js" ]; then
        npm run build-css || warning "Erro na compilação CSS"
    else
        warning "NPM ou build-css.js não encontrado"
    fi
fi

# 4. Verificar tamanho do CSS
if [ -f "assets/css/styles.css" ]; then
    CSS_SIZE=$(stat -c%s "assets/css/styles.css" 2>/dev/null || stat -f%z "assets/css/styles.css" 2>/dev/null || echo "0")
    CSS_SIZE_KB=$((CSS_SIZE / 1024))
    
    if [ $CSS_SIZE_KB -gt 30 ]; then
        info "CSS: ${CSS_SIZE_KB}KB (OK)"
    else
        warning "CSS muito pequeno: ${CSS_SIZE_KB}KB - pode estar corrompido"
    fi
fi

# 5. Verificar permissões
log "Configurando permissões..."
chmod 644 assets/js/*.js 2>/dev/null || true
chmod 644 assets/css/*.css 2>/dev/null || true
chmod 644 *.php 2>/dev/null || true
chmod 755 *.sh 2>/dev/null || true

# 6. Verificar .htaccess
if [ ! -f ".htaccess" ]; then
    warning "Criando .htaccess..."
    cat > .htaccess << 'EOF'
# Performance e Cache - Otimização para Google PageSpeed

# Compressão Gzip
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE text/javascript
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE image/svg+xml
</IfModule>

# Cache Headers
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType text/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType text/html "access plus 1 hour"
</IfModule>

# Content-Types corretos
AddType text/css .css
AddType application/javascript .js
AddType image/svg+xml .svg

# Headers de segurança
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set Vary "Accept-Encoding"
</IfModule>
EOF
    info ".htaccess criado"
fi

# 7. Teste de conectividade dos arquivos
log "Testando conectividade dos arquivos..."

test_file() {
    local file=$1
    if [ -f "$file" ]; then
        info "✅ $file existe ($(stat -c%s "$file" 2>/dev/null || stat -f%z "$file" 2>/dev/null || echo "0") bytes)"
    else
        error "❌ $file NÃO existe!"
    fi
}

test_file "assets/js/menu.js"
test_file "assets/js/lazy-loading.js"
test_file "assets/css/styles.css"
test_file "assets/logo_white.png"

# 8. Limpar cache se possível
log "Limpeza de cache..."
if [ -f "assets/css/styles.css" ]; then
    # Atualizar timestamp para forçar novo cache
    touch assets/css/styles.css
    info "Timestamp do CSS atualizado"
fi

echo
log "🎉 CORREÇÃO DE PRODUÇÃO CONCLUÍDA!"
echo
info "✅ Estrutura de pastas verificada"
info "✅ Arquivos JavaScript criados/verificados"
info "✅ CSS verificado/recompilado"
info "✅ Permissões configuradas"
info "✅ .htaccess configurado"
echo
warning "⚠️  PRÓXIMOS PASSOS:"
warning "1. Teste o site em modo anônimo (Ctrl+Shift+N)"
warning "2. Se ainda não funcionar: limpe cache do servidor web"
warning "3. Verifique se todos os arquivos estão acessíveis via browser"
echo
info "URLs para testar:"
info "- https://www.agathas.com.br/assets/js/menu.js"
info "- https://www.agathas.com.br/assets/js/lazy-loading.js"
info "- https://www.agathas.com.br/assets/css/styles.css"
echo
log "Produção corrigida! 🚀"