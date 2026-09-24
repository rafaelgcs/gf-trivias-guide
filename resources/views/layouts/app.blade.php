<!DOCTYPE html>
<html lang="pt-BR" class="dark h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Grand Fantasia Wiki - Trívias & Conquistas')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        gf: {
                            dark: '#0b0f19',
                            card: '#131b2e',
                            border: '#1e293b',
                            accent: '#6366f1',
                            gold: '#f59e0b',
                            emerald: '#10b981',
                            cyan: '#06b6d4',
                            purple: '#a855f7'
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS for Glassmorphism & Custom Scrollbar -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #080c15;
            background-image:
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.12) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(16, 185, 129, 0.10) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(168, 85, 247, 0.08) 0px, transparent 50%);
            background-attachment: fixed;
        }

        .glass-panel {
            background: rgba(19, 27, 46, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-card {
            background: rgba(22, 32, 54, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover {
            border-color: rgba(99, 102, 241, 0.35);
            box-shadow: 0 10px 30px -10px rgba(99, 102, 241, 0.25);
            transform: translateY(-2px);
        }

        .gradient-text {
            background: linear-gradient(135deg, #a5b4fc 0%, #6366f1 50%, #c084fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gold-gradient-text {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0b0f19;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }
    </style>
    @stack('styles')
</head>

<body class="text-slate-200 min-h-full flex flex-col antialiased selection:bg-indigo-500 selection:text-white">

    <!-- Top Navigation -->
    <header class="sticky top-0 z-50 glass-panel border-b border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand Logo -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('trivias.index') }}" class="flex items-center gap-2.5 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 via-purple-600 to-pink-500 flex items-center justify-center text-white font-heading font-extrabold text-xl shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform">
                            GF
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="font-heading font-extrabold text-lg tracking-tight text-white group-hover:text-indigo-300 transition-colors">
                                GF<span class="gradient-text">TRÍVIAS</span>
                            </span>
                            <span class="text-[10px] text-slate-400 -mt-1 font-medium tracking-wide">GRAND FANTASIA
                                WIKI</span>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('trivias.index') }}"
                        class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('trivias.*') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/50' }}">
                        🗺️ Trívias & Mapas
                    </a>
                    <a href="{{ route('guides.index') }}"
                        class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('guides.*') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/50' }}">
                        📚 Guias
                    </a>
                    <a href="{{ route('credits') }}"
                        class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('credits') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/50' }}">
                        ✨ Créditos
                    </a>
                    <a target="_blank" rel="noreferrer" href="https://grandfantasia.fandom.com/pt-br/wiki/Trívias"
                        class="px-3 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-indigo-300 flex items-center gap-1 transition-colors">
                        🌐 Wikia
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </nav>

                <!-- Right Actions (Auth & Progress Summary) -->
                <div class="flex items-center gap-3">
                    <!-- Global Progress Counter Pill -->
                    @auth
                        <div id="top-progress-pill"
                            class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900/80 border border-amber-500/30 text-amber-300 text-xs font-semibold shadow-inner">
                            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                            <span>Progresso:</span>
                            <span id="top-progress-text"
                                class="gold-gradient-text font-bold text-sm">{{ count($completedIds ?? []) * 2 }} pts</span>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="hidden sm:flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-slate-900/60 hover:bg-slate-800 border border-slate-700/80 text-slate-400 hover:text-indigo-300 text-xs font-medium transition-colors"
                            title="Faça login para salvar progresso">
                            <span>🔒 Entre para salvar progresso</span>
                        </a>
                    @endauth

                    @auth
                        <a href="{{ route('guides.create') }}"
                            class="hidden sm:inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-semibold shadow-md shadow-emerald-900/30 transition-all">
                            <span>+ Novo Guia</span>
                        </a>

                        <div class="relative group">
                            <a href="{{ route('profile') }}"
                                class="flex items-center gap-2 p-1.5 rounded-lg bg-slate-800/80 hover:bg-slate-700/80 border border-slate-700/60 transition-colors">
                                <div
                                    class="w-7 h-7 rounded-md bg-indigo-600 text-white font-bold text-xs flex items-center justify-center">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                                <span
                                    class="text-xs font-medium text-slate-200 hidden lg:inline">{{ Auth::user()->name }}</span>
                            </a>
                        </div>

                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" title="Sair"
                                class="p-2 text-slate-400 hover:text-red-400 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-1.5 text-xs font-medium text-slate-300 hover:text-white transition-colors">
                            Entrar
                        </a>
                        <a href="{{ route('register') }}"
                            class="px-3.5 py-1.5 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-md shadow-indigo-600/30 transition-all">
                            Criar Conta
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 mt-4">
            <div
                class="p-4 rounded-xl bg-emerald-950/80 border border-emerald-500/40 text-emerald-200 text-sm flex items-center justify-between shadow-lg">
                <div class="flex items-center gap-2">
                    <span class="text-emerald-400 text-lg">✓</span>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-200">✕</button>
            </div>
        </div>
    @endif

    @if(session('info'))
        <div class="max-w-7xl mx-auto px-4 mt-4">
            <div
                class="p-4 rounded-xl bg-indigo-950/80 border border-indigo-500/40 text-indigo-200 text-sm flex items-center justify-between shadow-lg">
                <div class="flex items-center gap-2">
                    <span class="text-indigo-400 text-lg">ℹ</span>
                    <span>{{ session('info') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-indigo-400 hover:text-indigo-200">✕</button>
            </div>
        </div>
    @endif

    <!-- Toast Copy Notification -->
    <div id="toast-copy"
        class="fixed bottom-6 right-6 z-50 transform translate-y-16 opacity-0 transition-all duration-300 pointer-events-none">
        <div
            class="px-4 py-3 rounded-xl bg-slate-900 border border-indigo-500/50 text-indigo-300 text-xs font-semibold shadow-2xl flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            <span id="toast-message">Coordenadas copiadas para a área de transferência!</span>
        </div>
    </div>

    <!-- Main Content Body -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-auto border-t border-slate-800/80 glass-panel py-8 text-slate-400 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex flex-col items-center md:items-start gap-1">
                    <div class="flex items-center gap-2">
                        <span class="font-heading font-bold text-white text-sm">Grand Fantasia Wiki & Trívias</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-slate-800 text-slate-400 text-[10px] font-mono">v2024.1.24</span>
                    </div>
                    <p class="text-slate-400 text-center md:text-left max-w-xl">
                        Aplicação mantida para a comunidade de Grand Fantasia. Conteúdo baseado em planilha atualizada
                        em 2024 por
                        <strong class="text-slate-300">[GS]Swain (Grand Fantasia Last Echo)</strong>. Aplicação por
                        <a href="{{ route('credits') }}" class="text-indigo-400 hover:underline font-medium">Rafael G C
                            Santos</a>.
                    </p>
                </div>
                <div class="flex items-center gap-4 text-slate-400">
                    <a href="{{ route('credits') }}"
                        class="text-indigo-300 hover:text-white transition-colors font-medium">✨ Página de Créditos</a>
                    <span>•</span>
                    <a target="_blank" rel="noreferrer"
                        href="https://grandfantasia.fandom.com/pt-br/wiki/P%C3%A1gina_principal"
                        class="hover:text-indigo-400 transition-colors underline">Wikia Fandom</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Global Progress Sync & Toast Scripts -->
    <script>
        const IS_LOGGED_IN = {{ Auth::check() ? 'true' : 'false' }};
        const SERVER_COMPLETED_IDS = @json($completedIds ?? []);

        function getStoredProgress() {
            return IS_LOGGED_IN ? SERVER_COMPLETED_IDS : [];
        }

        function saveStoredProgress(ids) {
            if (IS_LOGGED_IN) {
                updateTopProgressUI(ids.length);
            }
        }

        function updateTopProgressUI(count) {
            const points = count * 2;
            const element = document.getElementById('top-progress-text');
            if (element) {
                element.innerText = `${points} pts (${count} trívias)`;
            }
        }

        function showToast(message) {
            const toast = document.getElementById('toast-copy');
            const msgSpan = document.getElementById('toast-message');
            if (toast && msgSpan) {
                msgSpan.innerText = message;
                toast.classList.remove('translate-y-16', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
                setTimeout(() => {
                    toast.classList.remove('translate-y-0', 'opacity-100');
                    toast.classList.add('translate-y-16', 'opacity-0');
                }, 2500);
            }
        }

        function copyToClipboard(text, label = 'Coordenadas') {
            navigator.clipboard.writeText(text).then(() => {
                showToast(`${label} "${text}" copiadas!`);
            }).catch(err => {
                showToast(`Copiado: ${text}`);
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const currentProgress = getStoredProgress();
            updateTopProgressUI(currentProgress.length);
        });
    </script>
    @stack('scripts')
</body>

</html>