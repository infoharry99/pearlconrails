<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Pearlcon Rail Services Ltd — Global Railway Procurement & Supply')</title>
  <meta name="description" content="@yield('meta_description', 'Pearlcon Rail Services provides global railway procurement, component sourcing, and supply chain solutions across UK, US, Europe, and Middle East.')">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="@yield('canonical', url()->current())">

  <!-- JSON-LD Structured Data (Schema.org) for SEO 100% Health -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://pearlconrail.co.uk/#organization",
        "name": "Pearlcon Rail Services Ltd",
        "url": "https://pearlconrail.co.uk",
        "logo": "https://pearlconrail.co.uk/logo.svg",
        "description": "UK-based specialist railway procurement, sourcing, and supply-chain logistics company.",
        "telephone": "+44-1234-440530",
        "email": "sales@pearlcon.com",
        "address": [
          {
            "@type": "PostalAddress",
            "streetAddress": "38F Chigwell Lane, Oakhill Industrial Estate",
            "addressLocality": "Loughton",
            "postalCode": "IG10 3NY",
            "addressCountry": "UK"
          },
          {
            "@type": "PostalAddress",
            "streetAddress": "Pearlcon LLC, 2996 Najd Street, Al Tubayshi",
            "addressLocality": "Dammam",
            "postalCode": "32233",
            "addressCountry": "SA"
          }
        ]
      },
      {
        "@type": "WebSite",
        "@id": "https://pearlconrail.co.uk/#website",
        "url": "https://pearlconrail.co.uk",
        "name": "Pearlcon Rail Services",
        "publisher": {
          "@id": "https://pearlconrail.co.uk/#organization"
        }
      }
    ]
  }
  </script>

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