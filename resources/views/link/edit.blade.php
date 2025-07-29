<x-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-indigo-50 to-blue-50 dark:from-slate-900 dark:to-slate-950 p-4">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-xl shadow-2xl dark:bg-gray-800">

            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                    Atualizar seus Dados
                </h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Mantenha suas informações sempre em dia.
                </p>
            </div>

            <form class="space-y-6" action="{{route('update',$link->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu Nome</label>
                        <input value="{{old('link', $link->name)}}" type="text" name="name" id="name" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Seu nome completo"  />
                    </div>

                    <div>
                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua URL</label>
                        <input value="{{old('link', $link->url)}}" type="url" name="url" id="url" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://seusite.com"  />
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full px-5 py-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-150 ease-in-out">
                        Salvar Alterações
                    </button>
                </div>

                <!-- Link para Cancelar/Voltar -->
                <p class="text-sm font-light text-center text-gray-500 dark:text-gray-400">
                    <a href="/dashboard" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Cancelar e voltar</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>
