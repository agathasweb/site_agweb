<?php
// Header Component - Reutilizável para todas as páginas
?>
<header class="relative z-[9999] bg-[#0A0A0A]">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img src="assets/logo_white.png" alt="Agatha's Web" class="h-8 lg:h-10 w-auto" loading="eager" width="auto" height="40" style="max-height: 2.5rem;">
                </div>
            </div>
            
            <!-- Menu Desktop -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-8">
                    <a href="/" class="text-gray-300 hover:text-white transition-colors font-bold">Página Inicial</a>
                    
                    <!-- Menu Blog com dropdown -->
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white transition-colors font-bold flex items-center gap-1">
                            Blog
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-voyia-gray rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-600">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Cases</a>
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Dicas</a>
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Novidades</a>
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Impacto Social</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Serviços com dropdown -->
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white transition-colors font-bold flex items-center gap-1">
                            Serviços
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-voyia-gray rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-600">
                            <div class="py-2">
                                <a href="moodle.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Moodle</a>
                                <a href="trafego-pago.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Tráfego Pago</a>
                                <a href="desenvolvimento.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Desenvolvimento</a>
                                <a href="consultoria.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Consultoria</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Menu Produtos com dropdown -->
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white transition-colors font-bold flex items-center gap-1">
                            Produtos
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-voyia-gray rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-600">
                            <div class="py-2">
                                <a href="hospedagem-moodle.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Hospedagem Moodle</a>
                                <a href="hospedagem-gerenciada.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Hospedagem Gerenciada</a>
                                <a href="voyia.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">Voyia</a>
                                <a href="doctoria.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors">DoctorIA</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="quem-somos.php" class="text-gray-300 hover:text-white transition-colors font-bold">Quem Somos</a>
                    <a href="contato.php" class="text-gray-300 hover:text-white transition-colors font-bold">Contato</a>
                </div>
            </div>
            
            <!-- Botão Hamburger Mobile -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-300 hover:text-white transition-colors p-2">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Menu Mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-voyia-gray rounded-lg mt-2 border border-gray-600 shadow-xl">
            <div class="px-4 py-2 space-y-1">
                <a href="/" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors">Página Inicial</a>
                
                <!-- Blog Mobile -->
                <div class="relative">
                    <button id="mobile-blog-button" class="w-full text-left text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors flex items-center justify-between">
                        Blog
                        <svg class="w-4 h-4 transition-transform" id="mobile-blog-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-blog-menu" class="hidden bg-gray-700 rounded mt-1 ml-4">
                        <a href="#" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Cases</a>
                        <a href="#" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Dicas</a>
                        <a href="#" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Novidades</a>
                        <a href="#" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Impacto Social</a>
                    </div>
                </div>
                
                <!-- Serviços Mobile -->
                <div class="relative">
                    <button id="mobile-services-button" class="w-full text-left text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors flex items-center justify-between">
                        Serviços
                        <svg class="w-4 h-4 transition-transform" id="mobile-services-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-services-menu" class="hidden bg-gray-700 rounded mt-1 ml-4">
                        <a href="moodle.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Moodle</a>
                        <a href="trafego-pago.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Tráfego Pago</a>
                        <a href="desenvolvimento.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Desenvolvimento</a>
                        <a href="consultoria.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Consultoria</a>
                    </div>
                </div>
                
                <!-- Produtos Mobile -->
                <div class="relative">
                    <button id="mobile-products-button" class="w-full text-left text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors flex items-center justify-between">
                        Produtos
                        <svg class="w-4 h-4 transition-transform" id="mobile-products-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-products-menu" class="hidden bg-gray-700 rounded mt-1 ml-4">
                        <a href="hospedagem-moodle.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Hospedagem Moodle</a>
                        <a href="hospedagem-gerenciada.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Hospedagem Gerenciada</a>
                        <a href="voyia.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">Voyia</a>
                        <a href="doctoria.php" class="block text-gray-300 hover:text-white hover:bg-gray-600 px-3 py-2 rounded transition-colors">DoctorIA</a>
                    </div>
                </div>
                
                <a href="quem-somos.php" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors">Quem Somos</a>
                <a href="contato.php" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded transition-colors">Contato</a>
            </div>
        </div>
    </nav>
    
    <!-- JavaScript otimizado para menu mobile -->
    <script src="assets/js/menu.js" defer></script>
</header>