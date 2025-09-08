<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tráfego Pago - Agatha's Web</title>
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
                    Tráfego Pago
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Maximize seu ROI com campanhas de tráfego pago otimizadas. Google Ads, Facebook Ads, Instagram e LinkedIn.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white">Resultados que Importam</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">ROI Comprovado</h3>
                                <p class="text-gray-300">Retorno médio de 300% sobre investimento publicitário</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Gestão Profissional</h3>
                                <p class="text-gray-300">Especialistas certificados nas principais plataformas</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-purple rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Relatórios Transparentes</h3>
                                <p class="text-gray-300">Acompanhe todos os resultados em tempo real</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-voyia-purple">Plataformas que Dominamos</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">Google Ads</h4>
                            <p class="text-sm text-gray-300">Search, Display, Shopping</p>
                        </div>
                        <div class="text-center p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">Facebook Ads</h4>
                            <p class="text-sm text-gray-300">Feed, Stories, Reels</p>
                        </div>
                        <div class="text-center p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">Instagram Ads</h4>
                            <p class="text-sm text-gray-300">Posts, Stories, IGTV</p>
                        </div>
                        <div class="text-center p-4 bg-gray-800 rounded-lg">
                            <h4 class="font-bold text-white mb-2">LinkedIn Ads</h4>
                            <p class="text-sm text-gray-300">B2B, Lead Generation</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Estratégia Personalizada</h3>
                    <p class="text-gray-300">Cada campanha é única e adaptada ao seu negócio</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-blue to-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Otimização Contínua</h3>
                    <p class="text-gray-300">Monitoramos e ajustamos suas campanhas diariamente</p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Relatórios Mensais</h3>
                    <p class="text-gray-300">Análises completas com insights estratégicos</p>
                </div>
            </div>

            <div class="bg-voyia-gray rounded-lg p-8 mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">Nosso Processo</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">1</div>
                        <h3 class="font-bold text-white mb-2">Análise</h3>
                        <p class="text-gray-300 text-sm">Estudamos seu negócio e concorrência</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">2</div>
                        <h3 class="font-bold text-white mb-2">Estratégia</h3>
                        <p class="text-gray-300 text-sm">Desenvolvemos a estratégia personalizada</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-purple rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">3</div>
                        <h3 class="font-bold text-white mb-2">Execução</h3>
                        <p class="text-gray-300 text-sm">Criamos e lançamos as campanhas</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-voyia-blue rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">4</div>
                        <h3 class="font-bold text-white mb-2">Otimização</h3>
                        <p class="text-gray-300 text-sm">Monitoramos e melhoramos resultados</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-voyia-purple to-voyia-blue rounded-lg p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Vamos Acelerar seu Negócio?</h2>
                <p class="text-lg mb-6">
                    Entre em contato e descubra como podemos aumentar suas vendas com tráfego pago.
                </p>
                <a href="contato.php" class="inline-block bg-white text-voyia-purple font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                    Solicitar Análise Gratuita
                </a>
            </div>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>