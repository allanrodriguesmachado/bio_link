<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Links</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Feather Icons via CDN -->
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        /* Estilo base para a fonte e animações */
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        /* Animação de entrada (fade in + scale up) */
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.98);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .animate-fade-in-scale {
            animation: fadeInScale 0.5s ease-out forwards;
        }
        /* Aplica um delay escalonado para os itens da lista */
        .profile-section { animation-delay: 0.1s; }
        .links-section { animation-delay: 0.2s; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex items-center justify-center p-4">

<!-- Container Principal -->
<main class="w-full max-w-md mx-auto">
    <div class="flex flex-col items-center text-center">

        <!-- Seção do Perfil -->
        <div class="profile-section animate-fade-in-scale opacity-0 w-full">
            <!-- Imagem de Perfil -->
            <img
                class="w-24 h-24 rounded-full object-cover mx-auto shadow-md mb-4"
                src="/storage/{{$user->photo}}"
                alt="Foto do Perfil"
                onerror="this.onerror=null;this.src='https://placehold.co/200x200/111827/FFFFFF?text=Erro';"
            >

            <!-- Nome do Usuário -->
            <h1 class="text-2xl font-bold text-gray-900">
                {{$user->handler}}
            </h1>

            <!-- Descrição / Bio -->
            <p class="text-gray-500 mt-2 text-base">
                {{$user->description}}
            </p>
        </div>

        <div class="links-section animate-fade-in-scale opacity-0 w-full mt-8 space-y-3">
            @foreach($link AS $links)
                <a href="{{$links->url}}" target="_blank" class="group flex items-center w-full p-4 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 transition-all duration-300 ease-in-out transform hover:scale-[1.03]">
                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 group-hover:bg-gray-800 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i data-feather="github" class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors duration-300"></i>
                    </div>
                    <span class="ml-4 font-semibold text-gray-700">{{$links->name}}</span>
                    <i data-feather="arrow-up-right" class="w-5 h-5 text-gray-400 ml-auto group-hover:text-gray-800 transition-colors duration-300"></i>
                </a>
            @endforeach
        </div>
    </div>
</main>

<script>
    // Renderiza os ícones do Feather
    feather.replace();
</script>
</body>
</html>
