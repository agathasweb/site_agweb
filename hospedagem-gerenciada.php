<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedagem Gerenciada - Agatha's Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'voyia-purple': '#8B5CF6',
                        'voyia-blue': '#3B82F6',
                        'voyia-gray': '#1F2937',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <?php include 'components/header.php'; ?>
    
    <main class="pt-20">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-voyia-purple to-voyia-blue bg-clip-text text-transparent">
                    Hospedagem Gerenciada
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Hospedagem premium com gestão completa. Focamos na infraestrutura para você focar no seu negócio.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white">Totalmente Gerenciada</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Sem Preocupações</h3>
                                <p class="text-gray-300">Cuidamos de tudo: atualizações, backups, segurança e performance</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Performance Premium</h3>
                                <p class="text-gray-300">Servidores de alta performance com SSD NVMe e CDN global</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Suporte Proativo</h3>
                                <p class="text-gray-300">Monitoramento 24/7 com intervenção automática</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-purple">O que Gerenciamos</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Atualizações de segurança automáticas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Backup diário automatizado
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Otimização de performance
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Monitoramento de uptime
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Proteção contra malware
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Configuração de servidor
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">WordPress</h3>
                    <p class="text-gray-300">Hospedagem otimizada para WordPress com cache avançado</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-blue to-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Laravel & PHP</h3>
                    <p class="text-gray-300">Ambiente otimizado para aplicações PHP modernas</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Node.js & React</h3>
                    <p class="text-gray-300">Suporte completo para aplicações JavaScript modernas</p>
                </div>
            </div>

            <div class="bg-voyia-gray rounded-lg p-8 mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">Recursos Premium Inclusos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-2">SSL Premium</h3>
                        <p class="text-gray-300 text-sm">Certificados EV e wildcard inclusos</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-2">CDN Global</h3>
                        <p class="text-gray-300 text-sm">Entrega ultra-rápida em todo mundo</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-2">Backup Automático</h3>
                        <p class="text-gray-300 text-sm">Múltiplas cópias e restauração rápida</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-2">Suporte 24/7</h3>
                        <p class="text-gray-300 text-sm">Especialistas sempre disponíveis</p>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">Planos Disponíveis</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-voyia-gray rounded-lg p-8 border-2 border-voyia-blue">
                        <h3 class="text-2xl font-bold mb-4 text-white">Business</h3>
                        <div class="text-4xl font-bold text-voyia-blue mb-2">R$ 159</div>
                        <p class="text-gray-300 mb-6">/mês por site</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Até 100.000 visitantes/mês
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                50GB de armazenamento SSD
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                CDN global incluído
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Backup diário automatizado
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                SSL premium gratuito
                            </li>
                        </ul>
                        <button class="w-full bg-voyia-blue hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Escolher Business
                        </button>
                    </div>

                    <div class="bg-voyia-gray rounded-lg p-8 border-2 border-voyia-purple">
                        <h3 class="text-2xl font-bold mb-4 text-white">Enterprise</h3>
                        <div class="text-4xl font-bold text-voyia-purple mb-2">R$ 289</div>
                        <p class="text-gray-300 mb-6">/mês por site</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Visitantes ilimitados
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                200GB de armazenamento SSD
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Servidor dedicado
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Suporte dedicado 24/7
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Consultoria personalizada
                            </li>
                        </ul>
                        <button class="w-full bg-voyia-purple hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Escolher Enterprise
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-lg p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Migração Gratuita Inclusa</h2>
                <p class="text-lg mb-6">
                    Nossa equipe cuida de toda a migração do seu site. Sem downtime, sem complicações.
                </p>
                <a href="contato.php" class="inline-block bg-white text-voyia-purple font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                    Solicitar Migração
                </a>
            </div>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>