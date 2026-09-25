@extends('layouts.app')

@section('title', 'Services — Pearlcon Rail Services Ltd | Procurement, Sourcing & Consultancy')
@section('meta_description', 'Pearlcon Rail offers global railway procurement, sourcing, supply chain management, shipping, and engineering consultancy services to rail operators worldwide.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Services</span>
    </div>
    <h1>Services & Solutions</h1>
    <p>Smart, efficient and global procurement & consulting for the rail industry</p>
  </div>
</section>

<!-- Services Overview -->
<section class="section section--light" aria-labelledby="services-overview-heading">
  <div class="container">
    <div style="max-width: 840px; margin-bottom: 48px;">
      <span class="eyebrow" style="color: var(--color-navy);">Comprehensive Delivery</span>
      <h2 id="services-overview-heading" style="color: var(--color-navy); margin-bottom: 16px;">End-to-End Railway Supply Capabilities</h2>
      <p style="color: var(--color-text-mid); font-size: var(--text-lg); line-height: 1.6;">
        Pearlcon Rail provides a single, streamlined procurement solution for rail operators. From everyday consumables to complex capital equipment, we handle sourcing, quality, logistics, and delivery — so your team can focus on operations.
      </p>
    </div>

    <!-- 6 Structured Horizontal Service Strips -->
    <div>
      <!-- 1. Supply & Sourcing -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 01</span>
          <h3>Supply & Sourcing</h3>
        </div>
        <div class="service-strip__body">
          <p>Supplying and sourcing railway equipment and spare parts from UK, US, and European markets on behalf of rail and transport clients.</p>
          <ul class="service-strip__bullets">
            <li>New and replacement components sourced to exact spec</li>
            <li>Access to 5,000+ vetted international suppliers</li>
            <li>Parts for rolling stock, infrastructure, and signalling</li>
            <li>One-off and recurring order fulfillment</li>
          </ul>
        </div>
      </div>

      <!-- 2. Procurement & Logistics -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 02</span>
          <h3>Procurement & Logistics</h3>
        </div>
        <div class="service-strip__body">
          <p>End-to-end procurement services including sourcing, quality control, transportation, shipping, and delivery to client sites.</p>
          <ul class="service-strip__bullets">
            <li>Purchase order management & expediting</li>
            <li>Multi-supplier cargo consolidation</li>
            <li>Customs clearance and technical documentation</li>
            <li>Door-to-door delivery management to depots</li>
          </ul>
        </div>
      </div>

      <!-- 3. Supply Chain Consultancy -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 03</span>
          <h3>Supply Chain Consultancy</h3>
        </div>
        <div class="service-strip__body">
          <p>Supporting clients to optimise procurement processes, reduce cost, and improve supply chain efficiency.</p>
          <ul class="service-strip__bullets">
            <li>Procurement process audit and bottleneck removal</li>
            <li>Spend analysis and vendor consolidation</li>
            <li>KPI measurement and structured performance reporting</li>
            <li>Tailored supply chain strategy for capital projects</li>
          </ul>
        </div>
      </div>

      <!-- 4. Engineering & Operations Consultancy -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 04</span>
          <h3>Engineering & Operations Consultancy</h3>
        </div>
        <div class="service-strip__body">
          <p>Railways engineering and operational efficiency consultancy services delivered by qualified specialists.</p>
          <ul class="service-strip__bullets">
            <li>Railways engineering consultancy</li>
            <li>Environmental consultancy & sustainability</li>
            <li>Rail safety consultancy & regulatory compliance</li>
            <li>Transport planning & network optimisation</li>
            <li>Rail signage & passenger information consultancy</li>
          </ul>
        </div>
      </div>

      <!-- 5. Quality Control & Inspection -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 05</span>
          <h3>Quality Control & Inspection</h3>
        </div>
        <div class="service-strip__body">
          <p>Quality assurance at source, ensuring verified compliance before any goods ship from manufacturing facilities.</p>
          <ul class="service-strip__bullets">
            <li>Factory inspection by certified railway engineers</li>
            <li>Product verification to buyer's technical specification</li>
            <li>Shipping document and material test report review</li>
            <li>Non-conformance management and remediation</li>
          </ul>
        </div>
      </div>

      <!-- 6. Shipping, Tracking & Documentation -->
      <div class="service-strip">
        <div class="service-strip__header">
          <span style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: 4px;">Service 06</span>
          <h3>Shipping, Tracking & Documentation</h3>
        </div>
        <div class="service-strip__body">
          <p>Full logistics service from purchase order issuance to client warehouse delivery across global borders.</p>
          <ul class="service-strip__bullets">
            <li>Integrated order tracking (PO → shipping → delivery)</li>
            <li>Co-ordination with international freight forwarders</li>
            <li>Full export/import shipping documentation preparation</li>
            <li>Competitive freight quotations if no forwarder appointed</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- One-Stop Shop Explained (Visual Diagram) -->
<section class="section section--navy" aria-labelledby="one-stop-heading">
  <div class="container">
    <div style="max-width: 780px; margin-bottom: 40px;">
      <span class="eyebrow">Strategic Architecture</span>
      <h2 id="one-stop-heading">One Stop. Zero Complexity.</h2>
      <p style="color: var(--color-text-light); font-size: var(--text-lg); line-height: 1.6;">
        Pearlcon Rail becomes your single point of contact for the full scope — managing every complexity and optimising the entire procurement value chain.
      </p>
    </div>

    <div class="diagram-grid">
      <!-- Left Panel: Without Pearlcon -->
      <div class="diagram-panel">
        <h3 class="diagram-panel__title" style="color: #FC8181;">Current Industry Practice: Multiple Contacts</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); margin-bottom: 20px;">
          Direct coordination creates fragmentation, administrative burden, multiplied shipping risks, and uncontrolled overheads.
        </p>
        <div style="background: rgba(13,31,60,0.8); border: 1px solid var(--color-border-dark); padding: 24px;">
          <svg viewBox="0 0 460 220" width="100%" height="auto" style="overflow: visible;">
            <!-- Customer Node -->
            <rect x="20" y="80" width="100" height="50" fill="#162A4A" stroke="#4A5568" stroke-width="2"/>
            <text x="70" y="110" font-family="'Space Grotesk', sans-serif" font-size="13" font-weight="600" fill="#FFFFFF" text-anchor="middle">Customer</text>

            <!-- 4 Manufacturers Nodes -->
            <rect x="320" y="20" width="120" height="34" fill="#162A4A" stroke="#4A5568" stroke-width="1.5"/>
            <text x="380" y="42" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer A</text>

            <rect x="320" y="70" width="120" height="34" fill="#162A4A" stroke="#4A5568" stroke-width="1.5"/>
            <text x="380" y="92" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer B</text>

            <rect x="320" y="120" width="120" height="34" fill="#162A4A" stroke="#4A5568" stroke-width="1.5"/>
            <text x="380" y="142" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer C</text>

            <rect x="320" y="170" width="120" height="34" fill="#162A4A" stroke="#4A5568" stroke-width="1.5"/>
            <text x="380" y="192" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer D</text>

            <!-- Connecting lines -->
            <line x1="120" y1="95" x2="310" y2="37" stroke="#718096" stroke-width="1.5" stroke-dasharray="4"/>
            <line x1="120" y1="100" x2="310" y2="87" stroke="#718096" stroke-width="1.5" stroke-dasharray="4"/>
            <line x1="120" y1="110" x2="310" y2="137" stroke="#718096" stroke-width="1.5" stroke-dasharray="4"/>
            <line x1="120" y1="115" x2="310" y2="187" stroke="#718096" stroke-width="1.5" stroke-dasharray="4"/>
          </svg>
        </div>
        <ul style="margin-top: 16px; font-size: var(--text-xs); color: #E2E8F0; list-style: square; padding-left: 20px; line-height: 1.8;">
          <li>4 Separate Purchase Orders & Invoices</li>
          <li>Multiple uncoordinated freight timelines</li>
          <li>Dispersed quality risk across vendors</li>
        </ul>
      </div>

      <!-- Right Panel: With Pearlcon -->
      <div class="diagram-panel" style="border-color: var(--color-lime);">
        <h3 class="diagram-panel__title" style="color: var(--color-lime);">With Pearlcon Rail: Single Point of Contact</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); margin-bottom: 20px;">
          Unified interface. One single purchase order, verified quality control, consolidated logistics, and singular accountability.
        </p>
        <div style="background: rgba(13,31,60,0.8); border: 1px solid var(--color-lime); padding: 24px;">
          <svg viewBox="0 0 460 220" width="100%" height="auto" style="overflow: visible;">
            <!-- Customer Node -->
            <rect x="15" y="80" width="95" height="50" fill="#162A4A" stroke="#8DC63F" stroke-width="2"/>
            <text x="62" y="110" font-family="'Space Grotesk', sans-serif" font-size="13" font-weight="600" fill="#FFFFFF" text-anchor="middle">Customer</text>

            <!-- Arrow Customer -> Pearlcon -->
            <line x1="110" y1="105" x2="165" y2="105" stroke="#8DC63F" stroke-width="2.5"/>
            <polygon points="172,105 162,100 162,110" fill="#8DC63F"/>

            <!-- Pearlcon Central Node -->
            <rect x="175" y="65" width="125" height="80" fill="#0D1F3C" stroke="#8DC63F" stroke-width="2.5"/>
            <text x="237" y="100" font-family="'Space Grotesk', sans-serif" font-size="18" font-weight="700" fill="#FFFFFF" text-anchor="middle">PEARLCON</text>
            <text x="237" y="120" font-family="'Space Grotesk', sans-serif" font-size="16" font-weight="700" fill="#8DC63F" text-anchor="middle">RAIL</text>

            <!-- 4 Manufacturers Nodes -->
            <rect x="340" y="20" width="110" height="34" fill="#162A4A" stroke="#2A4A6B" stroke-width="1.5"/>
            <text x="395" y="42" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer A</text>

            <rect x="340" y="70" width="110" height="34" fill="#162A4A" stroke="#2A4A6B" stroke-width="1.5"/>
            <text x="395" y="92" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer B</text>

            <rect x="340" y="120" width="110" height="34" fill="#162A4A" stroke="#2A4A6B" stroke-width="1.5"/>
            <text x="395" y="142" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer C</text>

            <rect x="340" y="170" width="110" height="34" fill="#162A4A" stroke="#2A4A6B" stroke-width="1.5"/>
            <text x="395" y="192" font-family="'Space Grotesk', sans-serif" font-size="12" fill="#CBD5E0" text-anchor="middle">Manufacturer D</text>

            <!-- Connections -->
            <line x1="300" y1="85" x2="335" y2="37" stroke="#8DC63F" stroke-width="1.5"/>
            <line x1="300" y1="95" x2="335" y2="87" stroke="#8DC63F" stroke-width="1.5"/>
            <line x1="300" y1="115" x2="335" y2="137" stroke="#8DC63F" stroke-width="1.5"/>
            <line x1="300" y1="125" x2="335" y2="187" stroke="#8DC63F" stroke-width="1.5"/>
          </svg>
        </div>
        <ul style="margin-top: 16px; font-size: var(--text-xs); color: #E2E8F0; list-style: square; padding-left: 20px; line-height: 1.8;">
          <li>1 Unified Purchase Order & 1 Invoice</li>
          <li>Consolidated logistics and verified factory inspections</li>
          <li>Continuous KPI measurement and real-time tracking</li>
        </ul>
      </div>
    </div>

    <div style="background: var(--color-navy-mid); border: 1px solid var(--color-border-dark); padding: 24px; border-left: 4px solid var(--color-lime);">
      <p style="color: var(--color-text-light); line-height: 1.6; margin: 0;">
        The Pearlcon Rail advantage saves your organisation time and money in the procurement process: quick access to the right industry contacts, fast and appropriate quotations, negotiations for the most competitive prices and shortest delivery schedules, and complete forwarder co-ordination.
      </p>
    </div>
  </div>
</section>

<!-- Service CTA -->
<section class="cta-banner" aria-label="Call to Action">
  <div class="container">
    <div class="cta-banner__inner">
      <div>
        <h2 class="cta-banner__title">Tell us what you need. We'll source it.</h2>
        <p class="cta-banner__sub">From standard fasteners to specialized rolling stock bogie systems.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn--dark btn--lg">Contact Our Sourcing Team</a>
    </div>
  </div>
</section>
@endsection 