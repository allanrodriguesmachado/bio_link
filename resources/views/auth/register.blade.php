<x-layout>
    <div class="min-h-screen flex items-center justify-center p-4 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950">

        <div class="w-full max-w-5xl mx-auto grid lg:grid-cols-2 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl overflow-hidden">

            <div class="p-8 md:p-12">
                <div class="mb-8">
                    <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-500">
                        BioLinkPro
                    </a>
                    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mt-4">Crie sua conta</h1>
                    <p class="text-slate-600 dark:text-slate-400 mt-1">É rápido e fácil começar a organizar seus links.</p>
                </div>

                <form action="{{ route('save') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">Nome Completo</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </span>
                            <input type="text" name="name" id="name"
                                   class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                                   placeholder="Seu nome completo" required />
                        </div>
                    </div>

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

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">Senha</label>
                        <div class="relative">
                           <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </span>
                            <input type="password" name="password" id="password"
                                   class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                                   placeholder="Crie sua senha" required />
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">Confirme a Senha</label>
                        <div class="relative">
                           <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
                                   placeholder="Confirme sua senha" required />
                        </div>
                        {{-- <p class="text-sm text-red-600 mt-1">As senhas não coincidem.</p> --}}
                    </div>

                    <div class="hidden text-red-700 dark:text-red-400 text-sm bg-red-100 dark:bg-red-900/20 p-3 rounded-lg border border-red-200 dark:border-red-500/30">
                    </div>

                    <button type="submit"
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 shadow-lg transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Criar Conta
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-slate-600 dark:text-slate-400">
                    Já tem uma conta?
                    <a href="{{ route('login') }}" class="text-emerald-600 hover:text-emerald-500 font-semibold underline">
                        Faça login
                    </a>
                </p>
            </div>

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
