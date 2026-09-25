<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer__grid">
      <!-- Col 1: Company -->
      <div>
        <a href="{{ route('home') }}" aria-label="Pearlcon Rail Home">
          <img src="{{ asset('logo.svg') }}" alt="Pearlcon Rail Services Ltd" class="footer__logo" width="240" height="48">
        </a>
        <p class="footer__tagline">AI-Driven Rail Procurement & Global Sourcing</p>
        <p class="footer__desc">
          Specialist railway supply, sourcing, procurement, logistics, and consultancy company serving global rail operators across the UK, US, Europe, and Middle East.
        </p>
      </div>

      <!-- Col 2: Quick Links -->
      <div>
        <h3 class="footer__heading">Quick Links</h3>
        <ul class="footer__links">
          <li><a href="{{ route('home') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Home</a></li>
          <li><a href="{{ route('about') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> About</a></li>
          <li><a href="{{ route('services') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Services</a></li>
          <li><a href="{{ route('products') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Products</a></li>
          <li><a href="{{ route('why-us') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Why Us</a></li>
          <li><a href="{{ route('clients') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Clients</a></li>
          <li><a href="{{ route('contact') }}"><i class="fa-solid fa-chevron-right text-xs me-1 text-lime"></i> Contact</a></li>
        </ul>
      </div>

      <!-- Col 3: Contact & Locations -->
      <div>
        <h3 class="footer__heading">Contact & Offices</h3>
        <div class="footer__contact-item">
          <i class="fa-solid fa-location-dot text-lime"></i>
          <span><strong>UK Office:</strong> 38F Chigwell Lane, Oakhill Industrial Estate, Loughton IG10 3NY, UK</span>
        </div>
        <div class="footer__contact-item">
          <i class="fa-solid fa-building-flag text-lime"></i>
          <span><strong>Saudi Arabia:</strong> Pearlcon LLC, 2996 Najd Street, Al Tubayshi, Dammam 32233, Saudi Arabia</span>
        </div>
        <div class="footer__contact-item">
          <i class="fa-solid fa-phone text-lime"></i>
          <span>+44 (0) 1234 440 530</span>
        </div>
        <div class="footer__contact-item">
          <i class="fa-solid fa-envelope text-lime"></i>
          <span>sales@pearlcon.com</span>
        </div>
        <div class="footer__contact-item">
          <i class="fa-solid fa-globe text-lime"></i>
          <span>pearlconrail.co.uk</span>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer__bottom">
      <div class="footer__bottom-inner">
        <div>&copy; {{ date('Y') }} Pearlcon Rail Services Ltd. All rights reserved.</div>
        <div>UK · US · Europe · Saudi Arabia</div>
      </div>
    </div>
  </div>
</footer>
