@extends('layouts.app')

@section('title', 'Criar Novo Guia - Grand Fantasia Wiki')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">

    <div>
        <a href="{{ route('guides.index') }}" class="text-xs font-semibold text-slate-400 hover:text-indigo-400 transition-colors">
            ← Voltar para Guias
        </a>
    </div>

    <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-indigo-500/30 shadow-2xl space-y-6">
        <div>
            <h1 class="font-heading font-extrabold text-2xl text-white">
                ✍️ Compartilhar Novo Guia / Tutorial
            </h1>
            <p class="text-slate-400 text-xs mt-1">
                Escreva um passo a passo detalhado, dica de horário ou truque para ajudar outros jogadores de Grand Fantasia.
            </p>
        </div>

        <form action="{{ route('guides.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Title -->
            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Título do Guia *</label>
                <input type="text" name="title" value="{{ old('title') }}" required placeholder="Ex: Como completar a Trívia do Mackerel sem gastar muito tempo"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                @error('title')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <!-- Associated Trivia -->
            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Trívia Relacionada (Opcional)</label>
                <select name="trivia_id" class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                    <option value="">Nenhuma (Guia Geral de Trívias)</option>
                    @foreach($trivias as $t)
                        <option value="{{ $t->id }}" {{ old('trivia_id') == $t->id ? 'selected' : '' }}>
                            [{{ $t->zone->name }}] {{ $t->item_title }} ({{ $t->history_title }})
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Content -->
            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Conteúdo do Guia (Suporta Markdown básico) *</label>
                <textarea name="content" rows="10" required placeholder="Descreva os passos, NPCs envolvidos, dicas de segurança e localização exata..."
                          class="w-full p-4 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-400 text-xs sm:text-sm focus:outline-none focus:border-indigo-500 font-sans leading-relaxed">{{ old('content') }}</textarea>
                @error('content')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('guides.index') }}" class="px-4 py-2.5 text-xs text-slate-400 hover:text-white transition-colors">
                    Cancelar
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-lg shadow-emerald-900/30 transition-all">
                    Publicar Guia na Wiki
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
