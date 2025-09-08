#!/bin/bash

# Deploy Script para Agatha's Web
# Versão otimizada para produção

set -e  # Para o script se houver erro

echo "🚀 Iniciando deploy do Agatha's Web..."

# Cores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Função para log colorido
log() {
    echo -e "${GREEN}[$(date +'%H:%M:%S')]${NC} $1"
}

error() {
    echo -e "${RED}[ERRO]${NC} $1"
    exit 1
}

warning() {
    echo -e "${YELLOW}[AVISO]${NC} $1"
}

info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

# 1. Backup do .env se existir
log "Fazendo backup dos arquivos de configuração..."
if [ -f .env ]; then
    cp .env .env.backup
    info "Backup do .env criado"
fi

# 2. Limpar completamente o repositório Git
log "Limpando repositório Git..."
git fetch origin || error "Erro ao fazer fetch do repositório"
git reset --hard origin/master || error "Erro no reset do Git"
git clean -fd || warning "Erro na limpeza de arquivos não rastreados"

# 3. Verificar se estamos na branch correta
CURRENT_BRANCH=$(git branch --show-current)
if [ "$CURRENT_BRANCH" != "master" ] && [ "$CURRENT_BRANCH" != "main" ]; then
    warning "Branch atual: $CURRENT_BRANCH. Mudando para master..."
    git checkout master || git checkout main || error "Não foi possível mudar para branch principal"
fi

# 4. Puxar as últimas alterações
log "Atualizando código..."
git pull origin master || git pull origin main || error "Erro ao atualizar código"

# 5. Restaurar .env se foi feito backup
if [ -f .env.backup ]; then
    mv .env.backup .env
    info ".env restaurado do backup"
fi

# 6. Verificar se Node.js está disponível
if ! command -v node &> /dev/null; then
    error "Node.js não encontrado. Instale Node.js primeiro."
fi

if ! command -v npm &> /dev/null; then
    error "NPM não encontrado. Instale NPM primeiro."
fi

# 7. Limpar cache do NPM e node_modules
log "Limpando dependências antigas..."
rm -rf node_modules
npm cache clean --force

# 8. Instalar dependências
log "Instalando dependências..."
npm install || error "Erro na instalação das dependências"

# 9. Verificar se build-css.js foi atualizado corretamente
log "Verificando arquivo de build..."
if ! grep -q "styles.css" build-css.js; then
    error "build-css.js não foi atualizado corretamente. Verifique o repositório Git."
fi

# 10. Compilar CSS
log "Compilando Tailwind CSS..."
npm run build-css --verbose || error "Erro na compilação do CSS"

# 11. Verificar se o CSS foi gerado corretamente
if [ ! -f "assets/css/styles.css" ]; then
    error "Arquivo styles.css não foi gerado"
fi

CSS_SIZE=$(stat -c%s "assets/css/styles.css" 2>/dev/null || stat -f%z "assets/css/styles.css")
CSS_SIZE_KB=$((CSS_SIZE / 1024))

if [ $CSS_SIZE_KB -lt 30 ]; then
    error "CSS muito pequeno (${CSS_SIZE_KB}KB). Esperado ~43KB. Houve erro na compilação."
fi

# 12. Definir permissões corretas
log "Configurando permissões..."
chmod -R 644 *.php
chmod -R 644 components/*.php
chmod -R 644 assets/css/*
chmod 755 .

# 13. Limpar cache se possível
if command -v php &> /dev/null; then
    info "Limpando cache PHP (se aplicável)..."
    # Adicionar comandos de limpeza de cache específicos se necessário
fi

# 14. Verificação final
log "Verificação final..."
info "Arquivos PHP encontrados: $(find . -name "*.php" | wc -l)"
info "Tamanho do CSS: ${CSS_SIZE_KB}KB"
info "Última alteração Git: $(git log -1 --pretty=format:'%h - %s (%cr)')"

# 15. Teste rápido se servidor web estiver rodando
if command -v curl &> /dev/null; then
    info "Testando conectividade (se servidor estiver rodando)..."
    if curl -s -o /dev/null -w "%{http_code}" http://localhost | grep -q "200\|301\|302"; then
        info "✅ Servidor respondendo"
    else
        warning "Servidor pode não estar rodando ou respondendo"
    fi
fi

log "🎉 Deploy concluído com sucesso!"
echo
info "Resumo do deploy:"
info "- Código atualizado da branch $(git branch --show-current)"
info "- CSS compilado: ${CSS_SIZE_KB}KB"
info "- Dependências instaladas: $(npm list --depth=0 2>/dev/null | grep -c "├──\|└──" || echo "N/A")"
echo
log "Se o layout ainda estiver quebrado, verifique:"
log "1. Se o servidor web está servindo arquivos CSS corretamente"
log "2. Se não há cache no navegador (Ctrl+F5)"
log "3. Se as permissões dos arquivos estão corretas"