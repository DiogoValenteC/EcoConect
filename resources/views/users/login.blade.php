@extends('layouts.app')

@section('title', 'Entrar')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-md mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold text-stone-900">Entrar</h1>
    <p class="text-stone-600 mt-1">Acesse sua conta para gerenciar projetos.</p>

    {{-- Somente visual por enquanto; ajuste o action quando ligar a rota --}}
    <form method="POST" action="#" class="mt-6 grid gap-4">
      @csrf

      <label class="grid gap-2">
        <span class="font-medium">E-mail</span>
        <input type="email" name="email" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="voce@exemplo.com" required>
      </label>

      <label class="grid gap-2">
        <span class="font-medium">Senha</span>
        <input type="password" name="password" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="••••••••" required>
      </label>

      <div class="flex items-center justify-between text-sm">
        <label class="inline-flex items-center gap-2">
          <input type="checkbox" name="remember" class="w-4 h-4">
          <span>Lembrar de mim</span>
        </label>
        <a href="{{ url('/password/forgot') }}" class="text-emerald-700 hover:underline">Esqueci minha senha</a>
      </div>

      <button type="submit" class="mt-2 px-5 py-2.5 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">
        Entrar
      </button>
    </form>

    <div class="mt-6 text-sm text-stone-700">
      <span>Não tem conta?</span>
      <a href="{{ url('/register') }}" class="text-emerald-700 hover:underline">Criar conta</a>
    </div>
  </div>
@endsection
