<x-layout>
    <!-- Hero -->
    <section class="bg-white text-gray-800">
        <div class="container mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Sua bio com estilo e resultados</h1>
                <p class="text-gray-600 text-lg mb-6">
                    Crie sua página com links, redes e destaques em minutos — com tons relaxantes de azul e verde.
                </p>
                <a href="#cadastro"
                   class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition-shadow shadow-md">
                    Começar agora
                </a>
            </div>
            <div class="flex justify-center" data-aos="fade-left">
                <img src="https://undraw.co/illustrations/landing_page_re_6xev.svg" alt="Ilustração azul‑verde" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Funcionalidades -->
    <section class="bg-blue-50 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800">Funcionalidades incríveis</h2>
                <p class="text-gray-700 mt-2">Tudo que você precisa para destacar sua bio.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ([
                  ['icon'=>'link','title'=>'Link único','desc'=>'Centralize todos os seus links'],
                  ['icon'=>'paint-brush','title'=>'Customização','desc'=>'Ajuste cor, fonte e layout'],
                  ['icon'=>'chart-line','title'=>'Analytics','desc'=>'Veja cliques em tempo real'],
                  ['icon'=>'mobile-alt','title'=>'Responsivo','desc'=>'Perfeito em qualquer tela'],
                  ['icon'=>'shield-alt','title'=>'Segurança','desc'=>'HTTPS, backup & privacidade'],
                  ['icon'=>'headset','title'=>'Suporte','desc'=>'Chat e e‑mail rápidos'],
                ] as $item)
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $loop->index*100 }}">
                        <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-blue-600">
                            <i class="fas fa-{{ $item['icon'] }} text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-800 mb-2">{{ $item['title'] }}</h3>
                        <p class="text-gray-600">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-up">O que estão dizendo</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach ([
                  ['text'=>'“Aumentei meus cliques em 200%!”','author'=>'Maria Silva'],
                  ['text'=>'“Fácil de usar e ficou ótimo.”','author'=>'João Pereira'],
                  ['text'=>'“Suporte e analytics impecáveis.”','author'=>'Ana Souza'],
                ] as $t)
                    <div class="bg-blue-50 p-6 rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="{{ $loop->index*100 }}">
                        <p class="text-gray-700 mb-4">{{ $t['text'] }}</p>
                        <p class="text-blue-600 font-semibold">— {{ $t['author'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA final -->
    <section id="cadastro" class="bg-green-600 text-white py-20">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Quer turbinar sua bio?</h2>
            <p class="mb-6 text-green-100 text-lg">Comece hoje gratuitamente e transforme sua presença online!</p>
            <a href="{{route('login')}}"
               class="inline-block bg-white text-green-600 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-shadow shadow-md">
                Criar Conta
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm">&copy; 2025 BioLinkPro. Todos os direitos reservados.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-white">Instagram</a>
                <a href="#" class="hover:text-white">LinkedIn</a>
                <a href="#" class="hover:text-white">Contato</a>
            </div>
        </div>
    </footer>

    <script>AOS.init()</script>
</x-layout>
