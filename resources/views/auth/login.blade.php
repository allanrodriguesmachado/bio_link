<x-layout>
     <div class="min-h-screen flex items-center justify-center p-4">

        <div class="w-full max-w-5xl mx-auto grid lg:grid-cols-2 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl overflow-hidden">

            <!-- Coluna da Esquerda: Formulário de Login -->
            <div class="p-8 md:p-12">
                <!-- Logo e Título -->
                <div class="mb-8">
                    <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-500">
                        BioLinkPro
                    </a>
                    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mt-4">Acesse seu painel</h1>
                    <p class="text-slate-600 dark:text-slate-400 mt-1">Organize seus links e impulsione sua presença online.</p>
                </div>

                <!-- Formulário -->
                <!-- Aponte a action para a rota de autenticação: {{ route('auth') }} -->
                <form action="#" method="POST" class="space-y-6">
                    @csrf <!-- Token CSRF do Laravel -->

                    <!-- Campo de E-mail -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">E-mail</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                            </span>
                            <input type="email" name="email" id="email"
                                   class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                                   placeholder="seu.email@exemplo.com" required />
                        </div>
                    </div>

                    <!-- Campo de Senha -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">Senha</label>
                        <div class="relative">
                           <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </span>
                            <input type="password" name="password" id="password"
                                   class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                                   placeholder="Digite sua senha" required />
                        </div>
                         <a href="#" class="text-sm text-indigo-600 hover:underline mt-2 block text-right">Esqueceu a senha?</a>
                    </div>

                    <!-- Alerta de Erro (se houver) -->
                    <!-- Use a diretiva @if do Blade: @if (session('message')) -->
                    <div class="hidden text-red-700 dark:text-red-400 text-sm bg-red-100 dark:bg-red-900/20 p-3 rounded-lg border border-red-200 dark:border-red-500/30">
                        <!-- Mensagem de erro aqui: {{ session('message') }} -->
                        As credenciais fornecidas estão incorretas.
                    </div>
                    <!-- Fim do @if -->

                    <!-- Botão de Login -->
                    <button type="submit"
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 shadow-lg transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Entrar
                    </button>
                </form>

                <!-- Rodapé do Formulário -->
                <p class="mt-8 text-center text-sm text-slate-600 dark:text-slate-400">
                    Ainda não tem uma conta?
                    <!-- Substitua '#' pelo link de registro -->
                    <a href="#" class="text-emerald-600 hover:text-emerald-500 font-semibold underline">
                        Crie uma agora
                    </a>
                </p>
            </div>

            <!-- Coluna da Direita: Imagem/Branding (oculta em telas pequenas) -->
            <div class="hidden lg:block relative">
                <div class="absolute inset-0 bg-indigo-700">
                    <img src="https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                         class="w-full h-full object-cover opacity-20"
                         alt="Fundo abstrato com gradientes"
                         onerror="this.style.display='none'">
                </div>
                <div class="relative h-full flex flex-col justify-center items-center p-12 text-white">
                     <h2 class="text-3xl font-bold text-center">Transforme sua bio em uma central de conteúdo.</h2>
                     <p class="mt-4 text-indigo-200 text-center max-w-sm">Junte-se a milhares de criadores que já estão otimizando seus links.</p>
                </div>
            </div>

        </div>
    </div>
</x-layout>
