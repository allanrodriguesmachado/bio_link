{{--<x-layout>--}}
{{--    <div--}}
{{--        class="min-h-screen flex flex-col bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950">--}}

{{--        <header class="w-full bg-white dark:bg-slate-800 shadow-sm py-4 px-6 flex items-center justify-between z-10">--}}
{{--            <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-500">--}}
{{--                BioLinkPro--}}
{{--            </a>--}}

{{--            <div class="flex items-center space-x-4">--}}
{{--                <button id="theme-toggle" type="button"--}}
{{--                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">--}}
{{--                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>--}}
{{--                    </svg>--}}
{{--                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path--}}
{{--                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"--}}
{{--                            fill-rule="evenodd" clip-rule="evenodd"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}

{{--                <div class="relative group">--}}
{{--                    <button--}}
{{--                        class="flex items-center text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-500 transition focus:outline-none">--}}
{{--                        <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                             stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                        </svg>--}}
{{--                        <span class="font-medium">{{ Auth::user()->name ?? 'Usuário' }}</span>--}}
{{--                        <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-200"--}}
{{--                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <div--}}
{{--                        class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-700 rounded-md shadow-lg py-1 z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform scale-95 group-hover:scale-100 origin-top-right">--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Meu--}}
{{--                            Perfil</a>--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Configurações</a>--}}
{{--                        <div class="border-t border-gray-200 dark:border-slate-600 my-1"></div>--}}
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}
{{--                            <button type="submit"--}}
{{--                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-slate-600">--}}
{{--                                Sair--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </header>--}}

{{--        <div class="flex flex-1">--}}
{{--            <aside--}}
{{--                class="w-64 bg-white dark:bg-slate-800 p-6 shadow-md border-r border-slate-200 dark:border-slate-700">--}}
{{--                <nav class="space-y-4">--}}
{{--                    <div>--}}
{{--                        <h3 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">--}}
{{--                            Principal</h3>--}}
{{--                        <ul class="space-y-2">--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                   class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition">--}}
{{--                                    <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                                         viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2 2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6-4h4"/>--}}
{{--                                    </svg>--}}
{{--                                    Meus BioLinks--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href=" "--}}
{{--                                   class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition">--}}
{{--                                    <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                                         viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.562.342 1.282.652 2.052.793v-.738z"/>--}}
{{--                                    </svg>--}}
{{--                                    Estatísticas--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <h3 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">--}}
{{--                            Conta</h3>--}}
{{--                        <ul class="space-y-2">--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                   class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition">--}}
{{--                                    <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                                         viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.562.342 1.282.652 2.052.793v-.738z"/>--}}
{{--                                    </svg>--}}
{{--                                    Configurações--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </nav>--}}
{{--            </aside>--}}

{{--            <main class="flex-1 p-6 overflow-y-auto">--}}
{{--                <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-6">Meus BioLinks</h1>--}}

{{--                <div class="flex justify-end gap-3">--}}
{{--                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"--}}
{{--                            class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"--}}
{{--                            type="button">--}}
{{--                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"--}}
{{--                                  clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}

{{--                        Novo Link--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div id="crud-modal" tabindex="-1" aria-hidden="true"--}}
{{--                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">--}}
{{--                    <div class="relative p-4 w-full max-w-md max-h-full">--}}
{{--                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">--}}
{{--                            <div--}}
{{--                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">--}}
{{--                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">--}}
{{--                                    Criar Novo Link--}}
{{--                                </h3>--}}
{{--                                <button type="button"--}}
{{--                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"--}}
{{--                                        data-modal-toggle="crud-modal">--}}
{{--                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                         fill="none" viewBox="0 0 14 14">--}}
{{--                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                              stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>--}}
{{--                                    </svg>--}}
{{--                                    <span class="sr-only">Fechar</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <form action="{{route('store')}}" method="POST" class="p-4 md:p-5">--}}
{{--                                @csrf--}}
{{--                                <div class="grid gap-4 mb-4 grid-cols-2">--}}
{{--                                    <div class="col-span-1 sm:col-span-1">--}}
{{--                                        <label for="url"--}}
{{--                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>--}}
{{--                                        <input type="text" name="url" id="url"--}}
{{--                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"--}}
{{--                                               placeholder="https://exemplo.com.br">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-span-1 sm:col-span-1">--}}
{{--                                        <label for="name"--}}
{{--                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>--}}
{{--                                        <input type="text" name="name" id="name"--}}
{{--                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"--}}
{{--                                               placeholder="Meu link">--}}
{{--                                    </div>--}}

{{--                                    @error('url-alter')--}}
{{--                                    <div--}}
{{--                                        class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"--}}
{{--                                        role="alert">--}}
{{--                                        {{$message}}.--}}
{{--                                    </div>--}}
{{--                                    @enderror--}}

{{--                                    @error('name')--}}
{{--                                    <div--}}
{{--                                        class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"--}}
{{--                                        role="alert">--}}
{{--                                        {{$message}}.--}}
{{--                                    </div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="flex justify-end">--}}
{{--                                    <button type="submit"--}}
{{--                                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                        Salvar--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @foreach($links AS $link)--}}
{{--                    <div--}}
{{--                        class="flex mt-4 bg-white dark:bg-slate-800 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 p-6 mb-6">--}}

{{--                        @unless($loop->first)--}}
{{--                            <li>--}}
{{--                                <form action="{{route('up', $link)}}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('PATCH')--}}
{{--                                    <button>--}}
{{--                                        <span>Cima</span>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                        @endunless()--}}

{{--                        @unless($loop->last)--}}
{{--                            <li>--}}
{{--                                <form action="{{route('down', $link)}}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('PATCH')--}}
{{--                                    <button>--}}
{{--                                        <span>Baixo</span>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                        @endunless()--}}

{{--                        <div class="flex items-center space-x-2 text-slate-600 dark:text-slate-400 mb-5">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none"--}}
{{--                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                      d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>--}}
{{--                            </svg>--}}
{{--                            <a href="{{ $link->url }}" target="_blank"--}}
{{--                               class="text-indigo-600 dark:text-indigo-400 hover:underline break-all">{{ $link->url }}</a>--}}
{{--                        </div>--}}

{{--                        <div--}}
{{--                            class="flex flex-wrap gap-3 items-center border-t border-slate-200 dark:border-slate-700 pt-4 mt-4">--}}
{{--                            <a href="{{route('edit', $link->id)}}"--}}
{{--                               class="flex items-center gap-2 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-800 dark:text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"--}}
{{--                                     viewBox="0 0 24 24"--}}
{{--                                     stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z"/>--}}
{{--                                </svg>--}}
{{--                                Editar--}}
{{--                            </a>--}}

{{--                            <form action="{{route('destroy', $link)}}" method="POST"--}}
{{--                                  onsubmit="return confirm('Tem certeza que deseja excluir?');">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit"--}}
{{--                                        class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"--}}
{{--                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>--}}
{{--                                    </svg>--}}
{{--                                    Excluir--}}
{{--                                </button>--}}
{{--                            </form>--}}

{{--                            <a href="{{ $link->url }}" target="_blank"--}}
{{--                               class="flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 ml-auto">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"--}}
{{--                                     viewBox="0 0 24 24"--}}
{{--                                     stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>--}}
{{--                                </svg>--}}
{{--                                Visitar--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}


<x-layout>
    <div class="min-h-screen flex flex-col bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950">

        <header class="w-full bg-white dark:bg-slate-800 shadow-sm py-4 px-6 flex items-center justify-between z-20">
            <div class="flex items-center">
                <button id="mobile-menu-button" class="lg:hidden mr-4 text-slate-600 dark:text-slate-400">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <a href="/" class="text-2xl font-bold text-indigo-600 dark:text-indigo-500">
                    BioLinkPro
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                <div class="relative group">
                    <button class="flex items-center text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-500 transition focus:outline-none">
                        <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-medium">{{ Auth::user()->name ?? 'Usuário' }}</span>
                        <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-700 rounded-md shadow-lg py-1 z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform scale-95 group-hover:scale-100 origin-top-right">
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Meu Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Configurações</a>
                        <div class="border-t border-gray-200 dark:border-slate-600 my-1"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-slate-600">
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex flex-1">
            <aside id="sidebar" class="w-64 bg-white dark:bg-slate-800 p-6 shadow-md border-r border-slate-200 dark:border-slate-700
                                       fixed lg:relative inset-y-0 left-0 z-30 transform -translate-x-full
                                       lg:translate-x-0 transition-transform duration-300 ease-in-out">
                <nav class="space-y-4">
                    <div>
                        <h3 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Principal</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition"><svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2 2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6-4h4"/></svg>Meus BioLinks</a></li>
                            <li><a href="#" class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition"><svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.562.342 1.282.652 2.052.793v-.738z"/></svg>Estatísticas</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Conta</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="flex items-center p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-indigo-50 dark:hover:bg-slate-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition"><svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.562.342 1.282.652 2.052.793v-.738z"/></svg>Configurações</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden lg:hidden"></div>

            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-4 sm:mb-0">Meus BioLinks</h1>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Novo Link
                    </button>
                </div>

                <div id="links-container" class="space-y-4">
                    @foreach($links AS $link)
                        <div data-id="{{ $link->id }}" class="link-item flex items-center bg-white dark:bg-slate-800 rounded-xl shadow-md p-4 transition-shadow duration-300">
                            <div class="drag-handle cursor-move text-slate-400 dark:text-slate-500 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                            </div>

                            <div class="flex-grow">
                                <p class="font-bold text-slate-800 dark:text-white">{{ $link->name }}</p>
                                <a href="{{ $link->url }}" target="_blank" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline break-all">{{ $link->url }}</a>
                            </div>

                            <div class="flex items-center space-x-2 ml-4 flex-shrink-0">
                                <a href="{{route('edit', $link->id)}}" class="p-2 text-slate-500 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z"/></svg>
                                </a>
                                <form action="{{route('destroy', $link)}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-red-500 hover:bg-red-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Criar Novo Link</h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                                    <span class="sr-only">Fechar</span>
                                </button>
                            </div>
                            <form action="{{route('store')}}" method="POST" class="p-4 md:p-5">
                                @csrf
                                <div class="grid gap-4 mb-4 grid-cols-1">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Meu link" required>
                                    </div>
                                    <div>
                                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link (URL)</label>
                                        <input type="url" name="url" id="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="https://exemplo.com.br" required>
                                    </div>

                                    @if ($errors->any())
                                        <div class="col-span-2 p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Salvar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


</x-layout>
<script>
    window.reorderUrl = "{{ route('reorder') }}";
    window.csrfToken = "{{ csrf_token() }}";
</script>
