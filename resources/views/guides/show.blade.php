@extends('layouts.app')

@section('title', $guide->title . ' - Guia Grand Fantasia')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div>
        <a href="{{ route('guides.index') }}" class="text-xs font-semibold text-slate-400 hover:text-indigo-400 transition-colors">
            ← Voltar para Todos os Guias
        </a>
    </div>

    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-6">
        <div class="space-y-3 border-b border-slate-800 pb-4">
            @if($guide->trivia)
                <a href="{{ route('trivias.show', $guide->trivia->id) }}" class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-indigo-500/20 border border-indigo-500/30 text-indigo-300 text-xs font-semibold hover:underline">
                    📍 Trívia: {{ $guide->trivia->item_title }} ({{ $guide->trivia->zone->name }})
                </a>
            @endif

            <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-white">
                {{ $guide->title }}
            </h1>

            <div class="flex items-center justify-between text-xs text-slate-400 pt-1">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-indigo-600 text-white font-bold text-[10px] flex items-center justify-center">
                        {{ strtoupper(substr($guide->user->name, 0, 1)) }}
                    </div>
                    <span>Por <strong class="text-slate-200 font-medium">{{ $guide->user->name }}</strong></span>
                    <span>•</span>
                    <span>{{ $guide->created_at->format('d/m/Y H:i') }}</span>
                </div>
                <div>
                    <span>👁️ {{ $guide->views_count }} visualizações</span>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="prose prose-invert max-w-none text-slate-200 text-sm leading-relaxed space-y-4 whitespace-pre-line">
            {{ $guide->content }}
        </div>
    </div>

    <!-- Comments Section for Guide -->
    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-6">
        <h2 class="font-heading font-bold text-lg text-white">
            💬 Comentários ({{ $guide->comments->count() }})
        </h2>

        @auth
            <form action="{{ route('comments.store') }}" method="POST" class="space-y-3">
                @csrf
                <input type="hidden" name="guide_id" value="{{ $guide->id }}">
                <textarea name="content" rows="3" required placeholder="Escreva um comentário sobre este guia..."
                          class="w-full p-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500"></textarea>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold">
                        Enviar Comentário
                    </button>
                </div>
            </form>
        @else
            <div class="p-4 rounded-xl bg-slate-900 text-center space-y-2 text-xs">
                <p class="text-slate-300">Faça login para comentar neste guia.</p>
                <a href="{{ route('login') }}" class="inline-block px-3.5 py-1.5 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-500">
                    Entrar
                </a>
            </div>
        @endauth

        <div class="space-y-3">
            @foreach($guide->comments as $comment)
                <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800 space-y-1 text-xs">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold text-indigo-300">👤 {{ $comment->user->name }}</span>
                        <span class="text-slate-400 text-[10px]">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-slate-300 leading-relaxed">{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
