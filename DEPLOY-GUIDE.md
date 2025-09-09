# 🚀 Guia de Deploy - Agatha's Web

## Scripts Disponíveis

### 1. `./deploy.sh` - Deploy Normal
```bash
./deploy.sh
```
**Quando usar:** Deploy padrão em produção

**O que faz:**
- Atualiza código do Git
- Instala dependências 
- Compila CSS
- Verifica integridade

### 2. `./debug-deploy.sh` - Diagnóstico
```bash
./debug-deploy.sh
```
**Quando usar:** Layout quebrado, problemas de deploy

**O que faz:**
- Verifica ambiente (Node.js, NPM)
- Analisa arquivos críticos
- Testa compilação CSS
- Identifica problemas específicos

### 3. `./fix-deploy.sh` - Correção Forçada
```bash
./fix-deploy.sh
```
**Quando usar:** Problemas persistentes, deploy corrompido

**O que faz:**
- Reset completo do Git
- Reinstala dependências do zero
- Força correção de arquivos
- Recompila tudo

### 4. `./fix-production.sh` - Correção Específica Produção
```bash
./fix-production.sh
```
**Quando usar:** Arquivos 404, JavaScript não carregando, layout quebrado

**O que faz:**
- Cria arquivos JavaScript ausentes
- Verifica/recompila CSS
- Configura .htaccess
- Corrige permissões

### 5. `./test-urls.sh` - Teste de URLs
```bash
./test-urls.sh
```
**Quando usar:** Verificar se arquivos estão acessíveis via HTTP

**O que faz:**
- Testa todos os arquivos críticos
- Verifica Content-Type headers
- Identifica arquivos 404

## 🔧 Fluxo Recomendado

### ✅ Deploy Normal
```bash
# Em produção
git pull
./deploy.sh
```

### ⚠️ Layout Quebrado
```bash
# 1. Diagnóstico primeiro
./debug-deploy.sh

# 2. Se problema identificado, correção forçada
./fix-deploy.sh

# 3. Verificar resultado
./debug-deploy.sh
```

### 🚨 Arquivos 404 (JavaScript/CSS não carregando)
```bash
# 1. Testar URLs primeiro
./test-urls.sh

# 2. Correção específica para produção
./fix-production.sh

# 3. Testar novamente
./test-urls.sh

# 4. Testar em modo anônimo do navegador
```

## 🎯 Principais Problemas e Soluções

### Layout Quebrado (CSS não carrega)
**Causa:** build-css.js desatualizado, CSS não compilado corretamente

**Solução:**
```bash
./fix-deploy.sh
```

### CSS com 10KB ao invés de 43KB
**Causa:** build-css.js referenciando `output.css` ao invés de `styles.css`

**Diagnóstico:**
```bash
./debug-deploy.sh
```

**Solução:**
```bash
git reset --hard origin/master
npm run build-css
```

### Dependências desatualizadas
**Causa:** node_modules não sincronizado

**Solução:**
```bash
rm -rf node_modules package-lock.json
npm install
npm run build-css
```

## 📋 Checklist Pré-Deploy

- [ ] Código commitado no Git
- [ ] Build testado localmente  
- [ ] Node.js e NPM instalados no servidor
- [ ] Permissões de escrita na pasta do projeto

## 🛠️ Arquivos Críticos

| Arquivo | Função | Como Verificar |
|---------|---------|----------------|
| `build-css.js` | Compila CSS | `grep "styles.css" build-css.js` |
| `package.json` | Dependências | `grep "tailwindcss" package.json` |
| `assets/css/styles.css` | CSS final | `ls -la assets/css/styles.css` |
| `tailwind.config.js` | Config Tailwind | `ls tailwind.config.js` |

## 🔍 Debug Avançado

### Verificar tamanho CSS correto
```bash
stat -c%s assets/css/styles.css
# Esperado: ~45000 bytes (43KB)
```

### Verificar referências CSS
```bash
grep -r "output.css" *.php
# Não deve retornar nada
```

### Verificar compilação manual
```bash
npm run build-css --verbose
```

## 🚨 Quando Tudo Falha

1. **Reset completo:**
```bash
./fix-deploy.sh
```

2. **Se ainda não funcionar:**
```bash
# Backup atual
cp -r . ../backup-$(date +%Y%m%d)

# Clone novo
git clone https://github.com/agathasweb/site_agweb.git new_deploy
cd new_deploy
npm install
npm run build-css
```

3. **Contatar suporte técnico:**
- Enviar output do `./debug-deploy.sh`
- Informar qual script foi executado
- Compartilhar logs de erro

## ✅ Sinais de Deploy Correto

- ✅ CSS com ~43KB
- ✅ Layout visualmente correto
- ✅ Todas as páginas carregando
- ✅ Menu mobile funcionando
- ✅ Sem erros no console do navegador

---

**💡 Dica:** Sempre execute `./debug-deploy.sh` primeiro para identificar problemas antes de tentar corrigir!