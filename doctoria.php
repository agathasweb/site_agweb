<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoctorIA - Agatha's Web</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <?php include 'components/header.php'; ?>
    
    <main class="pt-20">
        <!-- Seção 1: Título - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-voyia-purple to-voyia-blue bg-clip-text text-transparent">
                    DoctorIA
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Inteligência Artificial especializada em saúde. Diagnósticos auxiliares, análise de exames e suporte à decisão médica.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white">IA Médica Avançada</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Diagnóstico Assistido</h3>
                                <p class="text-gray-300">IA treinada com milhões de casos médicos reais</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Análise de Imagens</h3>
                                <p class="text-gray-300">Radiografias, tomografias e ressonâncias com precisão</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Conformidade LGPD</h3>
                                <p class="text-gray-300">Segurança máxima para dados sensíveis de saúde</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-purple">Especialidades Atendidas</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">🩺 Clínica Geral</h4>
                            <p class="text-xs text-gray-300">Triagem e diagnóstico</p>
                        </div>
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">🫀 Cardiologia</h4>
                            <p class="text-xs text-gray-300">ECG e ecocardiograma</p>
                        </div>
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">🧠 Neurologia</h4>
                            <p class="text-xs text-gray-300">TC e RM cerebrais</p>
                        </div>
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">🦴 Ortopedia</h4>
                            <p class="text-xs text-gray-300">Radiografias ósseas</p>
                        </div>
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">👁️ Oftalmologia</h4>
                            <p class="text-xs text-gray-300">Retinografias</p>
                        </div>
                        <div class="text-center p-3 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-1">🔬 Patologia</h4>
                            <p class="text-xs text-gray-300">Análise histológica</p>
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
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">95% de Precisão</h3>
                    <p class="text-gray-300">Diagnósticos com alta precisão validados clinicamente</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-blue to-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Segundos para Análise</h3>
                    <p class="text-gray-300">Resultados instantâneos para decisões rápidas</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Dados Protegidos</h3>
                    <p class="text-gray-300">Criptografia end-to-end e compliance total</p>
                </div>
            </div>
        </section>

        <!-- Seção 3: Como funciona - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-voyia-gray rounded-lg p-8 mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-center text-white">Como Funciona o DoctorIA</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">1</div>
                        <h3 class="font-bold text-white mb-2">Upload de Dados</h3>
                        <p class="text-gray-300 text-sm">Exames, imagens e histórico do paciente</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">2</div>
                        <h3 class="font-bold text-white mb-2">Processamento IA</h3>
                        <p class="text-gray-300 text-sm">Análise automática com algoritmos avançados</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">3</div>
                        <h3 class="font-bold text-white mb-2">Relatório Detalhado</h3>
                        <p class="text-gray-300 text-sm">Sugestões diagnósticas com evidências</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">4</div>
                        <h3 class="font-bold text-white mb-2">Decisão Médica</h3>
                        <p class="text-gray-300 text-sm">O médico analisa e toma a decisão final</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 4: Planos - fundo #0A0A0A -->
        <section class="bg-[#0A0A0A]">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-purple">Para Clínicas e Hospitais</h3>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-purple rounded-full mr-3"></span>
                            Redução de tempo de diagnóstico
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-purple rounded-full mr-3"></span>
                            Melhoria na precisão diagnóstica
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-purple rounded-full mr-3"></span>
                            Otimização do fluxo de trabalho
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-purple rounded-full mr-3"></span>
                            Integração com PACS e RIS
                        </li>
                    </ul>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-voyia-purple mb-2">R$ 2.497/mês</div>
                        <p class="text-gray-300 mb-4">Para até 1000 análises</p>
                        <button class="bg-voyia-purple hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Solicitar Demonstração
                        </button>
                    </div>
                </div>

                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-blue">Para Médicos Individuais</h3>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Segunda opinião instantânea
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Suporte educacional contínuo
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Acesso via web e mobile
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Histórico de casos pessoais
                        </li>
                    </ul>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-voyia-blue mb-2">R$ 397/mês</div>
                        <p class="text-gray-300 mb-4">Para até 200 análises</p>
                        <button class="bg-voyia-blue hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Começar Teste Grátis
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 5: Certificações - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-voyia-gray rounded-lg p-8 mb-16">
                    <h2 class="text-3xl font-bold mb-6 text-center text-white">Certificações e Validações</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div class="p-4">
                        <div class="w-16 h-16 bg-voyia-purple rounded-full mx-auto mb-3 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-1">ISO 27001</h3>
                        <p class="text-gray-300 text-sm">Segurança da informação</p>
                    </div>
                    <div class="p-4">
                        <div class="w-16 h-16 bg-voyia-blue rounded-full mx-auto mb-3 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-1">LGPD</h3>
                        <p class="text-gray-300 text-sm">Proteção de dados</p>
                    </div>
                    <div class="p-4">
                        <div class="w-16 h-16 bg-voyia-purple rounded-full mx-auto mb-3 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-1">CFM</h3>
                        <p class="text-gray-300 text-sm">Conselho Federal Medicina</p>
                    </div>
                    <div class="p-4">
                        <div class="w-16 h-16 bg-voyia-blue rounded-full mx-auto mb-3 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white mb-1">ANVISA</h3>
                        <p class="text-gray-300 text-sm">Dispositivos médicos</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 6: CTA - fundo #0A0A0A -->
        <section class="bg-[#0A0A0A]">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-lg p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Revolucione sua Prática Médica</h2>
                <p class="text-lg mb-6">
                    Experimente o poder da inteligência artificial aplicada à medicina. Teste grátis por 30 dias.
                </p>
                <a href="contato.php" class="inline-block bg-white text-voyia-purple font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                    Agendar Demonstração
                </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>