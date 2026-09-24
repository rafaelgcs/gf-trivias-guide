@extends('layouts.app')

@section('title', 'Explorador de Trívias - Grand Fantasia Wiki')

@section('content')
    <div class="space-y-6">

        <!-- Hero Header & Progress Overview -->
        <div class="relative overflow-hidden rounded-2xl glass-panel p-6 sm:p-8 border border-indigo-500/20 shadow-2xl">
            <div class="absolute -top-24 -right-24 w-72 h-72 bg-indigo-600/10 rounded-full blur-3xl pointer-events-none">
            </div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-emerald-600/10 rounded-full blur-3xl pointer-events-none">
            </div>

            <div class="relative flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="space-y-2 max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-semibold tracking-wide">
                        <span>✨ GRAND FANTASIA WIKI</span>
                        <span>•</span>
                        <span class="text-slate-400">Trívias de Saphael</span>
                    </div>
                    <h1 class="font-heading font-extrabold text-2xl sm:text-4xl text-white tracking-tight">
                        Guias e Trívias de <span class="gradient-text">Grand Fantasia</span>
                    </h1>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Pesquise e consulte trívias de Kaslow, Ilya, Jale, Elsaland, Saphael, Abertura do Tempo, Dimensão
                        Alternativa, Tormentum e Ilha Sprite. Cada página contabiliza <strong>2 pontos por página</strong>
                        no arquivo do personagem!
                    </p>
                    <p class="text-slate-400 text-[11px] pt-1">
                        Conteúdo das trívias baseado na planilha de 2024 por <strong class="text-slate-300">[GS]Swain (Grand
                            Fantasia Last Echo)</strong>. Veja os <a href="{{ route('credits') }}"
                            class="text-indigo-400 hover:underline font-semibold">Créditos completos</a>.
                    </p>
                </div>

                <!-- Dynamic Progress Card -->
                @auth
                    <div class="glass-card p-5 rounded-xl border border-slate-700/60 min-w-[260px] space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-400 font-medium">Seu Progresso Total</span>
                            <span id="progress-percentage" class="font-mono font-bold text-amber-400">0%</span>
                        </div>
                        <div class="w-full bg-slate-900 rounded-full h-2.5 overflow-hidden p-0.5 border border-slate-800">
                            <div id="progress-bar"
                                class="bg-gradient-to-r from-amber-500 via-emerald-500 to-indigo-500 h-full rounded-full transition-all duration-500"
                                style="width: 0%"></div>
                        </div>
                        <div class="flex items-center justify-between text-xs pt-1">
                            <span class="text-slate-400">Pontos Arquivo:</span>
                            <span class="font-semibold text-white"><span id="user-points-display">0</span> / <span
                                    class="text-amber-400 font-mono">{{ $maxGfPoints }} pts</span></span>
                        </div>
                    </div>
                @else
                    <div class="glass-card p-5 rounded-xl border border-indigo-500/30 min-w-[260px] space-y-3 bg-indigo-950/20">
                        <div class="flex items-center gap-2 text-indigo-300 text-xs font-semibold">
                            <span>🔒 Salvar Progresso</span>
                        </div>
                        <p class="text-slate-300 text-xs leading-relaxed">
                            Faça login ou crie uma conta para marcar trívias concluídas e contabilizar seus pontos!
                        </p>
                        <div class="flex items-center gap-2 pt-1">
                            <a href="{{ route('login') }}"
                                class="px-3 py-1.5 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-md transition-all">
                                Fazer Login
                            </a>
                            <a href="{{ route('register') }}"
                                class="px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-medium transition-all">
                                Criar Conta
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Search & Filter Controls -->
        <div class="glass-panel p-4 sm:p-5 rounded-xl space-y-4 border border-slate-800">

            <!-- Search & Dropdown Row -->
            <form method="GET" action="{{ route('trivias.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-3">

                <!-- Global Search Bar -->
                <div class="sm:col-span-6 relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        🔍
                    </div>
                    <input type="text" name="q" value="{{ request('q') }}"
                        placeholder="Buscar por trívia, NPC, item ou coordenada (ex: 416, 229)..."
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                    @if(request('q'))
                        <a href="{{ route('trivias.index', array_filter(request()->except('q'))) }}"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-white text-xs">
                            ✕ Limpar
                        </a>
                    @endif
                </div>

                <!-- NPC Filter Dropdown -->
                <div class="sm:col-span-4">
                    <select name="npc" onchange="this.form.submit()"
                        class="w-full py-2.5 px-3 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500 transition-all">
                        <option value="">👤 Todos os NPCs ({{ count($npcs) }})</option>
                        @foreach($npcs as $npc)
                            <option value="{{ $npc }}" {{ request('npc') == $npc ? 'selected' : '' }}>
                                {{ $npc }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Filter Action Button -->
                <div class="sm:col-span-2 flex items-center gap-2">
                    <button type="submit"
                        class="w-full py-2.5 px-4 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-md shadow-indigo-600/30 transition-all flex items-center justify-center gap-1.5">
                        Filtrar
                    </button>
                    @if(request()->hasAny(['q', 'city', 'zone', 'npc']))
                        <a href="{{ route('trivias.index') }}" title="Resetar todos os filtros"
                            class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs transition-colors">
                            🔄
                        </a>
                    @endif
                </div>

                @if(request('city'))
                    <input type="hidden" name="city" value="{{ request('city') }}">
                @endif
                @if(request('zone'))
                    <input type="hidden" name="zone" value="{{ request('zone') }}">
                @endif
            </form>

            <!-- City / Region Filter Pills -->
            <div class="space-y-2 border-t border-slate-800/80 pt-3">
                <div
                    class="flex items-center justify-between text-xs text-slate-400 font-semibold uppercase tracking-wider">
                    <span>🏰 Cidades & Regiões Principais:</span>
                </div>
                <div class="flex items-center gap-2 overflow-x-auto pb-1 no-scrollbar">
                    <a href="{{ route('trivias.index', array_filter(request()->except(['city', 'zone']))) }}"
                        class="px-3.5 py-1.5 rounded-xl text-xs font-medium whitespace-nowrap transition-all flex items-center gap-1.5 {{ !$selectedCity ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'bg-slate-900/80 text-slate-400 hover:text-white hover:bg-slate-800' }}">
                        <span>Todas as Cidades</span>
                    </a>

                    @foreach($cities as $c)
                        @php $isCityActive = $selectedCity == $c; @endphp
                        <a href="{{ route('trivias.index', array_merge(request()->except('zone'), ['city' => $c])) }}"
                            class="px-3.5 py-1.5 rounded-xl text-xs font-medium whitespace-nowrap transition-all flex items-center gap-1.5 {{ $isCityActive ? 'bg-gradient-to-r from-amber-600 to-indigo-600 text-white shadow-md shadow-amber-600/20' : 'bg-slate-900/80 text-slate-400 hover:text-white hover:bg-slate-800' }}">
                            <span>📍 {{ $c }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Map / Zone Pills -->
            @if($zones->isNotEmpty())
                <div class="space-y-2 border-t border-slate-800/60 pt-3">
                    <div
                        class="flex items-center justify-between text-xs text-slate-400 font-semibold uppercase tracking-wider">
                        <span>🗺️ Mapas {{ $selectedCity ? 'de ' . $selectedCity : 'Disponíveis' }}:</span>
                    </div>
                    <div class="flex items-center gap-2 overflow-x-auto pb-1 no-scrollbar">
                        <a href="{{ route('trivias.index', array_filter(request()->except('zone'))) }}"
                            class="px-3 py-1.5 rounded-lg text-xs font-medium whitespace-nowrap transition-all flex items-center gap-1.5 {{ !request('zone') ? 'bg-slate-700 text-white' : 'bg-slate-900/50 text-slate-400 hover:text-white' }}">
                            <span>Todos os Mapas</span>
                        </a>

                        @foreach($zones as $zone)
                            @php
                                $isCurrentZone = request('zone') == $zone->slug || request('zone') == $zone->id;
                                $zoneTriviaCount = $zone->trivias->count();
                            @endphp
                            <a href="{{ route('trivias.index', array_merge(request()->all(), ['zone' => $zone->slug])) }}"
                                class="px-3 py-1.5 rounded-lg text-xs font-medium whitespace-nowrap transition-all flex items-center gap-1.5 {{ $isCurrentZone ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'bg-slate-900/50 text-slate-400 hover:text-white hover:bg-slate-800' }}">
                                <span>{{ $zone->name }}</span>
                                <span
                                    class="px-1.5 py-0.2 rounded text-[10px] {{ $isCurrentZone ? 'bg-indigo-700 text-white' : 'bg-slate-800 text-slate-400' }}">{{ $zoneTriviaCount }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Active Filters Indicator -->
        @if(request()->hasAny(['q', 'city', 'zone', 'npc']))
            <div class="flex flex-wrap items-center gap-2 text-xs text-slate-400">
                <span>Filtros ativos:</span>
                @if(request('city'))
                    <span class="px-2.5 py-1 rounded-md bg-amber-950/80 border border-amber-500/40 text-amber-300 font-medium">
                        Cidade: {{ request('city') }}
                    </span>
                @endif
                @if(request('zone'))
                    <span class="px-2.5 py-1 rounded-md bg-indigo-950 border border-indigo-500/40 text-indigo-300 font-medium">
                        Mapa: {{ request('zone') }}
                    </span>
                @endif
                @if(request('q'))
                    <span class="px-2.5 py-1 rounded-md bg-indigo-950 border border-indigo-500/40 text-indigo-300 font-medium">
                        Busca: "{{ request('q') }}"
                    </span>
                @endif
                @if(request('npc'))
                    <span class="px-2.5 py-1 rounded-md bg-indigo-950 border border-indigo-500/40 text-indigo-300 font-medium">
                        NPC: {{ request('npc') }}
                    </span>
                @endif
                <span class="ml-auto text-slate-400 font-mono">Exibindo {{ $trivias->count() }} trívias</span>
            </div>
        @endif

        <!-- Trivia List Grid -->
        @if($trivias->isEmpty())
            <div class="glass-panel p-12 rounded-2xl text-center space-y-3 border border-slate-800">
                <div class="text-4xl">🔍</div>
                <h3 class="font-heading font-bold text-lg text-white">Nenhuma trívia encontrada</h3>
                <p class="text-slate-400 text-xs max-w-md mx-auto">
                    Não encontramos nenhuma trívia com os filtros selecionados. Tente buscar por outros termos ou selecionar
                    outra cidade/mapa.
                </p>
                <a href="{{ route('trivias.index') }}"
                    class="inline-block mt-2 px-4 py-2 rounded-xl bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-500 transition-all">
                    Ver Todas as Trívias
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($trivias as $trivia)
                    <div id="trivia-card-{{ $trivia->id }}"
                        class="glass-card p-5 rounded-2xl flex flex-col justify-between space-y-4 border border-slate-800/80 transition-all">

                        <!-- Card Top Header -->
                        <div class="space-y-2">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <div class="flex items-center gap-1.5 flex-wrap mb-1">
                                        <span
                                            class="px-2.5 py-0.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-300 text-[10px] font-semibold">
                                            🏰 {{ $trivia->zone->city }}
                                        </span>
                                        <span
                                            class="px-2.5 py-0.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-[10px] font-medium">
                                            📍 {{ $trivia->zone->name }}
                                        </span>
                                    </div>
                                    <h2
                                        class="font-heading font-bold text-base sm:text-lg text-white group-hover:text-indigo-300 transition-colors">
                                        <a href="{{ route('trivias.show', $trivia->id) }}" class="hover:underline">
                                            {{ $trivia->item_title }}
                                        </a>
                                    </h2>
                                    <p class="text-slate-400 text-xs flex items-center gap-1 mt-0.5">
                                        <span>História:</span>
                                        <span class="text-slate-300 italic font-medium">"{{ $trivia->history_title }}"</span>
                                    </p>
                                </div>

                                <!-- Checkbox Completion Button -->
                                <button onclick="toggleTriviaCompletion({{ $trivia->id }})" id="checkbox-btn-{{ $trivia->id }}"
                                    class="flex-shrink-0 p-2 rounded-xl border transition-all flex items-center justify-center gap-1.5 text-xs font-semibold bg-slate-900/90 border-slate-700 text-slate-400 hover:border-emerald-500/50 hover:text-emerald-400">
                                    <span id="checkbox-icon-{{ $trivia->id }}" class="text-base leading-none">⬜</span>
                                    <span id="checkbox-text-{{ $trivia->id }}" class="hidden sm:inline text-[11px]">Concluir</span>
                                </button>
                            </div>
                        </div>

                        <!-- Steps Timeline -->
                        <div class="space-y-2.5 bg-slate-950/60 p-3.5 rounded-xl border border-slate-800/60">
                            <div
                                class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider flex items-center justify-between">
                                <span>Passo a Passo ({{ $trivia->steps->count() }}
                                    {{ $trivia->steps->count() == 1 ? 'etapa' : 'etapas' }})</span>
                                <span class="text-amber-400 font-mono text-[10px]">+2 Pts Conquista</span>
                            </div>

                            <div class="space-y-2">
                                @foreach($trivia->steps as $step)
                                    <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                        <span
                                            class="w-5 h-5 rounded-md bg-indigo-950 text-indigo-300 border border-indigo-500/30 flex items-center justify-center text-[10px] font-bold flex-shrink-0 mt-0.5">
                                            {{ $step->step_number }}
                                        </span>
                                        <div class="flex-grow leading-relaxed">
                                            <span>{!! $step->formatted_instruction !!}</span>

                                            <div class="flex flex-wrap items-center gap-1.5 mt-1.5">
                                                @if($step->npc_name)
                                                    <span
                                                        class="px-2 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px] border border-slate-700/60">
                                                        👤 {{ $step->npc_name }}
                                                    </span>
                                                @endif

                                                @if($step->coordinates)
                                                    <button onclick="copyToClipboard('{{ $step->coordinates }}', 'Coordenadas')"
                                                        class="px-2 py-0.5 rounded bg-indigo-950/80 hover:bg-indigo-900 text-indigo-300 text-[10px] border border-indigo-500/30 font-mono transition-colors flex items-center gap-1"
                                                        title="Clique para copiar coordenadas">
                                                        📍 ({{ $step->coordinates }})
                                                        <span class="text-[9px]">📋</span>
                                                    </button>
                                                @endif

                                                @if($step->item_required)
                                                    <span
                                                        class="px-2 py-0.5 rounded bg-amber-950/60 text-amber-300 text-[10px] border border-amber-500/30">
                                                        📦 {{ $step->item_required }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Footer Action Links -->
                        <div class="pt-2 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/60">
                            <div class="flex items-center gap-3">
                                <a href="{{ route('trivias.show', $trivia->id) }}#comments"
                                    class="hover:text-indigo-300 transition-colors flex items-center gap-1">
                                    💬 {{ $trivia->comments->count() }} comentários
                                </a>
                                @if($trivia->guides->count() > 0)
                                    <a href="{{ route('trivias.show', $trivia->id) }}#guides"
                                        class="text-teal-400 hover:underline flex items-center gap-1 font-medium">
                                        📚 {{ $trivia->guides->count() }} guia
                                    </a>
                                @endif
                            </div>

                            <a href="{{ route('trivias.show', $trivia->id) }}"
                                class="text-indigo-400 hover:text-indigo-300 font-semibold flex items-center gap-1">
                                Ver Guia Completo →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        function updateCardUI(id, isCompleted) {
            const btn = document.getElementById(`checkbox-btn-${id}`);
            const icon = document.getElementById(`checkbox-icon-${id}`);
            const text = document.getElementById(`checkbox-text-${id}`);
            const card = document.getElementById(`trivia-card-${id}`);

            if (isCompleted) {
                if (btn) {
                    btn.className = "flex-shrink-0 p-2 rounded-xl border transition-all flex items-center justify-center gap-1.5 text-xs font-semibold bg-emerald-950/80 border-emerald-500 text-emerald-300 shadow-md shadow-emerald-900/30";
                }
                if (icon) icon.innerText = "✅";
                if (text) text.innerText = "Concluída";
                if (card) card.classList.add('border-emerald-500/40', 'bg-emerald-950/10');
            } else {
                if (btn) {
                    btn.className = "flex-shrink-0 p-2 rounded-xl border transition-all flex items-center justify-center gap-1.5 text-xs font-semibold bg-slate-900/90 border-slate-700 text-slate-400 hover:border-emerald-500/50 hover:text-emerald-400";
                }
                if (icon) icon.innerText = "⬜";
                if (text) text.innerText = "Concluir";
                if (card) card.classList.remove('border-emerald-500/40', 'bg-emerald-950/10');
            }
        }

        function syncOverallProgressBar() {
            const totalTrivias = {{ $totalTriviasCount }};
            const completedIds = getStoredProgress();
            const count = completedIds.length;
            const percentage = totalTrivias > 0 ? Math.min(100, Math.round((count / totalTrivias) * 100)) : 0;
            const points = count * 2;

            const progressBar = document.getElementById('progress-bar');
            const percentageText = document.getElementById('progress-percentage');
            const pointsDisplay = document.getElementById('user-points-display');

            if (progressBar) progressBar.style.width = `${percentage}%`;
            if (percentageText) percentageText.innerText = `${percentage}%`;
            if (pointsDisplay) pointsDisplay.innerText = `${points} pts (${count} trívias)`;

            document.querySelectorAll('[id^="checkbox-btn-"]').forEach(button => {
                const id = parseInt(button.id.replace('checkbox-btn-', ''));
                const isDone = completedIds.includes(id);
                updateCardUI(id, isDone);
            });
        }

        async function toggleTriviaCompletion(triviaId) {
            if (!IS_LOGGED_IN) {
                showToast('🔒 Faça login para marcar trívias e salvar seu progresso!');
                setTimeout(() => {
                    window.location.href = '{{ route("login") }}';
                }, 1200);
                return;
            }

            let currentProgress = getStoredProgress();
            let isDone = currentProgress.includes(triviaId);

            if (isDone) {
                currentProgress = currentProgress.filter(id => id !== triviaId);
            } else {
                currentProgress.push(triviaId);
            }

            updateCardUI(triviaId, !isDone);

            try {
                const response = await fetch('{{ route("progress.toggle") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ trivia_id: triviaId })
                });
                const data = await response.json();
                if (data.success) {
                    showToast(!isDone ? 'Trívia marcada como concluída! 🎉' : 'Trívia desmarcada!');
                } else {
                    showToast(data.message || 'Erro ao salvar progresso.');
                }
            } catch (e) {
                console.error('Progress error:', e);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            syncOverallProgressBar();
        });
    </script>
@endpush