<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer__grid">
      <!-- Col 1: Company -->
      <div>
        <a href="{{ route('home') }}" aria-label="Pearlcon Rail Home">
          <img src="{{ asset('assets/img/logo.svg') }}" alt="Pearlcon Rail Services Ltd" class="footer__logo" width="200" height="40">
        </a>
        <p class="footer__tagline">Supporting Rail Companies Around the World</p>
        <p class="footer__desc">
          Specialist railway supply, sourcing, procurement, logistics, and consultancy company serving global rail operators across the UK, US, Europe, and Middle East.
        </p>
      </div>

      <!-- Col 2: Quick Links -->
      <div>
        <h3 class="footer__heading">Quick Links</h3>
        <ul class="footer__links">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{ route('why-us') }}">Why Us</a></li>
          <li><a href="{{ route('clients') }}">Clients</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>

      <!-- Col 3: Contact & Locations -->
      <div>
        <h3 class="footer__heading">Contact & Offices</h3>
        <div class="footer__contact-item">
          <span>📍</span>
          <span><strong>UK Office:</strong> 38F Chigwell Lane, Oakhill Industrial Estate, Loughton IG10 3NY, UK</span>
        </div>
        <div class="footer__contact-item">
          <span>📍</span>
          <span><strong>Saudi Arabia:</strong> Pearlcon LLC, 2996 Najd Street, Al Tubayshi, Dammam 32233, Saudi Arabia</span>
        </div>
        <div class="footer__contact-item">
          <span>📞</span>
          <span>+44 (0) 1234 440 530</span>
        </div>
        <div class="footer__contact-item">
          <span>✉</span>
          <span>sales@pearlcon.com</span>
        </div>
        <div class="footer__contact-item">
          <span>🌐</span>
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
