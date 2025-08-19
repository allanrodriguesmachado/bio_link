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

{{--        <div class="relative group">--}}
{{--            <button class="flex items-center text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-500 transition focus:outline-none">--}}
{{--                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>--}}
{{--                <span class="font-medium">{{ Auth::user()->name ?? 'Usuário' }}</span>--}}
{{--                <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>--}}
{{--            </button>--}}
{{--            <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-700 rounded-md shadow-lg py-1 z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform scale-95 group-hover:scale-100 origin-top-right">--}}
{{--                <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Meu Perfil</a>--}}
{{--                <a href="#" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Configurações</a>--}}
{{--                <div class="border-t border-gray-200 dark:border-slate-600 my-1"></div>--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}
{{--                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-slate-600">--}}
{{--                        Sair--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="relative group">
            <button class="flex items-center text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-500 transition focus:outline-none">

                {{-- LÓGICA DA IMAGEM DE PERFIL --}}
                @if (Auth::user()->photo)
                    {{-- Se o usuário TEM uma foto, exibe a tag <img> --}}
                    <img class="h-8 w-8 mr-2 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->photo) }}" alt="Foto de Perfil">
                @else
                    {{-- Se NÃO TEM foto, exibe o ícone SVG padrão --}}
                    <svg class="h-8 w-8 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                @endif

                <span class="font-medium">{{ Auth::user()->name ?? 'Usuário' }}</span>
                <svg class="ml-2 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>

            {{-- O resto do seu menu dropdown continua igual --}}
            <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-700 rounded-md shadow-lg py-1 z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform scale-95 group-hover:scale-100 origin-top-right">
                <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-600">Meu Perfil</a>
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
