#!/bin/bash

# Debug Deploy Script - Diagnosticar problemas de deploy
# Execute este script em produção para identificar problemas

echo "🔍 DIAGNÓSTICO DE DEPLOY - Agatha's Web"
echo "======================================"

# Cores
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

success() {
    echo -e "${GREEN}[OK]${NC} $1"
}

warning() {
    echo -e "${YELLOW}[AVISO]${NC} $1"
}

error() {
    echo -e "${RED}[ERRO]${NC} $1"
}

echo
echo "1. VERIFICANDO AMBIENTE"
echo "----------------------"

# Verificar Node.js
if command -v node &> /dev/null; then
    NODE_VERSION=$(node --version)
    success "Node.js instalado: $NODE_VERSION"
else
    error "Node.js NÃO encontrado!"
fi

# Verificar NPM
if command -v npm &> /dev/null; then
    NPM_VERSION=$(npm --version)
    success "NPM instalado: $NPM_VERSION"
else
    error "NPM NÃO encontrado!"
fi

echo
echo "2. VERIFICANDO REPOSITÓRIO GIT"
echo "-----------------------------"

# Git status
if git status &> /dev/null; then
    BRANCH=$(git branch --show-current)
    success "Branch atual: $BRANCH"
    
    LAST_COMMIT=$(git log -1 --pretty=format:'%h - %s (%cr)')
    info "Último commit: $LAST_COMMIT"
    
    # Verificar se há mudanças não commitadas
    if [[ -n $(git status --porcelain) ]]; then
        warning "Há alterações não commitadas:"
        git status --short
    else
        success "Working directory limpo"
    fi
else
    error "Não é um repositório Git ou há problemas"
fi

echo
echo "3. VERIFICANDO ARQUIVOS CRÍTICOS"
echo "--------------------------------"

# Verificar build-css.js
if [ -f "build-css.js" ]; then
    success "build-css.js existe"
    
    # Verificar se referencia styles.css
    if grep -q "styles\.css" build-css.js; then
        success "build-css.js referencia styles.css ✓"
    else
        error "build-css.js NÃO referencia styles.css!"
        warning "Conteúdo atual:"
        grep -n "\.css" build-css.js || echo "Nenhuma referência CSS encontrada"
    fi
else
    error "build-css.js NÃO existe!"
fi

# Verificar package.json
if [ -f "package.json" ]; then
    success "package.json existe"
    
    if grep -q "tailwindcss" package.json; then
        TAILWIND_VERSION=$(grep "tailwindcss" package.json | head -1)
        info "Tailwind: $TAILWIND_VERSION"
    else
        warning "Tailwind não encontrado no package.json"
    fi
else
    error "package.json NÃO existe!"
fi

# Verificar tailwind.config.js
if [ -f "tailwind.config.js" ]; then
    success "tailwind.config.js existe"
else
    warning "tailwind.config.js não existe"
fi

echo
echo "4. VERIFICANDO DEPENDÊNCIAS"
echo "--------------------------"

# Verificar node_modules
if [ -d "node_modules" ]; then
    MODULES_COUNT=$(find node_modules -name "package.json" | wc -l)
    success "node_modules existe ($MODULES_COUNT packages)"
    
    # Verificar Tailwind especificamente
    if [ -d "node_modules/tailwindcss" ]; then
        success "tailwindcss instalado ✓"
    else
        error "tailwindcss NÃO instalado!"
    fi
else
    warning "node_modules não existe - precisa rodar npm install"
fi

echo
echo "5. TESTANDO COMPILAÇÃO CSS"
echo "-------------------------"

# Tentar compilar CSS
if [ -f "build-css.js" ] && command -v npm &> /dev/null; then
    info "Testando compilação CSS..."
    
    # Backup do CSS atual se existir
    if [ -f "assets/css/styles.css" ]; then
        cp "assets/css/styles.css" "assets/css/styles.css.backup"
    fi
    
    # Tentar compilar
    if npm run build-css > /tmp/css-build.log 2>&1; then
        success "Compilação CSS funcionou!"
        
        # Verificar tamanho do arquivo gerado
        if [ -f "assets/css/styles.css" ]; then
            CSS_SIZE=$(stat -c%s "assets/css/styles.css" 2>/dev/null || stat -f%z "assets/css/styles.css" 2>/dev/null || echo "0")
            CSS_SIZE_KB=$((CSS_SIZE / 1024))
            
            if [ $CSS_SIZE_KB -gt 30 ]; then
                success "CSS gerado: ${CSS_SIZE_KB}KB (tamanho OK)"
            else
                error "CSS muito pequeno: ${CSS_SIZE_KB}KB (esperado ~43KB)"
            fi
        else
            error "styles.css não foi gerado!"
        fi
    else
        error "Compilação CSS FALHOU!"
        warning "Log de erro:"
        cat /tmp/css-build.log
    fi
else
    warning "Não foi possível testar compilação"
fi

echo
echo "6. VERIFICANDO ESTRUTURA DE ARQUIVOS"
echo "-----------------------------------"

# Listar arquivos importantes
ARQUIVOS_ESPERADOS=(
    "index.php"
    "build-css.js"
    "package.json"
    "assets/css/input.css"
    "components/header.php"
    "components/footer.php"
)

for arquivo in "${ARQUIVOS_ESPERADOS[@]}"; do
    if [ -f "$arquivo" ]; then
        success "$arquivo existe"
    else
        error "$arquivo NÃO existe!"
    fi
done

echo
echo "7. VERIFICANDO REFERÊNCIAS CSS NAS PÁGINAS PHP"
echo "----------------------------------------------"

# Verificar se as páginas PHP referenciam o CSS correto
PHP_FILES=$(find . -name "*.php" -maxdepth 1)
CSS_REFS_CORRETAS=0
CSS_REFS_ERRADAS=0

for php_file in $PHP_FILES; do
    if grep -q "styles\.css" "$php_file"; then
        CSS_REFS_CORRETAS=$((CSS_REFS_CORRETAS + 1))
    elif grep -q "output\.css" "$php_file"; then
        error "$(basename $php_file) ainda referencia output.css!"
        CSS_REFS_ERRADAS=$((CSS_REFS_ERRADAS + 1))
    fi
done

success "Arquivos com styles.css: $CSS_REFS_CORRETAS"
if [ $CSS_REFS_ERRADAS -gt 0 ]; then
    error "Arquivos com output.css: $CSS_REFS_ERRADAS"
fi

echo
echo "8. RESUMO E DIAGNÓSTICO"
echo "======================"

if [ -f "assets/css/styles.css" ]; then
    CSS_SIZE=$(stat -c%s "assets/css/styles.css" 2>/dev/null || stat -f%z "assets/css/styles.css" 2>/dev/null || echo "0")
    CSS_SIZE_KB=$((CSS_SIZE / 1024))
    info "CSS atual: ${CSS_SIZE_KB}KB"
fi

echo
echo "PRÓXIMOS PASSOS RECOMENDADOS:"
echo "1. Se build-css.js está errado: git pull origin master --force"
echo "2. Se node_modules não existe: npm install"
echo "3. Se CSS pequeno: npm run build-css"
echo "4. Se ainda não funcionar: executar ./deploy.sh"
echo

# Restaurar backup se foi criado
if [ -f "assets/css/styles.css.backup" ]; then
    mv "assets/css/styles.css.backup" "assets/css/styles.css"
fi

echo "🔍 Diagnóstico concluído!"