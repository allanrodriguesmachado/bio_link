<x-layout>
    <div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-900 dark:to-slate-950 text-slate-800 dark:text-slate-200">
        <main class="w-full max-w-md mx-auto space-y-8">
            <div class="profile-section text-center animate-fade-in-down">
                <img
                    class="w-24 h-24 rounded-full object-cover mx-auto shadow-lg mb-4 ring-4 ring-white/50 dark:ring-slate-800/50"
                    src="{{ asset('storage/' . $user->photo) }}"
                    alt="Foto de {{ $user->name }}"
                    onerror="this.onerror=null;this.src='https://placehold.co/200x200/475569/FFFFFF?text=404';"
                >

                <h1 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $user->handler }}</h1>

                <p class="text-slate-500 dark:text-slate-400 mt-2 text-base max-w-xs mx-auto">
                    {{ $user->description }}
                </p>
            </div>

            <div class="links-section w-full space-y-4 animate-fade-in-up">
                @foreach($links as $link)
                    <a
                        href="{{ $link->url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center w-full p-4 bg-white/70 dark:bg-slate-800/50 backdrop-blur-sm border border-slate-200 dark:border-slate-700 rounded-xl shadow-sm transition-all duration-300 ease-in-out hover:!scale-105 hover:shadow-md hover:border-indigo-300 dark:hover:border-indigo-500"
                    >

                        <span class="ml-4 font-semibold">{{ $link->name }}</span>

                        <i data-feather="arrow-up-right" class="w-5 h-5 text-slate-400 dark:text-slate-500 ml-auto group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-all duration-300 group-hover:rotate-45"></i>
                    </a>
                @endforeach
            </div>
        </main>
    </div>
</x-layout>
