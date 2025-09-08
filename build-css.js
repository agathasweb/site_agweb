#!/usr/bin/env node

const fs = require('fs');
const path = require('path');
const postcss = require('postcss');

// Importar a configuração do Tailwind
const tailwindConfig = require('./tailwind.config.js');

// Função para ler e processar o CSS
async function buildCSS() {
    try {
        console.log('🔨 Compilando Tailwind CSS...');
        
        // Ler o arquivo de entrada
        const inputCSS = fs.readFileSync('./assets/css/input.css', 'utf8');
        
        // Processar com PostCSS e Tailwind
        const result = await postcss([
            require('@tailwindcss/postcss')(tailwindConfig),
            require('autoprefixer'),
        ]).process(inputCSS, {
            from: './assets/css/input.css',
            to: './assets/css/output.css'
        });
        
        // Escrever o resultado
        fs.writeFileSync('./assets/css/output.css', result.css);
        
        const stats = fs.statSync('./assets/css/output.css');
        const fileSizeInKB = (stats.size / 1024).toFixed(2);
        
        console.log(`✅ CSS compilado com sucesso! Tamanho: ${fileSizeInKB} KB`);
        console.log(`📁 Arquivo salvo em: ./assets/css/output.css`);
        
    } catch (error) {
        console.error('❌ Erro ao compilar CSS:', error);
        process.exit(1);
    }
}

// Função para minificar CSS adicional
function minifyCSS(css) {
    return css
        // Remove comentários
        .replace(/\/\*[\s\S]*?\*\//g, '')
        // Remove espaços extras
        .replace(/\s+/g, ' ')
        // Remove espaços antes e depois de : ; { }
        .replace(/\s*([{}:;,])\s*/g, '$1')
        // Remove última nova linha
        .trim();
}

// Função para compilar com minificação
async function buildMinifiedCSS() {
    try {
        console.log('🔨 Compilando Tailwind CSS com minificação...');
        
        const inputCSS = fs.readFileSync('./assets/css/input.css', 'utf8');
        
        const result = await postcss([
            require('@tailwindcss/postcss')(tailwindConfig),
            require('autoprefixer'),
        ]).process(inputCSS, {
            from: './assets/css/input.css',
            to: './assets/css/output.css'
        });
        
        // Minificar CSS
        const minifiedCSS = minifyCSS(result.css);
        
        // Escrever o resultado minificado
        fs.writeFileSync('./assets/css/output.css', minifiedCSS);
        
        const stats = fs.statSync('./assets/css/output.css');
        const fileSizeInKB = (stats.size / 1024).toFixed(2);
        
        console.log(`✅ CSS compilado e minificado! Tamanho: ${fileSizeInKB} KB`);
        console.log(`📁 Arquivo salvo em: ./assets/css/output.css`);
        
    } catch (error) {
        console.error('❌ Erro ao compilar CSS:', error);
        process.exit(1);
    }
}

// Função para modo watch
function watchMode() {
    console.log('👀 Modo watch ativado. Monitorando alterações...');
    
    const filesToWatch = [
        './assets/css/input.css',
        './tailwind.config.js',
        ...fs.readdirSync('.').filter(file => file.endsWith('.php')),
        ...fs.readdirSync('./components').map(file => `./components/${file}`)
    ];
    
    filesToWatch.forEach(file => {
        if (fs.existsSync(file)) {
            fs.watchFile(file, () => {
                console.log(`📝 ${file} foi modificado. Recompilando...`);
                buildMinifiedCSS();
            });
        }
    });
    
    // Compilação inicial
    buildMinifiedCSS();
    
    console.log('Pressione Ctrl+C para parar o watch mode');
}

// Verificar argumentos da linha de comando
const args = process.argv.slice(2);

if (args.includes('--watch')) {
    watchMode();
} else if (args.includes('--minify')) {
    buildMinifiedCSS();
} else {
    buildCSS();
}