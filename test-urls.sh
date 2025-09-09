#!/bin/bash

# Test URLs Script - Testa se todos os arquivos estão acessíveis via HTTP

echo "🌐 TESTE DE URLs - Verificação de acessibilidade"
echo "=============================================="

# Configuração
DOMAIN="www.agathas.com.br"
PROTOCOL="https"

# Cores
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

success() {
    echo -e "${GREEN}✅${NC} $1"
}

error() {
    echo -e "${RED}❌${NC} $1"
}

warning() {
    echo -e "${YELLOW}⚠️${NC} $1"
}

info() {
    echo -e "${BLUE}ℹ️${NC} $1"
}

test_url() {
    local url=$1
    local description=$2
    
    if command -v curl &> /dev/null; then
        local status=$(curl -s -o /dev/null -w "%{http_code}" "$url" --max-time 10)
        local size=$(curl -s -w "%{size_download}" -o /dev/null "$url" --max-time 10)
        
        if [ "$status" = "200" ]; then
            success "$description - $status (${size} bytes)"
        elif [ "$status" = "404" ]; then
            error "$description - $status NOT FOUND"
        elif [ "$status" = "000" ]; then
            error "$description - TIMEOUT/CONNECTION ERROR"
        else
            warning "$description - $status"
        fi
    else
        warning "$description - curl não disponível para teste"
    fi
}

echo
info "Testando arquivos críticos em: $PROTOCOL://$DOMAIN"
echo

# Testar arquivos JavaScript
echo "📱 JavaScript Files:"
test_url "$PROTOCOL://$DOMAIN/assets/js/menu.js" "Menu JavaScript"
test_url "$PROTOCOL://$DOMAIN/assets/js/lazy-loading.js" "Lazy Loading JavaScript"

echo
# Testar arquivos CSS
echo "🎨 CSS Files:"
test_url "$PROTOCOL://$DOMAIN/assets/css/styles.css" "Main CSS Stylesheet"

echo
# Testar imagens
echo "🖼️ Image Files:"
test_url "$PROTOCOL://$DOMAIN/assets/logo_white.png" "Logo White PNG"
test_url "$PROTOCOL://$DOMAIN/assets/favicon.png" "Favicon PNG"

echo
# Testar páginas principais
echo "📄 Main Pages:"
test_url "$PROTOCOL://$DOMAIN/" "Homepage"
test_url "$PROTOCOL://$DOMAIN/moodle.php" "Moodle Page"
test_url "$PROTOCOL://$DOMAIN/trafego-pago.php" "Tráfego Pago Page"
test_url "$PROTOCOL://$DOMAIN/contato.php" "Contato Page"

echo
# Testar arquivos de SEO
echo "🔍 SEO Files:"
test_url "$PROTOCOL://$DOMAIN/sitemap.xml" "Sitemap XML"
test_url "$PROTOCOL://$DOMAIN/robots.txt" "Robots TXT"

echo
# Verificação de Content-Type se curl estiver disponível
if command -v curl &> /dev/null; then
    echo "📋 Content-Type Headers:"
    
    css_type=$(curl -s -I "$PROTOCOL://$DOMAIN/assets/css/styles.css" | grep -i "content-type" | cut -d' ' -f2- | tr -d '\r')
    js_type=$(curl -s -I "$PROTOCOL://$DOMAIN/assets/js/menu.js" | grep -i "content-type" | cut -d' ' -f2- | tr -d '\r')
    
    if [[ "$css_type" == *"text/css"* ]]; then
        success "CSS Content-Type: $css_type"
    else
        error "CSS Content-Type incorreto: $css_type (esperado: text/css)"
    fi
    
    if [[ "$js_type" == *"javascript"* ]] || [[ "$js_type" == *"application/javascript"* ]]; then
        success "JS Content-Type: $js_type"
    else
        warning "JS Content-Type: $js_type"
    fi
fi

echo
echo "🔧 Comandos para corrigir problemas:"
echo
echo "Se arquivos 404:"
echo "  ./fix-production.sh"
echo
echo "Se Content-Type incorreto:"
echo "  Verificar .htaccess no servidor"
echo
echo "Se cache issues:"
echo "  Teste em modo anônimo (Ctrl+Shift+N)"
echo "  Limpar cache do servidor web"
echo
info "Teste concluído!"