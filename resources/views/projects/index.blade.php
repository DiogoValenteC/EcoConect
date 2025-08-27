@extends('layouts.app')

@section('title', 'Projetos')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-5xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-bold text-stone-900">Projetos</h1>
      <a href="{{ url('/projects/create') }}" 
         class="px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">
        Novo Projeto
      </a>
    </div>

    {{-- Tabela de projetos --}}
    <div class="bg-white shadow rounded-lg overflow-hidden">
      <table class="w-full text-left border-collapse">
        <thead class="bg-stone-100 text-stone-700">
          <tr>
            <th class="p-3">Nome</th>
            <th class="p-3">Responsável</th>
            <th class="p-3">Status</th>
            <th class="p-3">Ações</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-stone-200">
          <tr>
            <td class="p-3">Projeto A</td>
            <td class="p-3">Maria Silva</td>
            <td class="p-3"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded">Ativo</span></td>
            <td class="p-3 flex gap-2">
              <a href="{{ url('/projects/1') }}" class="text-emerald-700 hover:underline">Ver</a>
              <a href="{{ url('/projects/1/edit') }}" class="text-blue-600 hover:underline">Editar</a>
            </td>
          </tr>
          <tr>
            <td class="p-3">Projeto B</td>
            <td class="p-3">João Santos</td>
            <td class="p-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded">Em andamento</span></td>
            <td class="p-3 flex gap-2">
              <a href="{{ url('/projects/2') }}" class="text-emerald-700 hover:underline">Ver</a>
              <a href="{{ url('/projects/2/edit') }}" class="text-blue-600 hover:underline">Editar</a>
            </td>
          </tr>
          <tr>
            <td class="p-3">Projeto C</td>
            <td class="p-3">Ana Souza</td>
            <td class="p-3"><span class="px-2 py-1 bg-red-100 text-red-700 rounded">Inativo</span></td>
            <td class="p-3 flex gap-2">
              <a href="{{ url('/projects/3') }}" class="text-emerald-700 hover:underline">Ver</a>
              <a href="{{ url('/projects/3/edit') }}" class="text-blue-600 hover:underline">Editar</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
