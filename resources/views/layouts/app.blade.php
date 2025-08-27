{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'EcoConect')</title>

  {{-- Tailwind via CDN apenas para protótipo (depois troque por Vite) --}}
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- Slot opcional para estilos adicionais por página --}}
  @yield('styles')
</head>
<body class="min-h-screen bg-stone-50 text-stone-900 flex flex-col">

  {{-- Navbar simples (pode trocar por @include('components.nav') futuramente) --}}
@yield('NavBar')

  {{-- Conteúdo dinâmico das páginas filhas --}}
  <main class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-8 grow">
    @yield('content')
  </main>

  {{-- Rodapé simples (pode trocar por @include('components.footer') futuramente) --}}
 
@yield('footer')
  {{-- Slot opcional para scripts adicionais por página --}}
  @yield('scripts')
</body>
</html>
