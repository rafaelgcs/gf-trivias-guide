@extends('layouts.app')

@section('title', 'Créditos - Grand Fantasia Wiki')

@section('content')
    <div class="max-w-4xl mx-auto space-y-6 py-6">

        <div
            class="glass-panel p-8 sm:p-10 rounded-2xl border border-indigo-500/30 shadow-2xl space-y-6 text-center sm:text-left">
            <div class="flex flex-col sm:flex-row items-center gap-6">
                <div
                    class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-amber-500 via-indigo-600 to-emerald-500 text-white font-extrabold font-heading text-3xl flex items-center justify-center shadow-xl shadow-indigo-500/30">
                    ✨
                </div>
                <div class="space-y-1">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-300 text-xs font-semibold">
                        🏆 CRÉDITOS & AGRADECIMENTOS
                    </div>
                    <h1 class="font-heading font-extrabold text-3xl text-white">
                        Créditos da Wiki de Trívias
                    </h1>
                    <p class="text-slate-400 text-xs sm:text-sm">
                        Reconhecimento oficial pelos dados das trívias de Grand Fantasia.
                    </p>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-6 space-y-6 text-slate-300 text-xs sm:text-sm leading-relaxed">
                <!-- Content Source Credit -->
                <div class="p-5 rounded-xl bg-indigo-950/40 border border-indigo-500/30 space-y-2">
                    <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                        📜 Fonte Original dos Dados de Trívias
                    </h2>
                    <p class="text-amber-400 font-semibold text-base">
                        [GS]Swain — Grand Fantasia Last Echo (Planilha atualizada em 2024)
                    </p>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Todo o conteúdo das trívias, passo a passo, NPCs, coordenadas e itens requeridos foi baseado na
                        planilha oficial atualizada em 2024 criada por <strong>[GS]Swain</strong> da comunidade do
                        <strong>Grand Fantasia Last Echo</strong>.
                    </p>
                </div>

                <!-- Developer Credit -->
                <div class="p-5 rounded-xl bg-slate-900/90 border border-slate-800 space-y-2">
                    <h2 class="font-heading font-bold text-lg text-white flex items-center gap-2">
                        💻 Desenvolvimento da Aplicação Web
                    </h2>
                    <p class="text-indigo-300 font-semibold text-base">
                        Rafael G C Santos
                    </p>
                    <p class="text-slate-400 text-xs">
                        Desenvolvimento da plataforma web, arquitetura da aplicação, busca dinâmica, sistema de
                        acompanhamento de progresso de conquistas e interface responsiva.
                    </p>
                </div>

                <!-- Regions List -->
                <div class="space-y-3 pt-2">
                    <h3 class="font-heading font-bold text-white text-base">
                        🗺️ Regiões Mapeadas da Planilha (2024):
                    </h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-300 font-medium">
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Kaslow</strong> (Baía Azul, Planície Kaslow, Floresta Sprite, Platô
                            Belcar, Floresta da Praga)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Ilya</strong> (Monte Shell, Floresta Luz da Lua, Floresta Antiga,
                            Pântano Negro)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Jale</strong> (Praia Roda de Ferro, Montanha Mina de Vapor, Cordilheira
                            Vermelha, Ilha do Sul, Ilha Angoya)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Elsaland</strong> (Vale dos Cavaleiros, Montanhas Eternas, Fronteira do
                            Esquecimento, Floresta do Inverno, Ruínas Polares Antigas, Baía de Auris)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Saphael</strong> (Terra dos Suspiros, Pantano Sombrio, Bosque de Gaia,
                            Deserto do Vento Abrasador, Montanhas Perdidas, Cordilheira Blakatoa)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Abertura do Tempo</strong> (Baía Encharcada de Sangue, Floresta Lágrima
                            de Sprite, Deserto de Kaslow, Península da Aflição, Montanha das Geleiras, Platô dos Sonhos...)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Dimensão Alternativa</strong> (Praia Roda de Ferro, Montanha Mina de
                            Vapor, Cordilheira Vermelha, Floresta Sprite, Floresta da Praga...)
                        </li>
                        <li class="p-2.5 rounded-lg bg-slate-900 border border-slate-800 flex items-center gap-2">
                            <span>📍</span> <strong>Tormentum & Ilha Sprite</strong> (Vale dos Espíritos, Platô Nebuloso,
                            Banco de Areia Dourado, Aldeia Aura Ilusória...)
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-4 text-center">
                <a href="{{ route('trivias.index') }}"
                    class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-lg shadow-indigo-600/30 transition-all">
                    ← Voltar para o Explorador de Trívias
                </a>
            </div>
        </div>

    </div>
@endsection