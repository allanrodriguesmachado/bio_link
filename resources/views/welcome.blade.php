<x-layout>
    <header class="bg-white dark:bg-gray-900 shadow-md">
    <nav class="container mx-auto px-4 lg:px-6 py-3">
        <div class="flex flex-wrap justify-between items-center">
            <!-- Logo and Site Name -->
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8 sm:h-10" alt="BioLink Logo" />
                <span class="self-center text-2xl font-extrabold whitespace-nowrap text-slate-900 dark:text-white">BioLink</span>
            </a>

            <!-- Mobile Menu Button (Hamburger Icon) -->
            <div class="flex items-center lg:hidden">
                <button id="mobile-menu-button" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation and Auth Buttons -->
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-primary-700 lg:bg-transparent lg:text-indigo-600 lg:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#features" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Funcionalidades</a>
                    </li>
                    <li>
                        <a href="#testimonials" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Depoimentos</a>
                    </li>
                    <li>
                        <a href="#cadastro" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Cadastro</a>
                    </li>
                </ul>
                <div class="lg:ml-8 mt-4 lg:mt-0">
                    <!-- Botão "Log in" com nova cor de fundo -->
                    <a href="{{route('login')}}" class=" text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-indigo-800">Acessar</a>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <!-- ===== Hero Section ===== -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-28 overflow-hidden">
            <div class="hero-glow"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div data-aos="fade-right">
                        <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-6">
                            Sua bio com <span class="text-indigo-600">estilo e resultados</span>
                        </h1>
                        <p class="text-lg text-slate-600 mb-8 max-w-lg">
                            Crie uma página de links impressionante em minutos. Centralize suas redes, destaque seus projetos e converta seguidores em clientes.
                        </p>
                        <!-- Substitua '#' pelo seu link de cadastro: #cadastro -->
                        <a href="{{route('register')}}" class="bg-indigo-600 text-white font-bold px-8 py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 shadow-lg hover:shadow-indigo-500/50 transform hover:-translate-y-1">
                            Começar agora (Grátis)
                        </a>
                    </div>
                    <!-- Illustration -->
                    <div class="flex justify-center items-center" data-aos="fade-left" data-aos-delay="200">
                        <!-- Custom SVG Illustration -->
                        <div class="relative w-full max-w-md">
                            <img src="https://placehold.co/600x500/E0E7FF/4F46E5?text=Sua+Bio+Incrivel&font=inter" alt="Ilustração de um celular com links de perfil" class="rounded-2xl shadow-2xl w-full">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Features Section ===== -->
        <section class="bg-white py-20 lg:py-24">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-slate-900">Funcionalidades Incríveis</h2>
                    <p class="text-slate-600 mt-3 text-lg">Tudo que você precisa para destacar sua bio e impressionar seu público.</p>
                </div>
                <!-- Features Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1: Link único -->
                    <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:border-indigo-300 hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg>
                        </div>
                        <h3 class="font-semibold text-2xl text-slate-900 mb-3">Link Único e Poderoso</h3>
                        <p class="text-slate-600">Centralize todos os seus links importantes em um único lugar. Simples para você, prático para seus seguidores.</p>
                    </div>
                    <!-- Feature 2: Customização -->
                    <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:border-indigo-300 hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                        </div>
                        <h3 class="font-semibold text-2xl text-slate-900 mb-3">Customização Total</h3>
                        <p class="text-slate-600">Ajuste cores, fontes, layout e adicione thumbnails. Deixe a página com a sua cara e a cara da sua marca.</p>
                    </div>
                    <!-- Feature 3: Analytics -->
                    <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:border-indigo-300 hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                        <div class="bg-indigo-100 text-indigo-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        </div>
                        <h3 class="font-semibold text-2xl text-slate-900 mb-3">Analytics em Tempo Real</h3>
                        <p class="text-slate-600">Acompanhe cliques, visualizações e entenda quais links performam melhor. Otimize sua estratégia com dados.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Testimonials Section ===== -->
        <section class="bg-slate-50 py-20 lg:py-24">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-slate-900 mb-16" data-aos="fade-up">O que nossos criadores estão dizendo</h2>
                <!-- Testimonials Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-slate-700 text-lg mb-6">“Aumentei os cliques nos meus links de afiliado em 200% em apenas um mês! A interface é super fácil de usar.”</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://i.pravatar.cc/150?u=maria" alt="Avatar de Maria Silva">
                            <div>
                                <p class="font-bold text-slate-900">Maria Silva</p>
                                <p class="text-sm text-indigo-600">Influenciadora Digital</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <p class="text-slate-700 text-lg mb-6">“Finalmente um lugar para organizar todos os meus contatos e portfólio. Ficou com uma aparência muito profissional.”</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://i.pravatar.cc/150?u=joao" alt="Avatar de João Pereira">
                            <div>
                                <p class="font-bold text-slate-900">João Pereira</p>
                                <p class="text-sm text-indigo-600">Fotógrafo</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <p class="text-slate-700 text-lg mb-6">“Os analytics são impecáveis. Consigo ver exatamente de onde meu público vem e o que eles mais gostam.”</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://i.pravatar.cc/150?u=ana" alt="Avatar de Ana Souza">
                            <div>
                                <p class="font-bold text-slate-900">Ana Souza</p>
                                <p class="text-sm text-indigo-600">Empreendedora</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Final CTA Section ===== -->
        <section id="cadastro" class="bg-indigo-700 text-white py-20 lg:py-24">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Pronto para turbinar sua bio?</h2>
                <p class="mb-10 text-indigo-200 text-lg max-w-2xl mx-auto">Comece hoje gratuitamente e transforme sua presença online. Sem cartão de crédito, sem complicação.</p>
                <!-- Substitua '#' pelo seu link de login: {{ route('login') }} -->
                <a href="{{route('register')}}" class="inline-block bg-white text-indigo-600 font-bold px-10 py-4 rounded-lg hover:bg-slate-100 transition-all duration-300 shadow-2xl transform hover:scale-105">
                    Criar Minha Conta Grátis
                </a>
            </div>
        </section>
    </main>
</x-layout>


    <footer class="bg-slate-900 text-slate-400">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm mb-4 md:mb-0">&copy; {{ date('Y') }} BioLinkPro. Todos os direitos reservados.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors">Instagram</a>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-white transition-colors">Contato</a>
                </div>
            </div>
        </div>
    </footer>

  <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Efeito de brilho sutil no fundo do hero */
        .hero-glow::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -20%;
            width: 140%;
            height: 140%;
            background-image: radial-gradient(circle, rgba(79, 70, 229, 0.15) 0%, rgba(79, 70, 229, 0) 50%);
            z-index: 0;
            animation: pulse-glow 10s infinite ease-in-out;
        }
        @keyframes pulse-glow {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
    </style>
