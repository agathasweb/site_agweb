#!/bin/bash

# Script de Recompilação Inteligente do Tailwind CSS
# Agatha's Web - Sistema de Build Automático

echo "🚀 Sistema de Recompilação Tailwind CSS - Agatha's Web"
echo "================================================="

# Verificar se Node.js está disponível
if ! command -v node &> /dev/null; then
    echo "❌ Erro: Node.js não encontrado. Por favor, instale o Node.js primeiro."
    exit 1
fi

# Verificar se npm está disponível
if ! command -v npm &> /dev/null; then
    echo "❌ Erro: npm não encontrado. Por favor, instale o npm primeiro."
    exit 1
fi

# Verificar se o arquivo de configuração existe
if [ ! -f "tailwind.config.js" ]; then
    echo "❌ Erro: tailwind.config.js não encontrado."
    exit 1
fi

# Verificar se o arquivo de entrada existe
if [ ! -f "assets/css/input.css" ]; then
    echo "❌ Erro: assets/css/input.css não encontrado."
    exit 1
fi

# Instalar dependências se node_modules não existir
if [ ! -d "node_modules" ]; then
    echo "📦 Instalando dependências do Node.js..."
    npm install
    if [ $? -ne 0 ]; then
        echo "❌ Erro: Falha ao instalar dependências."
        exit 1
    fi
fi

# Função para compilação simples
compile_css() {
    echo "🔨 Compilando CSS..."
    npm run build-css -- --minify
    if [ $? -eq 0 ]; then
        echo "✅ Compilação concluída com sucesso!"
        # Mostrar tamanho do arquivo
        if [ -f "assets/css/output.css" ]; then
            size=$(stat -f%z "assets/css/output.css" 2>/dev/null || stat -c%s "assets/css/output.css" 2>/dev/null)
            if [ ! -z "$size" ]; then
                kb_size=$(echo "scale=2; $size/1024" | bc -l 2>/dev/null || echo "$((size/1024))")
                echo "📁 Tamanho do arquivo: ${kb_size} KB"
            fi
        fi
        return 0
    else
        echo "❌ Erro na compilação!"
        return 1
    fi
}

# Função para modo watch
watch_mode() {
    echo "👀 Iniciando modo watch..."
    echo "   Monitorando: *.php, components/*.php, tailwind.config.js, assets/css/input.css"
    echo "   Pressione Ctrl+C para parar"
    echo ""
    npm run watch-css
}

# Função para mostrar ajuda
show_help() {
    echo "Uso: ./recompile.sh [opção]"
    echo ""
    echo "Opções:"
    echo "  build       Compilar CSS uma vez (padrão)"
    echo "  watch       Modo watch - recompila automaticamente ao detectar mudanças"
    echo "  help        Mostrar esta ajuda"
    echo "  --force     Recompilar forçando reinstalação de dependências"
    echo ""
    echo "Exemplos:"
    echo "  ./recompile.sh build     # Compila o CSS uma vez"
    echo "  ./recompile.sh watch     # Inicia modo watch"
    echo "  ./recompile.sh --force   # Recompila forçando reinstalação"
}

# Processar argumentos
case "${1:-build}" in
    "build")
        compile_css
        ;;
    "watch")
        watch_mode
        ;;
    "help"|"-h"|"--help")
        show_help
        ;;
    "--force")
        echo "🔄 Reinstalando dependências..."
        rm -rf node_modules package-lock.json
        npm install
        if [ $? -eq 0 ]; then
            compile_css
        else
            echo "❌ Erro ao reinstalar dependências."
            exit 1
        fi
        ;;
    *)
        echo "❌ Opção inválida: $1"
        echo "Use './recompile.sh help' para ver as opções disponíveis."
        exit 1
        ;;
esac