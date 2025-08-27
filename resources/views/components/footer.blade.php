@section('footer')
<footer class="bg-white border-t border-stone-200/70">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-8 text-sm text-stone-600 flex flex-col sm:flex-row justify-between gap-4">
      <p>&copy; {{ date('Y') }} EcoConect</p>
      <div class="flex gap-4">
        <a href="{{ url('/sobre') }}" class="hover:text-stone-900">Sobre</a>
        <a href="{{ url('/contato') }}" class="hover:text-stone-900">Contato</a>
      </div>
    </div>
  </footer>
@endsection