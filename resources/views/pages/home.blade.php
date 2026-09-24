@extends('layouts.app')

@section('title', 'Pearlcon Rail Services Ltd — Global Railway Procurement & Supply')
@section('meta_description', 'Pearlcon Rail Services is a UK-based specialist supplying, sourcing, and procurement company for the global railway sector. Serving Network Rail, HS2, London Underground, and Saudi Arabian Railway.')

@section('content')
<!-- Section 1: Hero -->
<section class="hero" aria-label="Hero Section">
  <div class="container">
    <div class="hero__content">
      <span class="eyebrow">Railway Supply & Procurement · United Kingdom</span>
      <h1 class="hero__headline">
        Global Rail Procurement.<br>
        One Point of Contact.
      </h1>
      <p class="hero__sub">
        Pearlcon Rail sources equipment, spare parts, and supply chain solutions for rail operators across the UK, US, and European markets — reliably, efficiently, on time.
      </p>
      <div class="btn-group">
        <a href="{{ route('contact') }}" class="btn btn--primary btn--lg">Request a Quote</a>
        <a href="{{ route('services') }}" class="btn btn--outline btn--lg">Our Services</a>
      </div>

      <!-- Bottom of hero: 3 stat blocks separated by vertical lime lines -->
      <div class="hero-stats">
        <div class="hero-stat-item">
          <div class="hero-stat-item__value">5,000+ Suppliers</div>
          <div class="hero-stat-item__label">Established Worldwide Network</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-item__value">UK · US · Europe · Saudi Arabia</div>
          <div class="hero-stat-item__label">Active Operating Presence</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-item__value">On Time In Full</div>
          <div class="hero-stat-item__label">KPI-Monitored Delivery Reliability</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: At a Glance (4-column bar) -->
<section class="at-a-glance" aria-label="Company at a glance">
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
        <div class="at-a-glance__value">Global — UK, US, Europe</div>
      </div>
      <div class="at-a-glance__item">
        <div class="at-a-glance__label">Specialisation</div>
        <div class="at-a-glance__value">Procurement & Supply Chain</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: About Overview -->
<section class="section section--light" aria-labelledby="about-overview-heading">
  <div class="container">
    <div class="grid-2" style="grid-template-columns: 1.4fr 1fr; align-items: center;">
      <div>
        <span class="eyebrow" style="color: var(--color-navy);">About the Company</span>
        <h2 id="about-overview-heading" style="color: var(--color-navy); margin-bottom: 20px;">Your Global Sourcing Partner</h2>
        <p style="color: var(--color-text-mid); font-size: var(--text-lg); line-height: 1.6;">
          Pearlcon Rail Services is a specialist supplying, sourcing, and service company dedicated to the global railway and transport sector, acting as a single point of contact for equipment, spare parts, procurement logistics, and supply chain consultancy — sourcing from trusted UK, US, and European supply networks.
        </p>
        <p style="color: var(--color-text-mid); line-height: 1.6;">
          With a comprehensive and outcome-oriented approach, Pearlcon combines deep industry expertise with an international supplier network to help clients deliver their tactical and operational objectives efficiently and reliably.
        </p>
        <div style="margin-top: 24px;">
          <a href="{{ route('about') }}" style="color: var(--color-lime-dark); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
            Read More About Us
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
      <div>
        <div class="panel panel--navy panel--lime-top">
          <h3 style="color: var(--color-white); margin-bottom: 20px; font-size: var(--text-2xl);">Procurement Simplified</h3>
          <ul class="feature-list" style="color: var(--color-text-light);">
            <li>Single Purchase Order</li>
            <li>Single Point of Contact</li>
            <li>On Time In Full Delivery</li>
            <li>Global Supplier Network of 5,000+</li>
          </ul>
          <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid var(--color-border-dark);">
            <span style="font-size: var(--text-xs); color: var(--color-text-light); display: block; margin-bottom: 8px;">Direct Rail Sourcing Desk</span>
            <span style="font-family: var(--font-display); font-size: var(--text-xl); color: var(--color-lime); font-weight: 700;">+44 (0) 1234 440 530</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Core Capabilities -->
<section class="section section--navy" aria-labelledby="core-capabilities-heading">
  <div class="container">
    <div style="margin-bottom: 48px;">
      <span class="eyebrow">Operational Excellence</span>
      <h2 id="core-capabilities-heading">Core Capabilities</h2>
    </div>

    <div class="grid-4">
      <!-- Simplicity -->
      <div class="capability-card panel--lime-top">
        <div class="capability-card__icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="16" rx="0"/>
            <line x1="7" y1="8" x2="17" y2="8"/>
            <line x1="7" y1="12" x2="17" y2="12"/>
            <line x1="7" y1="16" x2="13" y2="16"/>
          </svg>
        </div>
        <h3 class="capability-card__title">Simplicity</h3>
        <p class="capability-card__desc">
          A single purchase order, a single invoice, and a single point of contact — making procurement seamless for clients.
        </p>
      </div>

      <!-- Global Reach -->
      <div class="capability-card panel--lime-top">
        <div class="capability-card__icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
          </svg>
        </div>
        <h3 class="capability-card__title">Global Reach</h3>
        <p class="capability-card__desc">
          Access to international suppliers across UK, US, and European markets — without the associated risk or complexity.
        </p>
      </div>

      <!-- Maximum Efficiency -->
      <div class="capability-card panel--lime-top">
        <div class="capability-card__icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <h3 class="capability-card__title">Maximum Efficiency</h3>
        <p class="capability-card__desc">
          All goods supplied 'On Time In Full,' with continuous KPI measurement and structured performance reporting.
        </p>
      </div>

      <!-- Comprehensive Range -->
      <div class="capability-card panel--lime-top">
        <div class="capability-card__icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
            <line x1="12" y1="22.08" x2="12" y2="12"/>
          </svg>
        </div>
        <h3 class="capability-card__title">Comprehensive Range</h3>
        <p class="capability-card__desc">
          Full product access from everyday consumables to large capital equipment across all railway disciplines.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: Sectors Served -->
<section class="section section--light" aria-labelledby="sectors-heading">
  <div class="container">
    <div class="grid-2" style="grid-template-columns: 1.6fr 1fr; gap: 40px; align-items: start;">
      <div>
        <span class="eyebrow" style="color: var(--color-navy);">Industry Scope</span>
        <h2 id="sectors-heading" style="color: var(--color-navy); margin-bottom: 24px;">Sectors We Serve</h2>
        <div style="background: var(--color-white); border: 1px solid var(--color-border);">
          <div class="row-list">
            <div class="row-list__item">Electrification & Power Supply</div>
            <div class="row-list__item">Railway Safety Services & Parts</div>
            <div class="row-list__item">Rolling Stock MRO Parts / Components</div>
            <div class="row-list__item">Signalling, Control & Communication</div>
            <div class="row-list__item">Station Equipment & Facilities</div>
            <div class="row-list__item">Track Components & Materials</div>
            <div class="row-list__item">Fare Collection & Turnstile Systems</div>
            <div class="row-list__item">Transport Infrastructure & Civil Works</div>
            <div class="row-list__item">Workshops, Depots & Plant Equipment</div>
            <div class="row-list__item">Light Rail & Tram Systems</div>
          </div>
        </div>
      </div>

      <div>
        <div class="panel panel--navy panel--lime-top" style="position: sticky; top: 100px;">
          <span class="eyebrow">Procurement Partnership</span>
          <h3 style="color: var(--color-white); margin-bottom: 16px;">Need rail sector supply?</h3>
          <p style="color: var(--color-text-light); margin-bottom: 24px;">
            Talk directly with our dedicated technical sourcing and engineering team to consolidate your supply chain requirements.
          </p>
          <a href="{{ route('contact') }}" class="btn btn--primary" style="width: 100%;">Contact Us</a>

          <div style="margin-top: 32px; padding-top: 20px; border-top: 1px solid var(--color-border-dark);">
            <p style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Registered UK Office</p>
            <p style="font-size: var(--text-sm); color: var(--color-white);">Loughton, Essex, United Kingdom</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Key Clients (strip) -->
<section class="section section--navy" aria-labelledby="clients-strip-heading">
  <div class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 36px; flex-wrap: wrap; gap: 16px;">
      <div>
        <span class="eyebrow">Proven Experience</span>
        <h2 id="clients-strip-heading">Trusted by Leading Rail Operators</h2>
      </div>
      <a href="{{ route('clients') }}" style="color: var(--color-lime); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        View All Clients
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>

    <div class="grid-4">
      <div class="client-plate">
        <div class="client-plate__name">Saudi Arabian Railway Company</div>
        <div class="client-plate__location">Saudi Arabia</div>
      </div>
      <div class="client-plate">
        <div class="client-plate__name">Network Rail</div>
        <div class="client-plate__location">United Kingdom</div>
      </div>
      <div class="client-plate">
        <div class="client-plate__name">London Underground</div>
        <div class="client-plate__location">United Kingdom</div>
      </div>
      <div class="client-plate">
        <div class="client-plate__name">HS2</div>
        <div class="client-plate__location">United Kingdom</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Why Choose Pearlcon (3-col) -->
<section class="section section--light" aria-labelledby="why-us-summary-heading">
  <div class="container">
    <div style="margin-bottom: 40px;">
      <span class="eyebrow" style="color: var(--color-navy);">Distinctive Value</span>
      <h2 id="why-us-summary-heading" style="color: var(--color-navy);">The Pearlcon Advantage</h2>
    </div>

    <div class="grid-3">
      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); margin-bottom: 14px;">Back-Office Specialist</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          In a typical organisation, 80% of procurement transactions account for less than 20% of spend. Pearlcon is specialised in dealing with these back-office processes to save your resources, time, and cost.
        </p>
      </div>
      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); margin-bottom: 14px;">Global Alliances</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Through longstanding global alliances and dealer networks, Pearlcon can source anything you require — anywhere — from a trusted source, backed by vetted engineering quality.
        </p>
      </div>
      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); margin-bottom: 14px;">Supplier Base of 5,000+</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Our established international supplier base ensures even the most elusive railway items are sourced competitively and delivered on tight deadlines with full tracking.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 8: CTA Banner -->
<section class="cta-banner" aria-label="Call to Action">
  <div class="container">
    <div class="cta-banner__inner">
      <div>
        <h2 class="cta-banner__title">Ready to Simplify Your Rail Procurement?</h2>
        <p class="cta-banner__sub">One order. One invoice. One partner. Get in touch today.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn--dark btn--lg">Request a Quote</a>
    </div>
  </div>
</section>
@endsection
