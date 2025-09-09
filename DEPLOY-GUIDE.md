# 🚀 Deploy Agatha's Web - Guia Simples

## Como usar

### 💻 Desenvolvimento Local
1. Trabalhe normalmente no seu código
2. Faça commits e push para o Git:
```bash
git add .
git commit -m "Suas alterações"
git push origin master
```

### 🌐 Deploy em Produção (VPS)
1. Acesse seu VPS
2. Vá para a pasta do projeto
3. Execute o deploy:
```bash
./deploy.sh
```

**É só isso!** O script vai:
- ✅ Sincronizar com o Git (suas últimas alterações)
- ✅ Instalar/atualizar dependências (npm install)
- ✅ Compilar CSS (npm run build-css)
- ✅ Verificar integridade dos arquivos
- ✅ Configurar permissões
- ✅ Mostrar estatísticas

## 📋 O que o script faz exatamente:

1. **Backup**: Preserva seu .env local
2. **Git Sync**: `git fetch` + `git reset --hard origin/master` + `git pull`
3. **Dependencies**: `npm install`
4. **Build**: `npm run build-css`
5. **Verify**: Checa se CSS tem ~43KB e arquivos existem
6. **Permissions**: Configura permissões corretas
7. **Report**: Mostra estatísticas finais

## ✅ Sinais de Deploy Bem-sucedido

```bash
🎉 DEPLOY CONCLUÍDO COM SUCESSO!

📊 Estatísticas:
   • CSS: 43KB
   • Arquivos PHP: 15
   • Branch: master
   • Último commit: abc1234 - Suas alterações (2 minutes ago)

✅ Site sincronizado e atualizado!
🌐 Acesse: https://www.agathas.com.br
```

## ⚠️ Se algo der errado:

O script para e mostra o erro. Mensagens típicas:

- **"Node.js não encontrado"**: Instale Node.js no VPS primeiro
- **"CSS muito pequeno"**: Problema na compilação, verifique se build-css.js está correto
- **"Arquivo não encontrado"**: Arquivo crítico ausente no Git

## 🎯 Vantagens deste sistema:

- ✅ **Simples**: Apenas `./deploy.sh`
- ✅ **Seguro**: Backup automático do .env
- ✅ **Rápido**: Sincronização direta com Git
- ✅ **Confiável**: Verificações de integridade
- ✅ **Transparente**: Logs claros do que está acontecendo
- ✅ **À prova de erros**: Para na primeira falha

---

**Workflow diário:**
1. 💻 Código local → Git push
2. 🌐 VPS → `./deploy.sh`
3. ✅ Site atualizado!

**Nunca mais layout quebrado ou perda de tempo com deploy! 🎉**