{{--@php use Illuminate\Support\Facades\Auth; @endphp--}}
{{--<x-layout>--}}
{{--    <div--}}
{{--        class="min-h-screen flex flex-col bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950">--}}
{{--        <x-header/>--}}


{{--        <div class="flex flex-1">--}}
{{--            <x-sidebar/>--}}
{{--            <main class="flex-1 p-6 overflow-y-auto">--}}
{{--                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">--}}
{{--                    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-4 sm:mb-0">Perfil</h1>--}}
{{--                </div>--}}


{{--                <div class="max-w-4xl max-w-4xl mx-auto bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 md:p-8">--}}
{{--                    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('put')--}}

{{--                        <div>--}}
{{--                            <input type="file" id="photo" name="photo">--}}
{{--                        </div>--}}

{{--                        <div class="space-y-4">--}}
{{--                            <div>--}}
{{--                                <label for="handler"--}}
{{--                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo</label>--}}
{{--                                <input type="text" name="handler" id="handler" value="{{ Auth::user()->handler }}"--}}
{{--                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                       placeholder="Seu nome completo"/>--}}
{{--                            </div>--}}

{{--                            <div>--}}
{{--                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>--}}
{{--                                <input type="text" value="{{ Auth::user()->name }}" name="name" id="name"--}}
{{--                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                       placeholder="Seu nome completo" />--}}
{{--                            </div>--}}

{{--                            <div>--}}
{{--                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descricao</label>--}}
{{--                                <input type="text" value="{{ Auth::user()->description }}" name="description" id=description"--}}
{{--                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                       placeholder="Seu nome completo" />--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mt-8 flex justify-end">--}}
{{--                            <button type="submit"--}}
{{--                                    class="inline-flex items-center justify-center px-6 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-slate-800 transition ease-in-out duration-150">--}}
{{--                                Salvar--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}

@php
    use Illuminate\Support\Facades\Auth;

    // Lógica para extrair as iniciais do nome do usuário
    $name = Auth::user()->name ?? 'User';
    $words = explode(' ', trim($name));
    $initials = '';
    if (count($words) > 0 && !empty($words[0])) {
        $initials .= mb_strtoupper(mb_substr($words[0], 0, 1));
    }
    if (count($words) > 1 && !empty(end($words))) {
        $initials .= mb_strtoupper(mb_substr(end($words), 0, 1));
    } else if (strlen($name) > 1) {
        $initials .= mb_strtoupper(mb_substr($name, 1, 1));
    }
@endphp
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

                <div class="max-w-4xl mx-auto bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 md:p-8">
                    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

                            {{-- Coluna da Foto de Perfil com Novo Visual --}}
                            <div class="md:col-span-1 flex flex-col items-center text-center space-y-4">
                                <label for="photo" class="block text-sm font-medium text-gray-800 dark:text-slate-300 cursor-pointer">Sua Foto</label>

                                <div class="relative group">
                                    {{-- Container para a foto e o placeholder --}}
                                    <div class="h-32 w-32 rounded-full relative">
                                        <div id="photo-placeholder"
                                             class="{{ Auth::user()->photo ? 'hidden' : 'flex' }} h-full w-full items-center justify-center rounded-full bg-indigo-100 dark:bg-slate-700 ring-2 ring-white dark:ring-slate-800 transition-colors duration-300">
                                            <span class="text-4xl font-bold text-indigo-500 dark:text-slate-400 select-none">{{ $initials }}</span>
                                        </div>

                                        <img id="photo-preview"
                                             class="{{ Auth::user()->photo ? 'block' : 'hidden' }} h-full w-full rounded-full object-cover shadow-md"
                                             src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : '#' }}"
                                             alt="Foto de Perfil">
                                    </div>

                                    <label for="photo" class="absolute inset-0 flex items-center justify-center rounded-full cursor-pointer
                                                              ring-4 ring-transparent group-hover:ring-indigo-300 dark:group-hover:ring-indigo-500/50
                                                              transition-all duration-300">
                                        <div class="w-10 h-10 flex items-center justify-center bg-slate-900/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.776 48.776 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                            </svg>
                                        </div>
                                    </label>
                                </div>

                                <label for="photo"
                                       class="cursor-pointer inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-200 uppercase tracking-widest shadow-sm hover:bg-gray-100 dark:hover:bg-slate-600 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path d="M9.25 13.25a.75.75 0 001.5 0V4.636l2.955 3.129a.75.75 0 001.09-1.03l-4.25-4.5a.75.75 0 00-1.09 0l-4.25 4.5a.75.75 0 101.09 1.03L9.25 4.636v8.614z" />
                                        <path d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z" />
                                    </svg>
                                    Alterar Foto
                                </label>

                                <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                            </div>

                            {{-- Coluna dos Campos de Texto --}}
                            <div class="md:col-span-2 space-y-6">
                                <div>
                                    <label for="handler"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargo</label>
                                    <input type="text" name="handler" id="handler" value="{{ old('handler', Auth::user()->handler) }}"
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Ex: Desenvolvedor, Designer..."/>
                                </div>

                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                    <input type="text" value="{{ old('name', Auth::user()->name) }}" name="name" id="name"
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Seu nome completo"/>
                                </div>

                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                                    <textarea name="description" id="description" rows="3"
                                              class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                              placeholder="Uma breve descrição sobre você">{{ old('description', Auth::user()->description) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200 dark:border-slate-700 flex justify-end">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-6 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-slate-800 transition ease-in-out duration-150">
                                Salvar Alterações
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script>
        const photoInput = document.getElementById('photo');
        const photoPreview = document.getElementById('photo-preview');
        const photoPlaceholder = document.getElementById('photo-placeholder');

        photoInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onloadend = function () {
                    photoPreview.src = reader.result;
                    photoPreview.classList.remove('hidden');
                    photoPlaceholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-layout>

