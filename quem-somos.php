<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Agatha's Web</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <?php include 'components/header.php'; ?>
    
    <main class="pt-20">
        <!-- Seção 1: Título e história - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 text-voyia-blue">
                    Quem Somos
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Há mais de 15 anos desenvolvendo soluções tecnológicas inovadoras e inteligentes para empresas de todos os tamanhos.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white">Nossa História</h2>
                    <p class="text-gray-300 mb-4">
                        A Agatha's Web nasceu em 2009 com o objetivo de democratizar o acesso à tecnologia, 
                        oferecendo soluções acessíveis e de alta qualidade para empresas que buscam crescer no ambiente digital.
                    </p>
                    <p class="text-gray-300 mb-4">
                        Ao longo dos anos, evoluímos constantemente, sempre mantendo nosso compromisso com a 
                        inovação e a excelência no atendimento ao cliente.
                    </p>
                </div>
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4 text-voyia-blue">Nossos Valores</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Inovação constante
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Qualidade em primeiro lugar
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Atendimento personalizado
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-voyia-blue rounded-full mr-3"></span>
                            Transparência total
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Seção 2: Equipe - fundo #0A0A0A -->
        <section class="bg-[#0A0A0A]">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-8 text-white">Nossa Equipe</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-voyia-gray rounded-lg p-6 text-center">
                        <div class="w-20 h-20 bg-voyia-blue rounded-full mx-auto mb-4"></div>
                        <h3 class="text-xl font-bold mb-2">Agatha Santos</h3>
                        <p class="text-voyia-blue font-semibold mb-2">Fundadora & CEO</p>
                        <p class="text-gray-300 text-sm">Especialista em gestão e inovação tecnológica.</p>
                    </div>
                    <div class="bg-voyia-gray rounded-lg p-6 text-center">
                        <div class="w-20 h-20 bg-voyia-blue rounded-full mx-auto mb-4"></div>
                        <h3 class="text-xl font-bold mb-2">João Silva</h3>
                        <p class="text-voyia-blue font-semibold mb-2">CTO</p>
                        <p class="text-gray-300 text-sm">Arquiteto de soluções e especialista em desenvolvimento.</p>
                    </div>
                    <div class="bg-voyia-gray rounded-lg p-6 text-center">
                        <div class="w-20 h-20 bg-voyia-blue rounded-full mx-auto mb-4"></div>
                        <h3 class="text-xl font-bold mb-2">Maria Oliveira</h3>
                        <p class="text-voyia-blue font-semibold mb-2">Diretora de Marketing</p>
                        <p class="text-gray-300 text-sm">Especialista em tráfego pago e estratégias digitais.</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Seção 3: CTA - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                <div class="bg-voyia-blue rounded-lg p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Vamos Trabalhar Juntos?</h2>
                <p class="text-lg mb-6">
                    Estamos prontos para transformar suas ideias em soluções tecnológicas de sucesso.
                </p>
                <a href="contato.php" class="inline-block bg-white text-voyia-blue font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                    Entre em Contato
                </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>