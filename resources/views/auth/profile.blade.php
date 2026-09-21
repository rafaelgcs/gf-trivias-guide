@extends('layouts.app')

@section('title', 'Perfil de ' . $user->name . ' - Grand Fantasia Wiki')

@section('content')
<div class="max-w-5xl mx-auto space-y-6">

    <!-- Profile Header Banner -->
    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-indigo-500/30 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-4">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white font-extrabold font-heading text-2xl flex items-center justify-center shadow-lg shadow-indigo-500/30">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div>
                <h1 class="font-heading font-extrabold text-2xl text-white">
                    {{ $user->name }}
                </h1>
                <p class="text-slate-400 text-xs">
                    Membro desde {{ $user->created_at->format('M Y') }} • {{ $user->email }}
                </p>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="flex items-center gap-4 text-center">
            <div class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 min-w-[100px]">
                <div class="text-xl font-bold font-mono text-amber-400">{{ $completedPoints }}</div>
                <div class="text-[10px] text-slate-400 uppercase font-semibold">Pontos Trívias</div>
            </div>
            <div class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 min-w-[100px]">
                <div class="text-xl font-bold font-mono text-indigo-400">{{ $completedTrivias->count() }}</div>
                <div class="text-[10px] text-slate-400 uppercase font-semibold">Concluídas</div>
            </div>
            <div class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 min-w-[100px]">
                <div class="text-xl font-bold font-mono text-teal-400">{{ $user->guides->count() }}</div>
                <div class="text-[10px] text-slate-400 uppercase font-semibold">Guias Criados</div>
            </div>
        </div>
    </div>

    <!-- Grid: Completed Trivias & User Guides -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Completed Trivias List -->
        <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                <span>✅ Trívias Concluídas</span>
                <span class="text-xs text-slate-400">({{ $completedTrivias->count() }})</span>
            </h2>

            @if($completedTrivias->isEmpty())
                <p class="text-slate-400 text-xs py-4 text-center">Você ainda não marcou nenhuma trívia como concluída.</p>
            @else
                <div class="space-y-2 max-h-[400px] overflow-y-auto pr-1">
                    @foreach($completedTrivias as $trivia)
                        <a href="{{ route('trivias.show', $trivia->id) }}" class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 flex items-center justify-between text-xs hover:border-indigo-500/40 transition-all block">
                            <div>
                                <span class="font-medium text-slate-200 block">{{ $trivia->item_title }}</span>
                                <span class="text-[10px] text-slate-400">📍 {{ $trivia->zone->name }}</span>
                            </div>
                            <span class="text-emerald-400 font-bold">+2 Pts</span>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Created Guides List -->
        <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                    <span>📚 Guias Publicados</span>
                    <span class="text-xs text-slate-400">({{ $user->guides->count() }})</span>
                </h2>
                <a href="{{ route('guides.create') }}" class="text-xs text-indigo-400 hover:underline font-semibold">
                    + Novo Guia
                </a>
            </div>

            @if($user->guides->isEmpty())
                <p class="text-slate-400 text-xs py-4 text-center">Você ainda não publicou nenhum guia da comunidade.</p>
            @else
                <div class="space-y-2 max-h-[400px] overflow-y-auto pr-1">
                    @foreach($user->guides as $guide)
                        <a href="{{ route('guides.show', $guide->slug) }}" class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 text-xs hover:border-indigo-500/40 transition-all block space-y-1">
                            <span class="font-medium text-slate-200 block">{{ $guide->title }}</span>
                            <div class="flex items-center justify-between text-[10px] text-slate-400">
                                <span>{{ $guide->created_at->format('d/m/Y') }}</span>
                                <span>👁️ {{ $guide->views_count }} views</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

    </div>

</div>
@endsection
