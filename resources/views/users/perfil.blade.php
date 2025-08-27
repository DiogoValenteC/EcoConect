@extends('layouts.app')

@section('title', 'Perfil do Usuário')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-3xl mx-auto bg-white rounded-lg shadow p-6">
    <div class="flex items-center gap-6">
      {{-- Foto do usuário --}}
      <img src="https://via.placeholder.com/120" alt="Foto do usuário" class="w-28 h-28 rounded-full border">

      <div>
        <h1 class="text-2xl font-bold text-stone-900">Nome do Usuário</h1>
        <p class="text-stone-600">email@exemplo.com</p>
        <p class="text-sm text-stone-500 mt-1">Função: Administrador</p>
      </div>
    </div>

    <hr class="my-6">

    {{-- Informações adicionais --}}
    <div class="grid gap-4">
      <div>
        <h2 class="text-lg font-semibold">Sobre</h2>
        <p class="text-stone-700 mt-1">Aqui vai uma breve descrição ou biografia do usuário.</p>
      </div>

      <div>
        <h2 class="text-lg font-semibold">Projetos relacionados</h2>
        <ul class="list-disc list-inside text-stone-700 mt-1">
          <li>Projeto 1</li>
          <li>Projeto 2</li>
          <li>Projeto 3</li>
        </ul>
      </div>
    </div>

    <div class="mt-6 flex gap-3">
      <a href="{{ url('/users/edit') }}" class="px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">Editar Perfil</a>
      <a href="{{ url('/logout') }}" class="px-4 py-2 rounded-lg border border-stone-300 hover:bg-stone-100">Sair</a>
    </div>
  </div>
@endsection
