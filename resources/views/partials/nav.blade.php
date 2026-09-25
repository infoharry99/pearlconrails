<header class="nav" role="banner">
  <div class="container nav__inner">
    <a href="{{ route('home') }}" class="nav__brand" aria-label="Pearlcon Rail Home">
      <img src="{{ asset('logo.svg') }}" alt="Pearlcon Rail Services Ltd" class="nav__logo-svg" width="260" height="52">
    </a>

    <nav role="navigation" aria-label="Primary Navigation">
      <ul class="nav__links">
        <li><a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="nav__link {{ request()->routeIs('about') ? 'is-active' : '' }}">About</a></li>
        <li><a href="{{ route('services') }}" class="nav__link {{ request()->routeIs('services') ? 'is-active' : '' }}">Services</a></li>
        <li><a href="{{ route('products') }}" class="nav__link {{ request()->routeIs('products') ? 'is-active' : '' }}">Products</a></li>
        <li><a href="{{ route('why-us') }}" class="nav__link {{ request()->routeIs('why-us') ? 'is-active' : '' }}">Why Us</a></li>
        <li><a href="{{ route('clients') }}" class="nav__link {{ request()->routeIs('clients') ? 'is-active' : '' }}">Clients</a></li>
        <li><a href="{{ route('contact') }}" class="nav__link {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a></li>
      </ul>
    </nav>

    <div class="nav__actions">
      <a href="{{ route('contact') }}" class="btn btn--primary"><i class="fa-solid fa-paper-plane me-2"></i> Get a Quote</a>
      <button class="nav__mobile-toggle" aria-expanded="false" aria-label="Toggle navigation menu">
        <i class="fa-solid fa-bars text-xl"></i>
      </button>
    </div>
  </div>
</header>