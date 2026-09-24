@extends('layouts.app')

@section('title', 'About Pearlcon Rail Services — UK Railway Procurement Specialists')
@section('meta_description', 'Learn about Pearlcon Rail Services Ltd, a UK-registered specialist supplying and sourcing company for the global railway and transport sector.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>About</span>
    </div>
    <h1>About Pearlcon Rail</h1>
    <p>Your sourcing partner for the global rail industry</p>
  </div>
</section>

<!-- Company Overview -->
<section class="section section--light" aria-labelledby="company-overview-heading">
  <div class="container">
    <div class="grid-2" style="grid-template-columns: 1.6fr 1fr; align-items: center; gap: 48px;">
      <div>
        <span class="eyebrow" style="color: var(--color-navy);">Corporate Profile</span>
        <h2 id="company-overview-heading" style="color: var(--color-navy); margin-bottom: 24px;">Specialist Railway Sourcing & Engineering Solutions</h2>
        <p style="color: var(--color-text-mid); font-size: var(--text-lg); line-height: 1.6;">
          Pearlcon Rail Services is a specialist supplying, sourcing and service company providing a wide range of services — including supplying and sourcing railway equipment and spare parts from UK, US, and European markets; procurement and logistics services covering sourcing, quality control, transportation, shipping and delivery; and railways engineering and operational efficiency consultancy.
        </p>
        <p style="color: var(--color-text-mid); line-height: 1.6;">
          We combine comprehensive expertise, experience and an outcome-oriented approach to support our clients in delivering their tactical objectives.
        </p>
        <p style="color: var(--color-text-mid); line-height: 1.6;">
          Procurement is a high-impact activity that can enhance a company's performance and significantly improve the bottom line. Pearlcon Rail understands the strategic position of the procurement function within your organisation and will work with you to deliver purchasing gains in terms of operational spend, quality of service, and effectiveness of resources.
        </p>
      </div>

      <div>
        <div class="panel panel--navy panel--lime-top" style="text-align: center; padding: 48px 32px;">
          <div style="margin-bottom: 20px; display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; background: rgba(141,198,63,0.1); border: 1px solid var(--color-lime);">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#8DC63F" stroke-width="2">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>
              <line x1="4" y1="22" x2="4" y2="15"/>
            </svg>
          </div>
          <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 8px;">Pearlcon Rail</h3>
          <p style="color: var(--color-lime); font-size: var(--text-sm); font-weight: 600; margin-bottom: 16px;">Supporting Rail Companies Around the World</p>
          <div style="border-top: 1px solid var(--color-border-dark); padding-top: 20px; font-size: var(--text-xs); color: var(--color-text-light); text-align: left; line-height: 1.8;">
            <div><strong>Registered:</strong> United Kingdom</div>
            <div><strong>Registration Location:</strong> Loughton, Essex</div>
            <div><strong>Operations:</strong> UK · US · Europe · Saudi Arabia · China</div>
            <div><strong>Trading As:</strong> Pearlcon Rail</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- At a Glance Stats -->
<section class="at-a-glance" aria-label="Key facts">
  <div class="container">
    <div class="at-a-glance__grid">
      <div class="at-a-glance__item">
        <div class="at-a-glance__label">Industry</div>
        <div class="at-a-glance__value">Railway Supply & Services</div>
      </div>
      <div class="at-a-glance__item">
        <div class="at-a-glance__label">Registered</div>
        <div class="at-a-glance__value">United Kingdom</div>
      </div>
      <div class="at-a-glance__item">
        <div class="at-a-glance__label">Market Reach</div>
        <div class="at-a-glance__value">Global (UK, US, Europe)</div>
      </div>
      <div class="at-a-glance__item">
        <div class="at-a-glance__label">Specialisation</div>
        <div class="at-a-glance__value">Procurement & Supply Chain</div>
      </div>
    </div>
  </div>
</section>

<!-- Procurement Solutions -->
<section class="section section--navy" aria-labelledby="procurement-solutions-heading">
  <div class="container">
    <div class="grid-2" style="gap: 48px; align-items: start;">
      <div>
        <span class="eyebrow">Enterprise Sourcing</span>
        <h2 id="procurement-solutions-heading" style="margin-bottom: 24px;">Procurement Solutions</h2>
        <p style="font-size: var(--text-lg); line-height: 1.6; color: var(--color-text-light);">
          Pearlcon Rail will provide a dedicated account management team, supported by an IT infrastructure providing real-time information on your day-to-day transactions.
        </p>
        <p style="line-height: 1.6; color: var(--color-text-light);">
          Our offices are resourced with highly qualified engineers, buyers with extensive sourcing knowledge, quality control engineers who inspect factories and products, and shipping and logistics specialists ensuring end-to-end reliability.
        </p>
      </div>

      <div>
        <div class="panel panel--navy panel--lime-top">
          <h3 style="color: var(--color-white); margin-bottom: 20px;">What This Means for You</h3>
          <ul class="feature-list" style="color: var(--color-text-light);">
            <li>A dedicated account manager for your business</li>
            <li>Real-time transaction tracking and reporting</li>
            <li>Factory and product quality inspections by qualified engineers</li>
            <li>End-to-end logistics co-ordination and customs clearance</li>
            <li>Competitive pricing through bulk sourcing relationships</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our International Network -->
<section class="section section--light" aria-labelledby="network-heading">
  <div class="container">
    <div style="margin-bottom: 40px;">
      <span class="eyebrow" style="color: var(--color-navy);">Global Infrastructure</span>
      <h2 id="network-heading" style="color: var(--color-navy);">International Network & Operations</h2>
    </div>

    <div class="grid-2" style="gap: 40px;">
      <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 32px;">
        <h3 style="color: var(--color-navy); margin-bottom: 16px;">Sourcing Through Dedicated Buying Offices</h3>
        <p style="color: var(--color-text-mid); line-height: 1.6;">
          When responding to enquiries from clients for overseas products and services, and when contacting overseas vendors and clients, we draw on the cooperation and support of our international buying offices as necessary.
        </p>
        <p style="color: var(--color-text-mid); line-height: 1.6;">
          We use well-established offices in the UK, US, and China to source from the best suppliers for our clients. Pearlcon's long relationships with manufacturers mean that we have special arrangements in place throughout Europe, UK, US, China, and other countries.
        </p>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 32px;" class="panel--lime-top">
        <h3 style="color: var(--color-navy); margin-bottom: 16px;">Key Network Strengths</h3>
        <ul class="feature-list" style="color: var(--color-text-mid);">
          <li>Established supplier base of more than 5,000 worldwide</li>
          <li>Close relationships enabling sourcing of difficult/niche items at competitive prices</li>
          <li>Operational footprint: UK (Loughton) · Saudi Arabia (Dammam) · US · China buying offices</li>
          <li>Special pricing arrangements in place with numerous railway equipment manufacturers</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Office Locations -->
<section class="section section--navy" aria-labelledby="offices-heading">
  <div class="container">
    <div style="margin-bottom: 36px;">
      <span class="eyebrow">Operating Hubs</span>
      <h2 id="offices-heading">Office Locations</h2>
    </div>

    <div class="grid-2" style="gap: 32px;">
      <!-- UK Office -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">Corporate Headquarters</span>
        <h3 style="color: var(--color-white); margin-bottom: 14px;">UK Office</h3>
        <p style="color: var(--color-text-light); line-height: 1.6; margin-bottom: 16px;">
          38F Chigwell Lane, Oakhill Industrial Estate<br>
          Loughton IG10 3NY, United Kingdom
        </p>
        <div style="padding-top: 14px; border-top: 1px solid var(--color-border-dark); font-size: var(--text-sm); color: var(--color-lime);">
          <strong>Phone:</strong> +44 (0) 1234 440 530<br>
          <strong>Email:</strong> sales@pearlcon.com
        </div>
      </div>

      <!-- Saudi Arabia Office -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">Middle East Regional Entity</span>
        <h3 style="color: var(--color-white); margin-bottom: 14px;">Saudi Arabia Office</h3>
        <p style="color: var(--color-text-light); line-height: 1.6; margin-bottom: 16px;">
          Pearlcon LLC<br>
          2996 Najd Street, Al Tubayshi<br>
          Dammam, 32233, Saudi Arabia
        </p>
        <div style="padding-top: 14px; border-top: 1px solid var(--color-border-dark); font-size: var(--text-sm); color: var(--color-lime);">
          <strong>Coverage:</strong> Kingdom of Saudi Arabia & MENA Rail Projects<br>
          <strong>Email:</strong> sales@pearlcon.com
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-label="Call to Action">
  <div class="container">
    <div class="cta-banner__inner">
      <div>
        <h2 class="cta-banner__title">Partner with Pearlcon Rail</h2>
        <p class="cta-banner__sub">Connect with our engineering and procurement team today.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn--dark btn--lg">Get in Touch</a>
    </div>
  </div>
</section>
@endsection
