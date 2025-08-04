@php use Illuminate\Support\Facades\Auth; @endphp
<x-layout>
    <div
        class="min-h-screen flex flex-col bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950">
        <x-header/>


        <div class="flex flex-1">
            <x-sidebar/>
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-4 sm:mb-0">Perfil</h1>
                </div>


                <div class="max-w-4xl max-w-4xl mx-auto bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 md:p-8">
                    <form action="{{route('profile.update')}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="space-y-4">
                            <div>
                                <label for="handler"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo</label>
                                <input type="text" name="handler" id="handler" value="{{ Auth::user()->handler }}"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Seu nome completo"/>
                            </div>


                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                <input type="text" value="{{ Auth::user()->name }}" name="name" id="name"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Seu nome completo" />
                            </div>


                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descricao</label>
                                <input type="text" value="{{ Auth::user()->description }}" name="description" id=description"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Seu nome completo" />
                            </div>

                        </div>

                        <div class="mt-8 flex justify-end">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-6 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-slate-800 transition ease-in-out duration-150">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</x-layout>
