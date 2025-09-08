<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyia - Agatha's Web</title>
    <link rel="stylesheet" href="assets/css/styles.css?v=1757309623">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <?php include 'components/header.php'; ?>
    
    <main class="pt-20">
        <!-- Seção 1: Título - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-voyia-purple to-voyia-blue bg-clip-text text-transparent">
                    Voyia
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Plataforma inteligente de comunicação empresarial. Chatbots, automação e atendimento humanizado em uma única solução.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white">O Futuro da Comunicação</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">IA Avançada</h3>
                                <p class="text-gray-300">Chatbots inteligentes com processamento de linguagem natural</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Multicanal</h3>
                                <p class="text-gray-300">WhatsApp, Telegram, Facebook, site e aplicativo móvel</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Analytics Completo</h3>
                                <p class="text-gray-300">Relatórios detalhados e insights em tempo real</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-purple">Principais Funcionalidades</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">🤖 Chatbot Inteligente</h4>
                            <p class="text-sm text-gray-300">IA que aprende com suas conversas e melhora continuamente</p>
                        </div>
                        <div class="p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">💬 Chat Humano</h4>
                            <p class="text-sm text-gray-300">Transição suave entre bot e atendimento humano</p>
                        </div>
                        <div class="p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">📊 Dashboard Avançado</h4>
                            <p class="text-sm text-gray-300">Métricas e insights para otimizar seu atendimento</p>
                        </div>
                        <div class="p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">🔗 Integrações</h4>
                            <p class="text-sm text-gray-300">CRM, ERP e sistemas de pagamento integrados</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 2: Cards de vantagens - fundo #0A0A0A -->
        <section class="bg-[#0A0A0A]">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Atendimento 24/7</h3>
                    <p class="text-gray-300">Seus clientes sempre atendidos, mesmo fora do horário comercial</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-blue to-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Lead Generation</h3>
                    <p class="text-gray-300">Capture e qualifique leads automaticamente</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Automação de Vendas</h3>
                    <p class="text-gray-300">Fluxos automatizados para nutrir e converter prospects</p>
                </div>
                </div>
            </div>
        </section>

        <!-- Seção 3: Como funciona - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-voyia-gray rounded-lg p-8 mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">Como Funciona</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">1</div>
                        <h3 class="font-bold text-white mb-2">Configuração</h3>
                        <p class="text-gray-300 text-sm">Personalizamos o Voyia com sua identidade e fluxos de negócio</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">2</div>
                        <h3 class="font-bold text-white mb-2">Treinamento</h3>
                        <p class="text-gray-300 text-sm">A IA aprende sobre seus produtos e processos</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">3</div>
                        <h3 class="font-bold text-white mb-2">Integração</h3>
                        <p class="text-gray-300 text-sm">Conectamos com seus canais e sistemas existentes</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">4</div>
                        <h3 class="font-bold text-white mb-2">Operação</h3>
                        <p class="text-gray-300 text-sm">Começamos a atender e otimizar continuamente</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Seção 4: Planos - fundo #0A0A0A -->
        <section class="bg-[#0A0A0A]">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">Planos Voyia</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-voyia-gray rounded-lg p-8 text-center border-2 border-transparent hover:border-voyia-purple transition-colors">
                        <h3 class="text-2xl font-bold mb-4 text-white">Essencial</h3>
                        <div class="text-4xl font-bold text-voyia-purple mb-2">R$ 197</div>
                        <p class="text-gray-300 mb-6">/mês</p>
                        <ul class="text-left space-y-2 mb-8">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                1.000 conversas/mês
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                2 canais de comunicação
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Dashboard básico
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Suporte via e-mail
                            </li>
                        </ul>
                        <button class="w-full bg-voyia-purple hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Começar Agora
                        </button>
                    </div>

                    <div class="bg-voyia-gray rounded-lg p-8 text-center border-2 border-voyia-blue relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-voyia-blue text-white px-4 py-2 rounded-full text-sm font-bold">Recomendado</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">Professional</h3>
                        <div class="text-4xl font-bold text-voyia-blue mb-2">R$ 397</div>
                        <p class="text-gray-300 mb-6">/mês</p>
                        <ul class="text-left space-y-2 mb-8">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                5.000 conversas/mês
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Todos os canais
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Analytics avançado
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Integrações CRM
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-blue mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Suporte prioritário
                            </li>
                        </ul>
                        <button class="w-full bg-voyia-blue hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Escolher Professional
                        </button>
                    </div>

                    <div class="bg-voyia-gray rounded-lg p-8 text-center border-2 border-transparent hover:border-voyia-purple transition-colors">
                        <h3 class="text-2xl font-bold mb-4 text-white">Enterprise</h3>
                        <div class="text-4xl font-bold text-voyia-purple mb-2">Sob consulta</div>
                        <p class="text-gray-300 mb-6">personalizado</p>
                        <ul class="text-left space-y-2 mb-8">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Conversas ilimitadas
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                White-label
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                APIs customizadas
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Suporte dedicado 24/7
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-4 h-4 text-voyia-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                SLA personalizado
                            </li>
                        </ul>
                        <button class="w-full bg-voyia-purple hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Falar com Especialista
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Seção 5: CTA - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-lg p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Teste o Voyia Gratuitamente</h2>
                <p class="text-lg mb-6">
                    14 dias grátis para você experimentar o poder da nossa plataforma de comunicação inteligente.
                </p>
                <a href="contato.php" class="inline-block bg-white text-voyia-purple font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                    Começar Teste Grátis
                </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>