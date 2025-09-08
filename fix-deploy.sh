#!/bin/bash

# Fix Deploy Script - Força correção de problemas de deploy
# Execute quando o layout estiver quebrado em produção

set -e

echo "🛠️  FIX DEPLOY - Correção forçada de problemas"
echo "============================================="

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
    exit 1
}

warning() {
    echo -e "${YELLOW}[FORÇA]${NC} $1"
}

info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

log "Iniciando correção forçada..."

# 1. Backup completo
log "Fazendo backup de segurança..."
mkdir -p .backup-$(date +%Y%m%d-%H%M%S)
cp -r assets .backup-$(date +%Y%m%d-%H%M%S)/ 2>/dev/null || true
cp *.php .backup-$(date +%Y%m%d-%H%M%S)/ 2>/dev/null || true
info "Backup criado"

# 2. Reset completo do Git
warning "Reset COMPLETO do repositório Git..."
git fetch origin
git reset --hard origin/master
git clean -ffd
git pull origin master --force

# 3. Verificar arquivos críticos
log "Verificando arquivos críticos..."

# Forçar download dos arquivos essenciais se não existirem ou estiverem errados
REPO_URL="https://raw.githubusercontent.com/agathasweb/site_agweb/master"

declare -A ARQUIVOS_CRITICOS=(
    ["build-css.js"]="build-css.js"
    ["package.json"]="package.json" 
    ["tailwind.config.js"]="tailwind.config.js"
    ["assets/css/input.css"]="assets/css/input.css"
)

for arquivo_local in "${!ARQUIVOS_CRITICOS[@]}"; do
    arquivo_remoto="${ARQUIVOS_CRITICOS[$arquivo_local]}"
    
    warning "Verificando $arquivo_local..."
    
    if [ "$arquivo_local" = "build-css.js" ]; then
        # Verificação especial para build-css.js
        if [ ! -f "$arquivo_local" ] || ! grep -q "styles.css" "$arquivo_local"; then
            warning "Corrigindo $arquivo_local..."
            curl -s -f "$REPO_URL/$arquivo_remoto" > "$arquivo_local" || error "Falha ao baixar $arquivo_local"
            info "$arquivo_local corrigido"
        fi
    else
        # Verificação padrão para outros arquivos
        if [ ! -f "$arquivo_local" ]; then
            warning "Baixando $arquivo_local..."
            mkdir -p "$(dirname "$arquivo_local")"
            curl -s -f "$REPO_URL/$arquivo_remoto" > "$arquivo_local" || error "Falha ao baixar $arquivo_local"
            info "$arquivo_local baixado"
        fi
    fi
done

# 4. Limpar completamente node_modules
warning "Removendo node_modules completamente..."
rm -rf node_modules package-lock.json
npm cache clean --force

# 5. Instalar dependências do zero
log "Instalando dependências do zero..."
npm install

# 6. Verificar se Tailwind está correto
log "Verificando instalação do Tailwind..."
if [ ! -d "node_modules/tailwindcss" ]; then
    warning "Tailwind não encontrado, instalando..."
    npm install tailwindcss@^3.4.17 autoprefixer postcss --save-dev
fi

# 7. Forçar compilação CSS
warning "FORÇANDO compilação CSS..."
rm -f assets/css/styles.css
node build-css.js || error "Falha na compilação CSS"

# 8. Verificar resultado
if [ -f "assets/css/styles.css" ]; then
    CSS_SIZE=$(stat -c%s "assets/css/styles.css" 2>/dev/null || stat -f%z "assets/css/styles.css")
    CSS_SIZE_KB=$((CSS_SIZE / 1024))
    
    if [ $CSS_SIZE_KB -gt 30 ]; then
        log "✅ CSS compilado com sucesso: ${CSS_SIZE_KB}KB"
    else
        error "CSS muito pequeno: ${CSS_SIZE_KB}KB - algo ainda está errado"
    fi
else
    error "styles.css não foi gerado!"
fi

# 9. Verificar referências CSS nas páginas
log "Verificando referências CSS nas páginas..."
PHP_FILES=$(find . -name "*.php" -maxdepth 1)
ERROS_CSS=0

for php_file in $PHP_FILES; do
    if grep -q "output\.css" "$php_file"; then
        warning "Corrigindo referência CSS em $php_file..."
        sed -i 's/output\.css/styles.css/g' "$php_file"
        ERROS_CSS=$((ERROS_CSS + 1))
    fi
done

if [ $ERROS_CSS -gt 0 ]; then
    info "Corrigidas $ERROS_CSS referências CSS incorretas"
fi

# 10. Definir permissões
log "Configurando permissões..."
chmod 644 *.php 2>/dev/null || true
chmod 644 assets/css/* 2>/dev/null || true
chmod 755 *.sh 2>/dev/null || true

# 11. Teste final
log "Teste final..."
info "Arquivos PHP: $(ls -1 *.php 2>/dev/null | wc -l)"
info "CSS: $(ls -la assets/css/styles.css 2>/dev/null | awk '{print $5}') bytes"
info "JS: $(ls -1 assets/js/*.js 2>/dev/null | wc -l) arquivos"

echo
log "🎉 CORREÇÃO COMPLETA!"
echo
info "✅ Repositório Git resetado"
info "✅ Arquivos críticos verificados/corrigidos"
info "✅ Dependências reinstaladas"
info "✅ CSS recompilado"
info "✅ Referências corrigidas"
info "✅ Permissões configuradas"
echo
warning "⚠️  Se o layout ainda estiver quebrado:"
warning "1. Limpe o cache do navegador (Ctrl+F5)"
warning "2. Verifique se o servidor está servindo CSS corretamente"
warning "3. Execute: ./debug-deploy.sh"
echo
log "Deploy corrigido! 🚀"