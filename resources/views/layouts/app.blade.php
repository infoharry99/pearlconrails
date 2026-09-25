<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Pearlcon Rail Services Ltd — Global Railway Procurement & Supply')</title>
  <meta name="description" content="@yield('meta_description', 'Pearlcon Rail Services is a UK-based specialist supplying, sourcing, and procurement company for the global railway sector. Serving Network Rail, HS2, London Underground, and Saudi Arabian Railway.')">
  <link rel="canonical" href="@yield('canonical', url()->current())">

  <!-- Google Fonts: Space Grotesk (single global font family for the whole site) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <!-- FontAwesome 6 Icons CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('styles')
</head>
<body>
  <!-- Accessible Skip Link -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <!-- Header & Navigation -->
  @include('partials.nav')

  <!-- Main Content -->
  <main id="main-content">
    @yield('content')
  </main>

  <!-- Footer -->
  @include('partials.footer')

  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>