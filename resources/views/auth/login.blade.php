<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-blue-600 dark:bg-blue-800 px-4">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">

            <!-- Título -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Gerenciador Bio Link</h2>
                <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">Acesse seu painel e organize seus links</p>
            </div>

            <!-- Formulário -->
            <form action="{{ route('auth') }}" method="POST" class="space-y-5">
                @csrf

                <!-- E-mail -->
                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">E-mail</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm focus:ring-green-500 focus:border-green-500"
                           placeholder="Digite seu e-mail" required />
                </div>

                <!-- Senha -->
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Senha</label>
                    <input type="password" name="password" id="password"
                           class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm focus:ring-green-500 focus:border-green-500"
                           placeholder="Digite sua senha" required />
                </div>

                <!-- Alerta -->
                @if (session('message'))
                    <div class="text-red-600 text-sm bg-red-100 dark:bg-red-900 dark:text-red-400 p-3 rounded">
                        {{ session('message') }}
                    </div>
                @endif

                <!-- Botão -->
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition shadow-md">
                    Entrar
                </button>
            </form>

            <!-- Rodapé -->
            <p class="mt-6 text-center text-sm text-gray-700 dark:text-gray-300">
                Ainda não tem conta?
                <a href="#" class="text-green-600 hover:text-green-700 font-semibold underline">Criar conta</a>
            </p>
        </div>
    </div>
</x-layout>
