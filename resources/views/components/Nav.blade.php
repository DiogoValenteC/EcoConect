

@section('NavBar')
  <header class="bg-white border-b border-stone-200/70">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
      <a href="{{ url('/') }}" class="font-semibold tracking-tight text-emerald-700">EcoConect</a>
      <nav class="hidden md:flex items-center gap-6 text-sm">
        <a href="{{ url('/projetos') }}" class="hover:text-emerald-700">Projetos</a>
        <a href="{{ url('/colaboracoes') }}" class="hover:text-emerald-700">Colaborações</a>
        <a href="{{ url('/patrocinadores') }}" class="hover:text-emerald-700">Patrocinadores</a>
        <a href="{{ url('/sobre') }}" class="hover:text-emerald-700">Sobre</a>
        <a href="{{ url('/contato') }}" class="hover:text-emerald-700">Contato</a>
      </nav>
    </div>
  </header>
@endsection