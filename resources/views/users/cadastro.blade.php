@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('content')
<h1 class="text-2xl font-semibold">Cadastrar usuário</h1>
<p class="text-stone-700 mt-1">Preencha os campos abaixo para criar uma nova conta.</p>

{{-- formulário apenas com HTML, ainda sem action/rota --}}
<form method="POST" class="mt-6 grid gap-4 max-w-xl">
    @csrf

    <label class="grid gap-2">
        <span>Nome</span>
        <input type="text" name="name" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Nome completo" required>
    </label>

    <label class="grid gap-2">
        <span>E-mail</span>
        <input type="email" name="email" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="email@exemplo.com" required>
    </label>

    <label class="grid gap-2">
        <span>Senha</span>
        <input type="password" name="password" class="border border-stone-300 rounded-lg px-3 py-2" required>
    </label>

    <label class="grid gap-2">
        <span>Confirmar senha</span>
        <input type="password" name="password_confirmation" class="border border-stone-300 rounded-lg px-3 py-2" required>
    </label>

   

    <label for="grid gap-2">
        <span>Tem interesse em ser colaborador de projetos?</span>
        <input type="checkbox">
    </label>



    <div class="flex gap-3 pt-2">
        <button type="submit" class="px-5 py-2.5 rounded-lg bg-stone-900 text-white">Criar usuário</button>
        <button type="reset" class="px-5 py-2.5 rounded-lg border border-stone-300 hover:bg-stone-100">Cancelar</button>
    </div>
</form>
@endsection

@section('footer')
    @include('components.footer')
@endsection
