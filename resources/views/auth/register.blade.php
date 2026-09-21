@extends('layouts.app')

@section('title', 'Criar Conta - Grand Fantasia Wiki')

@section('content')
<div class="max-w-md mx-auto py-10 space-y-6">

    <div class="glass-panel p-8 rounded-2xl border border-indigo-500/30 shadow-2xl space-y-6">
        <div class="text-center space-y-2">
            <h1 class="font-heading font-extrabold text-2xl text-white">
                Criar Conta de Jogador
            </h1>
            <p class="text-slate-400 text-xs">
                Junte-se à comunidade de Grand Fantasia para compartilhar guias e macetes de trívias.
            </p>
        </div>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Nome de Jogador / Nick *</label>
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Ex: Swain"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                @error('name')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">E-mail *</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="seu@email.com"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                @error('email')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Senha *</label>
                <input type="password" name="password" required placeholder="Mínimo 6 caracteres"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                @error('password')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Confirmar Senha *</label>
                <input type="password" name="password_confirmation" required placeholder="Repita a senha"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow-lg shadow-emerald-900/30 transition-all">
                Cadastrar Conta
            </button>
        </form>

        <div class="text-center text-xs text-slate-400 border-t border-slate-800 pt-4">
            Já possui uma conta? 
            <a href="{{ route('login') }}" class="text-indigo-400 font-semibold hover:underline">
                Faça login
            </a>
        </div>
    </div>

</div>
@endsection
