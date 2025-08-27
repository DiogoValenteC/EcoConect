@extends('layouts.app')

@section('title', 'Projeto — Visualização')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-5xl mx-auto">
    <a href="{{ url('/projects') }}" class="text-sm text-stone-600 hover:underline">&larr; Voltar</a>

    {{-- Cabeçalho do projeto --}}
    <header class="mt-2">
      <h1 class="text-3xl font-bold text-stone-900">Título do Projeto</h1>
      <p class="text-stone-600">
        Publicado por
        <a href="{{ url('/users/1') }}" class="text-emerald-700 hover:underline">Nome do Autor</a>
        • Atualizado em 01/08/2025
      </p>
      <div class="mt-3 flex flex-wrap gap-2">
        <span class="px-2 py-1 text-xs rounded-full bg-emerald-100 text-emerald-800">Categoria: Educação</span>
        <span class="px-2 py-1 text-xs rounded-full bg-stone-100 text-stone-700">Status: Em andamento</span>
        <span class="px-2 py-1 text-xs rounded-full bg-stone-100 text-stone-700">UF: PA</span>
      </div>
    </header>

    <div class="mt-6 grid lg:grid-cols-3 gap-6">
      {{-- Conteúdo principal --}}
      <article class="lg:col-span-2 bg-white rounded-lg shadow p-6">
        <h2 class="font-semibold text-stone-900">Descrição</h2>
        <p class="mt-2 text-stone-700 leading-relaxed">
          Texto de descrição do projeto para leitura pública. Explique objetivos, metodologia,
          impacto esperado e indicadores de sucesso.
        </p>

        <h3 class="mt-6 font-semibold text-stone-900">Objetivos</h3>
        <ul class="mt-2 list-disc list-inside text-stone-700">
          <li>Objetivo 1 do projeto</li>
          <li>Objetivo 2 do projeto</li>
          <li>Objetivo 3 do projeto</li>
        </ul>

        <h3 class="mt-6 font-semibold text-stone-900">Materiais</h3>
        <ul class="mt-2 space-y-2 text-emerald-700">
          <li><a href="#" class="hover:underline">PDF detalhado do projeto</a></li>
          <li><a href="#" class="hover:underline">Planilha de orçamento (XLSX)</a></li>
          <li><a href="#" class="hover:underline">Galeria de imagens</a></li>
          <li><a href="#" class="hover:underline">Vídeo de apresentação</a></li>
        </ul>

        <h3 class="mt-6 font-semibold text-stone-900">Equipe</h3>
        <ul class="mt-2 text-stone-700 space-y-1">
          <li>Coordenador(a): Maria Silva</li>
          <li>Pesquisador(a): João Santos</li>
          <li>Voluntário(a): Ana Souza</li>
        </ul>
      </article>

      {{-- Lateral / CTA --}}
      <aside class="bg-white rounded-lg shadow p-6">
        <h3 class="font-semibold text-stone-900">Quero apoiar</h3>
        <p class="text-sm text-stone-700 mt-1">
          Interessado em colaborar ou patrocinar este projeto?
        </p>
        <div class="mt-3 grid gap-2">
          <a href="{{ url('/projects/1/interest') }}"
             class="px-4 py-2 rounded-lg bg-emerald-600 text-white text-center hover:bg-emerald-700">
            Enviar interesse
          </a>
          <a href="{{ url('/contato') }}"
             class="px-4 py-2 rounded-lg border border-stone-300 text-center hover:bg-stone-100">
            Entrar em contato
          </a>
        </div>

        <hr class="my-6">

        <h4 class="font-semibold text-stone-900">Informações</h4>
        <dl class="mt-2 text-sm text-stone-700 space-y-1">
          <div class="flex justify-between"><dt>Início:</dt><dd>10/05/2025</dd></div>
          <div class="flex justify-between"><dt>Duração:</dt><dd>8 meses</dd></div>
          <div class="flex justify-between"><dt>Orçamento:</dt><dd>R$ 120.000</dd></div>
        </dl>

        <p class="mt-6 text-xs text-stone-500">
          * Esta é uma visualização somente leitura (sem permissão de edição).
        </p>
      </aside>
    </div>
  </div>
@endsection
