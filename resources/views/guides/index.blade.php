@extends('layouts.app')

@section('title', 'Guias da Comunidade - Grand Fantasia Wiki')

@section('content')
<div class="space-y-6 max-w-6xl mx-auto">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 glass-panel p-6 rounded-2xl border border-indigo-500/20">
        <div class="space-y-1">
            <h1 class="font-heading font-extrabold text-2xl text-white">
                📚 Guias e Tutoriais da <span class="gradient-text">Comunidade</span>
            </h1>
            <p class="text-slate-300 text-xs sm:text-sm">
                Confira estratégias, rotas secretas e tutoriais compartilhados por outros jogadores de Grand Fantasia.
            </p>
        </div>

        @auth
            <a href="{{ route('guides.create') }}" class="px-4 py-2.5 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-semibold shadow-lg shadow-emerald-900/30 transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                <span>✍️ Escrever Novo Guia</span>
            </a>
        @else
            <a href="{{ route('login') }}" class="px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-lg shadow-indigo-600/30 transition-all text-center">
                Entrar para Publicar Guia
            </a>
        @endauth
    </div>

    <!-- Search Form -->
    <div class="glass-panel p-4 rounded-xl border border-slate-800">
        <form method="GET" action="{{ route('guides.index') }}" class="flex items-center gap-3">
            <input type="text" name="q" value="{{ request('q') }}" placeholder="Buscar por título de guia ou palavra-chave..."
                   class="flex-grow py-2.5 px-4 rounded-xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-500 transition-all">
                Buscar
            </button>
        </form>
    </div>

    <!-- Guides Grid -->
    @if($guides->isEmpty())
        <div class="glass-panel p-12 rounded-2xl text-center space-y-3 border border-slate-800">
            <div class="text-4xl">📖</div>
            <h3 class="font-heading font-bold text-white text-base">Nenhum guia encontrado</h3>
            <p class="text-slate-400 text-xs">Seja o primeiro a compartilhar um guia para a comunidade!</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($guides as $guide)
                <div class="glass-card p-5 rounded-2xl border border-slate-800 flex flex-col justify-between space-y-4">
                    <div class="space-y-2">
                        @if($guide->trivia)
                            <span class="px-2.5 py-0.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-[10px] font-medium inline-block">
                                📍 Trívia: {{ $guide->trivia->item_title }}
                            </span>
                        @endif

                        <h2 class="font-heading font-bold text-white text-base hover:text-indigo-300 transition-colors">
                            <a href="{{ route('guides.show', $guide->slug) }}">
                                {{ $guide->title }}
                            </a>
                        </h2>

                        <p class="text-slate-300 text-xs line-clamp-3 leading-relaxed">
                            {{ Str::limit(strip_tags($guide->content), 140) }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-slate-800 flex items-center justify-between text-[11px] text-slate-400">
                        <span class="font-medium text-slate-300">Por {{ $guide->user->name }}</span>
                        <div class="flex items-center gap-3">
                            <span>👁️ {{ $guide->views_count }}</span>
                            <span>💬 {{ $guide->comments->count() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pt-4">
            {{ $guides->links() }}
        </div>
    @endif
</div>
@endsection
