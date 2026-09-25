@extends('layouts.app')

@section('title', 'Pearlcon Rail Services Ltd — Global Railway Procurement & Supply')
@section('meta_description', 'Pearlcon Rail Services is a UK-based specialist supplying, sourcing, and procurement company for the global railway sector. Serving Network Rail, HS2, London Underground, and Saudi Arabian Railway.')

@section('content')
<!-- Section 1: Hero with Left Text Content & Right Orbital AI Card (Matching Reference Design) -->
<section class="hero" aria-label="Hero Section" style="padding: 64px 0; background-color: #0D1F3C;">
  <div class="container">
    <div class="hero-flex-wrapper" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; gap: 48px; width: 100%;">

      <!-- LEFT SIDE: Hero Content (Text, Green Checkmark Features & Action Buttons) -->
      <div class="hero-text-col" style="flex: 1 1 52%; max-width: 52%;">
        <span class="eyebrow eyebrow--lime" style="display: inline-flex; align-items: center; gap: 8px; font-weight: 700; color: #8DC63F; margin-bottom: 16px; font-size: 0.85rem; letter-spacing: 0.1em; text-transform: uppercase;">
          <i class="fa-solid fa-microchip me-1"></i>  RAIL PROCUREMENT
        </span>

        <h1 class="hero__headline" style="font-size: clamp(2.5rem, 4.5vw, 3.75rem); line-height: 1.1; margin-bottom: 20px; font-weight: 700; color: #FFFFFF;">
          Global Rail Sourcing.<br>
          <span class="text-lime" style="color: #8DC63F;">One AI Point of Contact.</span>
        </h1>

        <p class="hero__sub" style="font-size: 1.1rem; color: #CBD5E1; line-height: 1.65; margin-bottom: 24px;">
          Pearlcon Rail combines advanced AI supply chain matching with 15+ years of railway engineering expertise to source equipment and spare parts across UK, US, Europe, and Middle East.
        </p>

        <!-- Action Buttons -->
        <div class="btn-group" style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
          <a href="{{ route('contact') }}" class="btn btn--primary btn--lg" style="background-color: #8DC63F; color: #0D1F3C; font-weight: 700; padding: 14px 28px; border-radius: 8px; font-size: 1rem; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
            Request Sourcing Quote <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="{{ route('services') }}" class="btn btn--outline btn--lg" style="border: 1.5px solid #FFFFFF; color: #FFFFFF; font-weight: 600; padding: 14px 28px; border-radius: 8px; font-size: 1rem; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
            <i class="fa-solid fa-gears"></i> Our Services
          </a>
        </div>
      </div>

      <!-- RIGHT SIDE: AI Visual Card matching exact reference image -->
      <div class="hero-ai-col reveal-on-scroll" style="flex: 1 1 44%; max-width: 44%;">
        <div class="who-we-are-card" style="background-color: #081427; border: 1.5px solid #1E3A5F; border-radius: 18px; padding: 24px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5); position: relative; max-width: 480px; margin-left: auto;">

          <!-- Card Header (Est. 2009 & Global Procurement Active) -->
          <div class="who-we-are-card__header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
            <span class="badge-est" style="background: rgba(141, 198, 63, 0.15); border: 1px solid rgba(141, 198, 63, 0.4); color: #8DC63F; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; letter-spacing: 0.05em;">• Est. 2009</span>
            <div class="who-we-are-card__status" style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: #8DC63F; font-weight: 700;">
              <span class="status-indicator" style="width: 8px; height: 8px; background-color: #8DC63F; border-radius: 50%; box-shadow: 0 0 8px #8DC63F;"></span> Global Procurement Active
            </div>
          </div>

          <!-- Orbital Radar Graphic -->
          <div class="who-we-are-card__visual" style="position: relative; margin: 16px 0;">
            <svg class="orbital-graphic" viewBox="0 0 440 260" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
              <defs>
                <radialGradient id="hubGlow" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" stop-color="#8DC63F" stop-opacity="0.45" />
                  <stop offset="100%" stop-color="#8DC63F" stop-opacity="0" />
                </radialGradient>
                <linearGradient id="orbitStroke" x1="0" y1="0" x2="440" y2="260" gradientUnits="userSpaceOnUse">
                  <stop offset="0%" stop-color="#8DC63F" stop-opacity="0.4" />
                  <stop offset="100%" stop-color="#1E3A5F" stop-opacity="0.2" />
                </linearGradient>
              </defs>

              <ellipse cx="220" cy="130" rx="200" ry="110" stroke="url(#orbitStroke)" stroke-width="1.2" stroke-dasharray="4 6" />
              <ellipse cx="220" cy="130" rx="145" ry="75" stroke="url(#orbitStroke)" stroke-width="1.5" stroke-dasharray="3 5" />
              <ellipse cx="220" cy="130" rx="85" ry="42" stroke="rgba(141, 198, 63, 0.45)" stroke-width="1.5" stroke-dasharray="2 4" />

              <line x1="120" y1="70" x2="220" y2="130" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
              <line x1="75" y1="165" x2="220" y2="130" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
              <line x1="330" y1="75" x2="220" y2="130" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
              <line x1="370" y1="165" x2="220" y2="130" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
              <line x1="220" y1="225" x2="220" y2="130" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />

              <circle cx="220" cy="130" r="36" fill="url(#hubGlow)" />
              <circle cx="220" cy="130" r="20" fill="#0D1F3C" stroke="#8DC63F" stroke-width="2.5" />
              <text x="220" y="134" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="10" fill="#8DC63F" letter-spacing="1">HUB</text>

              <g transform="translate(120, 70)">
                <circle cx="0" cy="0" r="14" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
                <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">UK</text>
              </g>

              <g transform="translate(75, 165)">
                <circle cx="0" cy="0" r="14" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
                <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">US</text>
              </g>

              <g transform="translate(330, 75)">
                <circle cx="0" cy="0" r="14" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
                <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">EU</text>
              </g>

              <g transform="translate(370, 165)">
                <circle cx="0" cy="0" r="14" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
                <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">SA</text>
              </g>

              <g transform="translate(220, 225)">
                <circle cx="0" cy="0" r="14" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
                <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">CN</text>
              </g>
            </svg>
          </div>

          <!-- Bottom 3 Metric Boxes (matching reference image) -->
          <div class="who-we-are-card__footer" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 14px; margin-top: 10px;">
            <div class="metric-pill" style="border: 1px solid rgba(141, 198, 63, 0.3); background: rgba(13, 31, 60, 0.6); border-radius: 8px; padding: 10px 6px; text-align: center;">
              <span class="metric-pill__val" style="display: block; font-family: var(--font-rail); font-size: 1.15rem; font-weight: 700; color: #8DC63F;">5,000+</span>
              <span class="metric-pill__lbl" style="display: block; font-size: 10px; color: #CBD5E1; text-transform: uppercase; font-weight: 700; margin-top: 2px;">SUPPLIERS</span>
            </div>
            <div class="metric-pill" style="border: 1px solid rgba(141, 198, 63, 0.3); background: rgba(13, 31, 60, 0.6); border-radius: 8px; padding: 10px 6px; text-align: center;">
              <span class="metric-pill__val" style="display: block; font-family: var(--font-rail); font-size: 1.15rem; font-weight: 700; color: #8DC63F;">99.8%</span>
              <span class="metric-pill__lbl" style="display: block; font-size: 10px; color: #CBD5E1; text-transform: uppercase; font-weight: 700; margin-top: 2px;">OTIF RATE</span>
            </div>
            <div class="metric-pill" style="border: 1px solid rgba(141, 198, 63, 0.3); background: rgba(13, 31, 60, 0.6); border-radius: 8px; padding: 10px 6px; text-align: center;">
              <span class="metric-pill__val" style="display: block; font-family: var(--font-rail); font-size: 1.15rem; font-weight: 700; color: #8DC63F;">100%</span>
              <span class="metric-pill__lbl" style="display: block; font-size: 10px; color: #CBD5E1; text-transform: uppercase; font-weight: 700; margin-top: 2px;">TRACEABLE</span>
            </div>
          </div>

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

<!-- Section 3: Who We Are & Global Sourcing Network (Reference Design) -->
<section class="section section--light" aria-labelledby="who-we-are-heading">
  <div class="container">
    <div style="margin-bottom: 40px;" class="reveal-on-scroll">
      <span class="eyebrow eyebrow--amber">Who We Are</span>
      <h2 id="who-we-are-heading" style="max-width: 900px; margin-top: 10px; line-height: 1.25;">
        A UK supply and sourcing partner built for industrial complexity &mdash; <span class="text-highlight">one accountable team</span>, from enquiry to delivery.
      </h2>
    </div>

    <div class="grid-2" style="grid-template-columns: 1fr 1.15fr; align-items: center; gap: 48px;">
      <!-- Visual Card: Global Orbital Procurement Grid -->
      <div class="who-we-are-card reveal-on-scroll stagger-1">
        <div class="who-we-are-card__header">
          <span class="badge-est">Est. 2009</span>
          <div class="who-we-are-card__status">
            <span class="status-indicator"></span> Global Procurement Active
          </div>
        </div>

        <!-- High-Tech Concentric Radar / Orbital SVG Visualization -->
        <div class="who-we-are-card__visual">
          <svg class="orbital-graphic" viewBox="0 0 440 280" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Pearlcon global procurement orbital sourcing network">
            <defs>
              <radialGradient id="hubGlow2" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="#8DC63F" stop-opacity="0.45" />
                <stop offset="100%" stop-color="#8DC63F" stop-opacity="0" />
              </radialGradient>
              <linearGradient id="orbitStroke2" x1="0" y1="0" x2="440" y2="280" gradientUnits="userSpaceOnUse">
                <stop offset="0%" stop-color="#8DC63F" stop-opacity="0.4" />
                <stop offset="100%" stop-color="#1E3A5F" stop-opacity="0.2" />
              </linearGradient>
            </defs>

            <!-- Concentric Orbital Grid Rings -->
            <ellipse cx="220" cy="140" rx="200" ry="115" stroke="url(#orbitStroke2)" stroke-width="1.2" stroke-dasharray="4 6" class="orbital-ring" style="animation-duration: 60s;" />
            <ellipse cx="220" cy="140" rx="145" ry="80" stroke="url(#orbitStroke2)" stroke-width="1.5" stroke-dasharray="3 5" class="orbital-ring" style="animation-direction: reverse; animation-duration: 45s;" />
            <ellipse cx="220" cy="140" rx="85" ry="46" stroke="rgba(141, 198, 63, 0.45)" stroke-width="1.5" stroke-dasharray="2 4" class="orbital-ring" style="animation-duration: 30s;" />

            <!-- Connecting Laser Rays to Central Hub -->
            <line x1="120" y1="75" x2="220" y2="140" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
            <line x1="75" y1="175" x2="220" y2="140" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
            <line x1="330" y1="80" x2="220" y2="140" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
            <line x1="370" y1="175" x2="220" y2="140" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />
            <line x1="220" y1="240" x2="220" y2="140" stroke="rgba(141, 198, 63, 0.35)" stroke-width="1.5" stroke-dasharray="3 3" />

            <!-- Central Pearlcon Core Hub -->
            <circle cx="220" cy="140" r="38" fill="url(#hubGlow2)" />
            <circle cx="220" cy="140" r="22" fill="#0D1F3C" stroke="#8DC63F" stroke-width="2.5" />
            <text x="220" y="145" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="11" fill="#8DC63F" letter-spacing="1">HUB</text>

            <!-- Node 1: UK -->
            <g class="orbital-node" transform="translate(120, 75)">
              <circle cx="0" cy="0" r="16" class="orbital-node-pulse" fill="none" stroke="#8DC63F" stroke-width="1.5" />
              <circle cx="0" cy="0" r="12" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
              <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="10" fill="#FFFFFF">UK</text>
            </g>

            <!-- Node 2: US -->
            <g class="orbital-node" transform="translate(75, 175)">
              <circle cx="0" cy="0" r="16" class="orbital-node-pulse" fill="none" stroke="#8DC63F" stroke-width="1.5" style="animation-delay: 0.7s;" />
              <circle cx="0" cy="0" r="12" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
              <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="10" fill="#FFFFFF">US</text>
            </g>

            <!-- Node 3: EU -->
            <g class="orbital-node" transform="translate(330, 80)">
              <circle cx="0" cy="0" r="16" class="orbital-node-pulse" fill="none" stroke="#8DC63F" stroke-width="1.5" style="animation-delay: 1.4s;" />
              <circle cx="0" cy="0" r="12" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
              <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="10" fill="#FFFFFF">EU</text>
            </g>

            <!-- Node 4: SA (Saudi Arabia) -->
            <g class="orbital-node" transform="translate(370, 175)">
              <circle cx="0" cy="0" r="16" class="orbital-node-pulse" fill="none" stroke="#8DC63F" stroke-width="1.5" style="animation-delay: 2.1s;" />
              <circle cx="0" cy="0" r="12" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
              <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">SA</text>
            </g>

            <!-- Node 5: CN / Global -->
            <g class="orbital-node" transform="translate(220, 240)">
              <circle cx="0" cy="0" r="16" class="orbital-node-pulse" fill="none" stroke="#8DC63F" stroke-width="1.5" style="animation-delay: 1s;" />
              <circle cx="0" cy="0" r="12" fill="#162A4A" stroke="#8DC63F" stroke-width="2" />
              <text x="0" y="4" text-anchor="middle" font-family="'Space Grotesk', sans-serif" font-weight="700" font-size="9" fill="#FFFFFF">CN</text>
            </g>
          </svg>
        </div>

        <!-- Bottom Metric Badges inside Card -->
        <div class="who-we-are-card__footer">
          <div class="metric-pill">
            <span class="metric-pill__val">5,000+</span>
            <span class="metric-pill__lbl">Suppliers</span>
          </div>
          <div class="metric-pill">
            <span class="metric-pill__val">99.4%</span>
            <span class="metric-pill__lbl">OTIF Rate</span>
          </div>
          <div class="metric-pill">
            <span class="metric-pill__val">100%</span>
            <span class="metric-pill__lbl">Traceable</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Descriptive Content & Value Points -->
      <div class="reveal-on-scroll stagger-2">
        <p class="lead-text">
          Headquartered in Essex, United Kingdom, Pearlcon Rail Services Ltd delivers complete rail procurement, specialised component sourcing, and supply-chain logistics for demanding transit authorities, passenger operators, and freight rail networks worldwide.
        </p>
        <p class="body-text">
          We eliminate the friction between engineering requisitions and international manufacturing hubs. Rather than managing dozens of disconnected vendors, our clients leverage one dedicated procurement desk that oversees quality inspection, customs compliance, and direct site delivery.
        </p>

        <!-- Key Value Points -->
        <div class="value-feature-list">
          <div class="value-feature-item">
            <div class="value-feature-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <strong>Single Purchase Order &amp; Unified Invoicing</strong>
              <p>Eliminate cross-border administrative overhead with one accountable UK contractor.</p>
            </div>
          </div>
          <div class="value-feature-item">
            <div class="value-feature-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <strong>Dual Operations: UK HQ &amp; Saudi Hub</strong>
              <p>Local responsiveness across the UK/EU combined with on-the-ground support for Middle East rail corridors.</p>
            </div>
          </div>
          <div class="value-feature-item">
            <div class="value-feature-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <strong>Full Railway Compliance &amp; Material Traceability</strong>
              <p>Full EN 10204 3.1/3.2 certification, TSI alignment, and Network Rail standard adherence.</p>
            </div>
          </div>
        </div>

        <div class="btn-group" style="margin-top: 32px;">
          <a href="{{ route('about') }}" class="btn btn--primary">
            Discover Our Sourcing Model
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="{{ route('contact') }}" class="btn btn--outline" style="border-color: var(--color-navy); color: var(--color-navy);">
            Speak to an Account Executive
          </a>
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