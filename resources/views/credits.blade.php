@extends('layouts.app')

@section('title', 'Créditos - Grand Fantasia Wiki')

@section('content')
<div class="max-w-4xl mx-auto space-y-6 py-6">

    <div class="glass-panel p-8 sm:p-10 rounded-2xl border border-indigo-500/30 shadow-2xl space-y-6 text-center sm:text-left">
        <div class="flex flex-col sm:flex-row items-center gap-6">
            <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-amber-500 via-indigo-600 to-emerald-500 text-white font-extrabold font-heading text-3xl flex items-center justify-center shadow-xl shadow-indigo-500/30">
                ✨
            </div>
            <div class="space-y-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-300 text-xs font-semibold">
                    🏆 CRÉDITOS & AGRADECIMENTOS
                </div>
                <h1 class="font-heading font-extrabold text-3xl text-white">
                    Créditos da Wiki de Trívias
                </h1>
                <p class="text-slate-400 text-xs sm:text-sm">
                    Reconhecimento oficial pela curadoria e organização das trívias de Grand Fantasia.
                </p>
            </div>
        </div>

        <div class="border-t border-slate-800 pt-6 space-y-4 text-slate-300 text-xs sm:text-sm leading-relaxed">
            <div class="p-5 rounded-xl bg-slate-900/90 border border-indigo-500/30 space-y-2">
                <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                    👤 Autor e Compilador
                </h2>
                <p class="text-indigo-300 font-semibold text-base">
                    Rafael G C Santos
                </p>
                <p class="text-slate-400 text-xs">
                    Todo o conteúdo inicial, compilação de passos, coordenadas, itens e dados de trívias cobrindo as regiões de <strong>Kaslow, Ilya, Jale, Elsaland, Saphael, Abertura do Tempo, Dimensão Alternativa, Tormentum e Ilha Sprite</strong> foram organizados e disponibilizados através da planilha compartilhada por <strong>Rafael G C Santos</strong>.
                </p>
            </div>

            <div class="space-y-3 pt-2">
                <h3 class="font-heading font-bold text-white text-base">
                    🗺️ Cobertura do Conteúdo Inicial:
                </h3>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-300 font-medium">
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Kaslow</strong> (Baía Azul, Planície Kaslow, Floresta Sprite, Platô Belcar, Caverna do Ecossistema...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Ilya</strong> (Bosque Lunar, Cordilheira Juncos, Vale da Mina de Ouro...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Jale</strong> (Pântano Vaporoso, Península do Fogo...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Elsaland</strong> (Neve Eterna...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Saphael</strong> (Terras Centrais...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Abertura do Tempo</strong> (Kaslow Antiga...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Dimensão Alternativa</strong> (Kaslow Alternativa...)
                    </li>
                    <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                        <span>📍</span> <strong>Tormentum & Ilha Sprite</strong> (Abismo do Tormento, Santuário Sprite...)
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-4 text-center">
            <a href="{{ route('trivias.index') }}" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-lg shadow-indigo-600/30 transition-all">
                ← Voltar para o Explorador de Trívias
            </a>
        </div>
    </div>

</div>
@endsection
