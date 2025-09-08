<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Agatha's Web</title>
    <link rel="stylesheet" href="assets/css/styles.css?v=1757309623">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <?php include 'components/header.php'; ?>
    
    <main class="pt-20">
        <!-- Seção 1: Título e formulário - fundo #000 -->
        <section class="bg-black">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-voyia-blue to-voyia-blue bg-clip-text text-transparent">
                    Entre em Contato
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Estamos aqui para ajudar você a transformar suas ideias em realidade. Entre em contato conosco!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-8 text-white">Informações de Contato</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Endereço</h3>
                                <p class="text-gray-300">Rua das Inovações, 123<br>Centro, São Paulo - SP<br>01234-567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Telefone</h3>
                                <p class="text-gray-300">(11) 9999-8888<br>(11) 3333-4444</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">E-mail</h3>
                                <p class="text-gray-300">contato@agathasweb.com.br<br>suporte@agathasweb.com.br</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-voyia-blue rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Horário</h3>
                                <p class="text-gray-300">Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 12h</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-voyia-gray rounded-lg p-8">
                    <h2 class="text-3xl font-bold mb-6 text-white">Envie sua Mensagem</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-sm font-medium text-gray-300 mb-2">Nome</label>
                                <input type="text" id="nome" name="nome" class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-voyia-blue focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">E-mail</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-voyia-blue focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-300 mb-2">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-voyia-blue focus:border-transparent">
                        </div>
                        <div>
                            <label for="assunto" class="block text-sm font-medium text-gray-300 mb-2">Assunto</label>
                            <select id="assunto" name="assunto" class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-voyia-blue focus:border-transparent">
                                <option>Selecione um assunto</option>
                                <option>Serviços</option>
                                <option>Produtos</option>
                                <option>Suporte Técnico</option>
                                <option>Parceria</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensagem" class="block text-sm font-medium text-gray-300 mb-2">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="5" class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-voyia-blue focus:border-transparent" placeholder="Conte-nos mais sobre seu projeto..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-voyia-blue to-voyia-blue hover:from-purple-700 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300">
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>