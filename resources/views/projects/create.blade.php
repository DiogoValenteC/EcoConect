@extends('layouts.app')

@section('title', 'Novo Projeto')

@section('NavBar')
    @include('components.Nav')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('content')
  <div class="max-w-3xl mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold text-stone-900">Criar novo projeto</h1>
    <p class="text-stone-600 mt-1">Preencha as informações abaixo para cadastrar um novo projeto.</p>

    {{-- Apenas HTML por enquanto. Quando ligar a rota, defina o action. --}}
    <form method="POST" action="#" enctype="multipart/form-data" class="mt-6 grid gap-4">
      @csrf

      <label class="grid gap-2">
        <span class="font-medium">Nome do projeto</span>
        <input type="text" name="name" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Ex.: Horta comunitária no bairro X" required>
      </label>

      <label class="grid gap-2">
        <span class="font-medium">Descrição</span>
        <textarea name="description" rows="5" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Explique objetivos, metodologia e impacto esperado" required></textarea>
      </label>

      <div class="grid sm:grid-cols-2 gap-4">
        <label class="grid gap-2">
          <span class="font-medium">Categoria</span>
          <select name="category" class="border border-stone-300 rounded-lg px-3 py-2" required>
            <option value="" selected disabled>Selecione</option>
            <option value="educacao">Educação</option>
            <option value="meioambiente">Meio ambiente</option>
            <option value="saude">Saúde</option>
            <option value="inovacao">Inovação</option>
            <option value="outros">Outros</option>
          </select>
        </label>

        <label class="grid gap-2">
          <span class="font-medium">Status</span>
          <select name="status" class="border border-stone-300 rounded-lg px-3 py-2" required>
            <option value="rascunho">Rascunho</option>
            <option value="andamento" selected>Em andamento</option>
            <option value="concluido">Concluído</option>
            <option value="inativo">Inativo</option>
          </select>
        </label>
      </div>

      <div class="grid sm:grid-cols-2 gap-4">
        <label class="grid gap-2">
          <span class="font-medium">UF</span>
          <select name="uf" class="border border-stone-300 rounded-lg px-3 py-2">
            <option value="" selected disabled>Selecione</option>
            <option>AC</option><option>AL</option><option>AP</option><option>AM</option>
            <option>BA</option><option>CE</option><option>DF</option><option>ES</option>
            <option>GO</option><option>MA</option><option>MT</option><option>MS</option>
            <option>MG</option><option>PA</option><option>PB</option><option>PR</option>
            <option>PE</option><option>PI</option><option>RJ</option><option>RN</option>
            <option>RS</option><option>RO</option><option>RR</option><option>SC</option>
            <option>SP</option><option>SE</option><option>TO</option>
          </select>
        </label>

        <label class="grid gap-2">
          <span class="font-medium">Município (opcional)</span>
          <input type="text" name="city" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Ex.: Belém">
        </label>
      </div>

      <div class="grid sm:grid-cols-3 gap-4">
        <label class="grid gap-2">
          <span class="font-medium">Início</span>
          <input type="date" name="start_date" class="border border-stone-300 rounded-lg px-3 py-2">
        </label>

        <label class="grid gap-2">
          <span class="font-medium">Duração (meses)</span>
          <input type="number" name="duration_months" min="0" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Ex.: 6">
        </label>

        <label class="grid gap-2">
          <span class="font-medium">Orçamento (R$)</span>
          <input type="number" step="0.01" name="budget" class="border border-stone-300 rounded-lg px-3 py-2" placeholder="Ex.: 120000,00">
        </label>
      </div>

      {{-- Materiais / anexos --}}
      <div class="grid gap-2">
        <span class="font-medium">Anexos (opcional)</span>
        <input type="file" name="attachments[]" multiple class="border border-stone-300 rounded-lg px-3 py-2 bg-white">
        <p class="text-xs text-stone-500">Aceita PDF, imagens e planilhas. Tamanho máx. por arquivo: 10MB.</p>
      </div>

      {{-- Temas de interesse (exemplo com checkboxes) --}}
      <fieldset class="grid gap-2">
        <legend class="font-medium">Temas (opcional)</legend>
        <div class="flex flex-wrap gap-4 text-sm">
          <label class="flex items-center gap-2">
            <input type="checkbox" name="themes[]" value="sustentabilidade" class="w-4 h-4">
            Sustentabilidade
          </label>
          <label class="flex items-center gap-2">
            <input type="checkbox" name="themes[]" value="educacao" class="w-4 h-4">
            Educação
          </label>
          <label class="flex items-center gap-2">
            <input type="checkbox" name="themes[]" value="saude" class="w-4 h-4">
            Saúde
          </label>
          <label class="flex items-center gap-2">
            <input type="checkbox" name="themes[]" value="inovacao" class="w-4 h-4">
            Inovação
          </label>
        </div>
      </fieldset>

      {{-- Termos --}}
      <label class="flex items-start gap-3 mt-2">
        <input type="checkbox" name="agree_terms" value="1" class="mt-1 w-4 h-4" required>
        <span class="text-sm text-stone-700">
          Declaro que as informações são verdadeiras e concordo com os termos de uso.
        </span>
      </label>

      <div class="flex gap-3 pt-2">
        <button type="submit" class="px-5 py-2.5 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">
          Criar projeto
        </button>
        <a href="{{ url('/projects') }}" class="px-5 py-2.5 rounded-lg border border-stone-300 hover:bg-stone-100">
          Cancelar
        </a>
      </div>
    </form>
  </div>
@endsection
