@extends('layouts.app')

@section('title', 'Editar Projeto')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-3xl mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold text-stone-900 mb-6">Editar Projeto</h1>

    {{-- formulário de edição --}}
    <form method="POST" action="{{ url('/projects/update/1') }}" class="grid gap-4">
      @csrf
      @method('PUT')

      <label class="grid gap-2">
        <span>Nome do projeto</span>
        <input type="text" name="name" value="Projeto A" 
               class="border border-stone-300 rounded-lg px-3 py-2" required>
      </label>

      <label class="grid gap-2">
        <span>Descrição</span>
        <textarea name="description" rows="4"
                  class="border border-stone-300 rounded-lg px-3 py-2" required>Descrição atual do projeto...</textarea>
      </label>

      <label class="grid gap-2">
        <span>Responsável</span>
        <input type="text" name="owner" value="Maria Silva"
               class="border border-stone-300 rounded-lg px-3 py-2" required>
      </label>

      <label class="grid gap-2">
        <span>Status</span>
        <select name="status" class="border border-stone-300 rounded-lg
