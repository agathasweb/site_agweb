<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agatha's Web - Comunicação Inteligente para Empresas</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
    
    <!-- Preload recursos críticos -->
    <link rel="preload" href="assets/css/styles.css?v=1757309623" as="style">
    <link rel="preload" href="assets/logo_white.png" as="image">
    <link rel="preload" href="assets/js/menu.js" as="script">
    
    <link rel="stylesheet" href="assets/css/styles.css?v=1757309623">
    <style>
        /* Animações personalizadas */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        @keyframes pulse-blue {
            0%, 100% { box-shadow: 0 0 0 0 rgba(147, 51, 234, 0.7); }
            50% { box-shadow: 0 0 0 10px rgba(147, 51, 234, 0); }
        }
        
        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes rotateY {
            from { transform: rotateY(0deg); }
            to { transform: rotateY(360deg); }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-pulse-blue {
            animation: pulse-blue 2s infinite;
        }
        
        .animate-slide-up {
            animation: slideInUp 0.8s ease-out;
        }
        
        .animate-rotate-y {
            animation: rotateY 10s linear infinite;
        }
        
        /* Cubo 3D */
        .cube-container {
            perspective: 1000px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .cube {
            position: relative;
            width: 120px;
            height: 120px;
            transform-style: preserve-3d;
            animation: rotateY 8s linear infinite;
        }
        
        .cube-face {
            position: absolute;
            width: 120px;
            height: 120px;
            border: 2px solid rgb(147, 51, 234);
            background: rgba(147, 51, 234, 0.1);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: rgb(147, 51, 234);
            font-weight: bold;
        }
        
        .cube-face.front  { transform: rotateY(0deg) translateZ(60px); }
        .cube-face.back   { transform: rotateY(180deg) translateZ(60px); }
        .cube-face.right  { transform: rotateY(90deg) translateZ(60px); }
        .cube-face.left   { transform: rotateY(-90deg) translateZ(60px); }
        .cube-face.top    { transform: rotateX(90deg) translateZ(60px); }
        .cube-face.bottom { transform: rotateX(-90deg) translateZ(60px); }
        
        /* Efeitos de hover melhorados */
        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(147, 51, 234, 0.25);
        }
        
        .btn-primary {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        /* Efeito Typewriter */
        .typewriter-cursor {
            animation: blink 1s infinite;
            color: rgb(147, 51, 234);
        }
        
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
        
        .typewriter-text {
            min-height: 1.2em;
            line-height: 1.2;
            vertical-align: baseline;
        }
        
        h1 {
            line-height: 1.2 !important;
        }
        
        /* Tamanho do h1 responsivo */
        .mobile-h1-size {
            font-size: 1.3em;
        }
        
        @media (min-width: 640px) {
            .mobile-h1-size {
                font-size: 3em;
            }
        }
    </style>
</head>
<body class="bg-voyia-dark text-white antialiased">
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-black">
        <div class="relative mx-auto max-w-7xl px-6 pt-4 pb-24 sm:py-32 lg:px-8 lg:py-40">
            <!-- Layout Mobile: Vídeo em cima, texto embaixo | Desktop: Texto esquerda, vídeo direita -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-12">
                <!-- Vídeo Cubo 3D Voyia Flutuante -->
                <div class="relative mb-0 lg:mb-0 animate-slide-up z-10 order-first lg:order-last flex-shrink-0">
                    <div class="relative w-full max-w-lg mx-auto lg:mx-0 z-10 bg-black rounded-3xl p-8">
                        <video 
                            autoplay 
                            loop 
                            muted 
                            playsinline
                            class="w-full h-auto animate-float relative z-10"
                            style="position: relative; z-index: 10;"
                        >
                            <source src="assets/cube.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                </div>
                
                <!-- Conteúdo de Texto -->
                <div class="text-center lg:text-left flex-1 relative z-[9999]">
                    <h1 class="font-bold tracking-tight text-white animate-slide-up mobile-h1-size">
                        Soluções Inteligentes
                        <br>
                        <span class="text-white">para </span><span class="text-voyia-blue typewriter-text" id="typewriter"></span><span class="typewriter-cursor">|</span>
                    </h1>
                    <p class="mx-auto lg:mx-0 mt-6 max-w-3xl text-lg text-gray-300 sm:text-xl animate-slide-up">
                        Há mais de 15 anos desenvolvendo soluções tecnológicas<br>inteligentes para o mercado digital.
                    </p>
                    <div class="mt-10 flex items-center justify-center lg:justify-start animate-slide-up">
                        <button class="btn-primary bg-voyia-blue hover:bg-purple-600 text-white px-8 py-4 rounded-lg font-semibold text-lg animate-pulse-blue">
                            Saiba mais
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 sm:py-32 bg-[#0A0A0A]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Experiência do desenvolvedor em primeiro lugar
                </h2>
                <p class="mt-6 text-lg text-gray-300">
                    Construído por desenvolvedores, para desenvolvedores. APIs simples, documentação clara e ferramentas poderosas.
                </p>
            </div>
            <div class="mt-20 grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="feature-card bg-voyia-gray rounded-2xl p-8">
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-voyia-blue rounded-lg flex items-center justify-center animate-float">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">API Unificada</h3>
                    <p class="text-gray-300">Uma única API para WhatsApp Business, Email, SMS e notificações push. Simplifique sua integração.</p>
                </div>
                <div class="feature-card bg-voyia-gray rounded-2xl p-8">
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-voyia-blue rounded-lg flex items-center justify-center animate-float" style="animation-delay: 0.5s;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Entrega Garantida</h3>
                    <p class="text-gray-300">Taxa de entrega de 99.9% com retry automático, fallback inteligente e monitoramento em tempo real.</p>
                </div>
                <div class="feature-card bg-voyia-gray rounded-2xl p-8">
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-voyia-blue rounded-lg flex items-center justify-center animate-float" style="animation-delay: 1s;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Modo de Teste</h3>
                    <p class="text-gray-300">Ambiente sandbox completo para testar suas integrações sem custos ou envio real de mensagens.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="py-24 sm:py-32 bg-black">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Templates inteligentes
                </h2>
                <p class="mt-6 text-lg text-gray-300">
                    Crie mensagens bonitas com nosso editor visual ou use templates prontos para WhatsApp Business e Email.
                </p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-2">
                <div class="bg-voyia-gray rounded-2xl p-8">
                    <h3 class="text-xl font-semibold text-white mb-6">WhatsApp Business Templates</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-700 rounded-lg p-4">
                            <div class="text-sm text-gray-300 mb-2">Confirmação de Pedido</div>
                            <div class="text-white">✅ Seu pedido #12345 foi confirmado!</div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4">
                            <div class="text-sm text-gray-300 mb-2">Lembrete de Pagamento</div>
                            <div class="text-white">💳 Fatura vencendo em 3 dias</div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-2xl p-8">
                    <h3 class="text-xl font-semibold text-white mb-6">Email Templates</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-700 rounded-lg p-4">
                            <div class="text-sm text-gray-300 mb-2">Boas-vindas</div>
                            <div class="text-white">🎉 Bem-vindo à plataforma!</div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-4">
                            <div class="text-sm text-gray-300 mb-2">Reset de Senha</div>
                            <div class="text-white">🔐 Redefinir sua senha</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 sm:py-32 bg-[#0A0A0A]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Confiado por empresas inovadoras
                </h2>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="bg-voyia-gray rounded-2xl p-8">
                    <blockquote class="text-gray-300">
                        "Voyia transformou nossa comunicação com clientes. Implementamos WhatsApp Business em 15 minutos."
                    </blockquote>
                    <div class="mt-6 flex items-center">
                        <div class="w-10 h-10 bg-voyia-blue rounded-full flex items-center justify-center text-white font-semibold">
                            M
                        </div>
                        <div class="ml-4">
                            <div class="text-white font-medium">Maria Silva</div>
                            <div class="text-gray-400">CTO, TechStart</div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-2xl p-8">
                    <blockquote class="text-gray-300">
                        "A API mais simples que já usei. Nossa equipe economiza horas todo dia."
                    </blockquote>
                    <div class="mt-6 flex items-center">
                        <div class="w-10 h-10 bg-voyia-blue rounded-full flex items-center justify-center text-white font-semibold">
                            J
                        </div>
                        <div class="ml-4">
                            <div class="text-white font-medium">João Santos</div>
                            <div class="text-gray-400">Lead Developer, InnovaApp</div>
                        </div>
                    </div>
                </div>
                <div class="bg-voyia-gray rounded-2xl p-8">
                    <blockquote class="text-gray-300">
                        "Entrega garantida e suporte excepcional. Recomendo para qualquer empresa."
                    </blockquote>
                    <div class="mt-6 flex items-center">
                        <div class="w-10 h-10 bg-voyia-blue rounded-full flex items-center justify-center text-white font-semibold">
                            A
                        </div>
                        <div class="ml-4">
                            <div class="text-white font-medium">Ana Costa</div>
                            <div class="text-gray-400">Founder, DigitalFlow</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 sm:py-32 bg-black">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Comece a enviar hoje mesmo
                </h2>
                <p class="mt-6 text-lg text-gray-300">
                    Teste gratuitamente por 30 dias. Sem cartão de crédito. Sem compromisso.
                </p>
                <div class="mt-10 flex items-center justify-center gap-6">
                    <button class="btn-primary bg-voyia-blue hover:bg-purple-600 text-white px-8 py-4 rounded-lg font-semibold text-lg animate-pulse-blue">
                        Começar Teste Grátis
                    </button>
                    <button class="border border-gray-600 hover:border-gray-500 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:bg-gray-800">
                        Falar com Vendas
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
    <!-- Script do Typewriter -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const words = [
                'Desenvolvimento Web',
                'Tráfego Pago', 
                'Whatsapp Cloud API',
                'Plataforma Moodle'
            ];
            
            const typewriterElement = document.getElementById('typewriter');
            let currentWordIndex = 0;
            let currentCharIndex = 0;
            let isDeleting = false;
            
            function typeWriter() {
                const currentWord = words[currentWordIndex];
                
                if (isDeleting) {
                    // Apagando
                    typewriterElement.textContent = currentWord.substring(0, currentCharIndex - 1);
                    currentCharIndex--;
                    
                    if (currentCharIndex === 0) {
                        isDeleting = false;
                        currentWordIndex = (currentWordIndex + 1) % words.length;
                        setTimeout(typeWriter, 500); // Pausa antes de começar a próxima palavra
                        return;
                    }
                } else {
                    // Digitando
                    typewriterElement.textContent = currentWord.substring(0, currentCharIndex + 1);
                    currentCharIndex++;
                    
                    if (currentCharIndex === currentWord.length) {
                        isDeleting = true;
                        setTimeout(typeWriter, 2000); // Pausa com palavra completa
                        return;
                    }
                }
                
                // Velocidade de digitação/apagamento
                const speed = isDeleting ? 50 : 100;
                setTimeout(typeWriter, speed);
            }
            
            // Inicia o efeito
            typeWriter();
        });
    </script>
    
    <!-- Scripts otimizados para performance -->
    <script src="assets/js/lazy-loading.js" defer></script>
</body>
</html>