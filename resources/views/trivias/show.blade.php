@extends('layouts.app')

@section('title', $trivia->item_title . ' - Trívia Grand Fantasia')

@section('content')
<div class="space-y-6 max-w-5xl mx-auto">

    <!-- Back Navigation -->
    <div>
        <a href="{{ route('trivias.index', ['zone' => $trivia->zone->slug]) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-400 hover:text-indigo-400 transition-colors">
            ← Voltar para Trívias de {{ $trivia->zone->name }}
        </a>
    </div>

    <!-- Main Trivia Header Card -->
    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-indigo-500/30 shadow-2xl relative overflow-hidden space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 rounded-full bg-indigo-500/20 border border-indigo-500/30 text-indigo-300 text-xs font-semibold">
                        📍 {{ $trivia->zone->name }}
                    </span>
                    <span class="px-3 py-1 rounded-full bg-amber-500/20 border border-amber-500/30 text-amber-300 text-xs font-semibold font-mono">
                        +2 Pontos de Conquista
                    </span>
                </div>
                <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">
                    {{ $trivia->item_title }}
                </h1>
                <p class="text-slate-300 text-sm italic">
                    Nome na História: <strong class="text-white font-medium">"{{ $trivia->history_title }}"</strong>
                </p>
            </div>

            <!-- Complete Toggle Button -->
            <button onclick="toggleTriviaCompletion({{ $trivia->id }})" 
                    id="checkbox-btn-{{ $trivia->id }}"
                    class="px-4 py-2.5 rounded-xl border transition-all flex items-center justify-center gap-2 text-xs font-semibold bg-slate-900 border-slate-700 text-slate-300 hover:border-emerald-500/50">
                <span id="checkbox-icon-{{ $trivia->id }}" class="text-base leading-none">⬜</span>
                <span id="checkbox-text-{{ $trivia->id }}">Marcar como Concluída</span>
            </button>
        </div>

        @if($trivia->notes)
            <div class="p-3.5 rounded-xl bg-amber-950/40 border border-amber-500/30 text-amber-200 text-xs flex items-start gap-2">
                <span class="text-amber-400 text-base">⚠️</span>
                <span><strong>Observação:</strong> {{ $trivia->notes }}</span>
            </div>
        @endif
    </div>

    <!-- Step by Step Detailed Walkthrough -->
    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-6">
        <div class="border-b border-slate-800 pb-4 flex items-center justify-between">
            <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                <span>📋 Passos para Realização</span>
                <span class="text-xs text-slate-400 font-normal">({{ $trivia->steps->count() }} etapas)</span>
            </h2>
            <span class="text-xs text-indigo-400">Clique nas coordenadas para copiar!</span>
        </div>

        <div class="space-y-4">
            @foreach($trivia->steps as $step)
                <div class="glass-card p-4 rounded-xl border border-slate-800 flex items-start gap-4">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-indigo-600 to-purple-600 text-white font-bold text-sm flex items-center justify-center shadow-lg shadow-indigo-500/20 flex-shrink-0 mt-0.5">
                        {{ $step->step_number }}
                    </div>

                    <div class="flex-grow space-y-2">
                        <p class="text-slate-200 text-sm sm:text-base leading-relaxed">
                            {!! $step->formatted_instruction !!}
                        </p>

                        <div class="flex flex-wrap items-center gap-2 pt-1 text-xs">
                            @if($step->npc_name)
                                <span class="px-2.5 py-1 rounded-lg bg-slate-900 text-slate-300 border border-slate-700/80 font-medium">
                                    👤 NPC: {{ $step->npc_name }}
                                </span>
                            @endif

                            @if($step->coordinates)
                                <button onclick="copyToClipboard('{{ $step->coordinates }}', 'Coordenadas')" 
                                        class="px-2.5 py-1 rounded-lg bg-indigo-950 hover:bg-indigo-900 text-indigo-300 border border-indigo-500/40 font-mono font-semibold transition-colors flex items-center gap-1.5"
                                        title="Copiar Coordenadas">
                                    📍 ({{ $step->coordinates }})
                                    <span class="text-xs">📋 Copiar</span>
                                </button>
                            @endif

                            @if($step->item_required)
                                <span class="px-2.5 py-1 rounded-lg bg-amber-950/60 text-amber-300 border border-amber-500/40 font-medium">
                                    📦 Item: {{ $step->item_required }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Community Guides linked to this Trivia -->
    @if($trivia->guides->count() > 0)
        <div id="guides" class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                <span>📚 Guias da Comunidade para esta Trívia</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach($trivia->guides as $guide)
                    <a href="{{ route('guides.show', $guide->slug) }}" class="glass-card p-4 rounded-xl border border-slate-800 block hover:border-indigo-500/40 transition-all">
                        <h3 class="font-heading font-bold text-white text-sm hover:text-indigo-300 transition-colors">
                            {{ $guide->title }}
                        </h3>
                        <p class="text-slate-400 text-xs line-clamp-2 mt-1">
                            {{ Str::limit(strip_tags($guide->content), 100) }}
                        </p>
                        <div class="mt-3 flex items-center justify-between text-[11px] text-slate-400 pt-2 border-t border-slate-800">
                            <span>Por {{ $guide->user->name }}</span>
                            <span>👁️ {{ $guide->views_count }} visualizações</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Comments Section -->
    <div id="comments" class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-6">
        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
            <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                <span>💬 Dicas e Comentários dos Jogadores</span>
                <span class="text-xs text-slate-400">({{ $trivia->comments->count() }})</span>
            </h2>
        </div>

        <!-- Add Comment Form -->
        @auth
            <form action="{{ route('comments.store') }}" method="POST" class="space-y-3">
                @csrf
                <input type="hidden" name="trivia_id" value="{{ $trivia->id }}">
                <textarea name="content" rows="3" required placeholder="Escreva uma dica, aviso de horário de NPC ou macete para outros jogadores..."
                          class="w-full p-3.5 rounded-xl bg-slate-900 border border-slate-700/80 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500 transition-all"></textarea>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-md shadow-indigo-600/30 transition-all">
                        Publicar Comentário
                    </button>
                </div>
            </form>
        @else
            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800 text-center space-y-2">
                <p class="text-slate-300 text-xs">
                    Quer compartilhar um aviso ou tirar dúvida sobre esta trívia?
                </p>
                <div class="flex items-center justify-center gap-3">
                    <a href="{{ route('login') }}" class="px-3.5 py-1.5 rounded-lg bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-500 transition-all">
                        Fazer Login
                    </a>
                    <a href="{{ route('register') }}" class="text-slate-400 hover:text-white text-xs underline">
                        Criar Conta Grátis
                    </a>
                </div>
            </div>
        @endauth

        <!-- Comments List -->
        @if($trivia->comments->isEmpty())
            <p class="text-slate-400 text-xs text-center py-4">Nenhum comentário adicionado ainda. Seja o primeiro a deixar uma dica!</p>
        @else
            <div class="space-y-3 pt-2">
                @foreach($trivia->comments as $comment)
                    <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800 space-y-1.5">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-semibold text-indigo-300">👤 {{ $comment->user->name }}</span>
                            <span class="text-slate-400 text-[10px]">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-slate-300 text-xs leading-relaxed">
                            {{ $comment->content }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</div>
@endsection

@push('scripts')
<script>
    function updateCardUI(id, isCompleted) {
        const btn = document.getElementById(`checkbox-btn-${id}`);
        const icon = document.getElementById(`checkbox-icon-${id}`);
        const text = document.getElementById(`checkbox-text-${id}`);

        if (isCompleted) {
            if (btn) {
                btn.className = "px-4 py-2.5 rounded-xl border transition-all flex items-center justify-center gap-2 text-xs font-semibold bg-emerald-950/80 border-emerald-500 text-emerald-300 shadow-lg shadow-emerald-900/30";
            }
            if (icon) icon.innerText = "✅";
            if (text) text.innerText = "Trívia Concluída";
        } else {
            if (btn) {
                btn.className = "px-4 py-2.5 rounded-xl border transition-all flex items-center justify-center gap-2 text-xs font-semibold bg-slate-900 border-slate-700 text-slate-300 hover:border-emerald-500/50";
            }
            if (icon) icon.innerText = "⬜";
            if (text) text.innerText = "Marcar como Concluída";
        }
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
        const completedIds = getStoredProgress();
        updateCardUI({{ $trivia->id }}, completedIds.includes({{ $trivia->id }}));
    });
</script>
@endpush
