@extends('layouts.app')

@section('title', 'Entrar - Grand Fantasia Wiki')

@section('content')
<div class="max-w-md mx-auto py-10 space-y-6">

    <div class="glass-panel p-8 rounded-2xl border border-indigo-500/30 shadow-2xl space-y-6">
        <div class="text-center space-y-2">
            <div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white font-extrabold font-heading text-2xl flex items-center justify-center mx-auto shadow-lg shadow-indigo-600/30">
                GF
            </div>
            <h1 class="font-heading font-extrabold text-2xl text-white">
                Acesse sua Conta
            </h1>
            <p class="text-slate-400 text-xs">
                Faça login para publicar novos guias e comentar nas trívias de Grand Fantasia.
            </p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">E-mail</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="seu@email.com"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
                @error('email')
                    <span class="text-red-400 text-[11px]">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-semibold text-slate-300">Senha</label>
                <input type="password" name="password" required placeholder="••••••••"
                       class="w-full p-3 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs sm:text-sm focus:outline-none focus:border-indigo-500">
            </div>

            <div class="flex items-center justify-between text-xs text-slate-400">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" class="rounded bg-slate-900 border-slate-700 text-indigo-600">
                    <span>Lembrar-me</span>
                </label>
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold shadow-lg shadow-indigo-600/30 transition-all">
                Entrar na Wiki
            </button>
        </form>

        <div class="text-center text-xs text-slate-400 border-t border-slate-800 pt-4">
            Ainda não possui uma conta? 
            <a href="{{ route('register') }}" class="text-indigo-400 font-semibold hover:underline">
                Cadastre-se grátis
            </a>
        </div>
    </div>

</div>
@endsection
