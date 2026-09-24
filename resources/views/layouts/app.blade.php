<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Pearlcon Rail Services Ltd — Global Railway Procurement & Supply')</title>
  <meta name="description" content="@yield('meta_description', 'Pearlcon Rail Services is a UK-based specialist supplying, sourcing, and procurement company for the global railway sector. Serving Network Rail, HS2, London Underground, and Saudi Arabian Railway.')">
  <link rel="canonical" href="@yield('canonical', url()->current())">

  <!-- Google Fonts: Inter & Barlow Condensed -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/svg+xml" href="{{ asset('assets/img/favicon.svg') }}">
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
