@extends('layouts.app')

@section('title', 'Why Pearlcon Rail — Advantages, Capabilities & Approach')
@section('meta_description', 'Discover why leading rail operators choose Pearlcon Rail for procurement. Simplicity, global reach, on-time delivery, and a comprehensive product range.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Why Us</span>
    </div>
    <h1>Why Pearlcon Rail</h1>
    <p>The procurement partner built specifically for rail</p>
  </div>
</section>

<!-- The Problem We Solve -->
<section class="section section--light" aria-labelledby="problem-heading">
  <div class="container">
    <div style="max-width: 840px; margin-bottom: 40px;">
      <span class="eyebrow" style="color: var(--color-navy);">The Industry Challenge</span>
      <h2 id="problem-heading" style="color: var(--color-navy); margin-bottom: 16px;">Rail Procurement Is Complex. We Make It Simple.</h2>
      <p style="color: var(--color-text-mid); font-size: var(--text-lg); line-height: 1.6;">
        In a typical organisation, 80% of all procurement transactions constitute less than 20% of spend. These transactions tie up valuable resources and the return on investment is negligible. Pearlcon Rail is specialised in dealing with these back-office processes and guarantees to save your resources, time, and cost.
      </p>
    </div>

    <!-- Six procurement challenge blocks -->
    <div class="grid-2" style="gap: 16px;">
      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">01</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">Delays</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">Supplier fails to deliver on time, interrupting maintenance cycles</span>
        </div>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">02</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">One-Off Needs</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">Hard-to-source materials outside established vendor contracts</span>
        </div>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">03</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">Supply Failure</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">Supplier fails to deliver critical materials or cancels orders</span>
        </div>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">04</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">Too Many Suppliers</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">Severe administrative overhead managing hundreds of fragmented contacts</span>
        </div>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">05</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">Wasted Resources</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">Focusing on ordering and expediting multiple purchase orders for low-value items</span>
        </div>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-navy); padding: 18px 22px; display: flex; align-items: center; gap: 16px;">
        <span style="font-family: var(--font-display); font-size: var(--text-2xl); font-weight: 700; color: var(--color-lime-dark);">06</span>
        <div>
          <strong style="color: var(--color-navy); display: block; font-size: var(--text-base);">Complex Needs</strong>
          <span style="color: var(--color-text-mid); font-size: var(--text-sm);">A wide range of specific technical, complex, and capital equipment needed in short timeframes</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The Four Advantages -->
<section class="section section--navy" aria-labelledby="advantages-heading">
  <div class="container">
    <div style="margin-bottom: 44px;">
      <span class="eyebrow">Distinctive Strengths</span>
      <h2 id="advantages-heading">The Pearlcon Advantages</h2>
    </div>

    <div class="grid-2" style="gap: 28px;">
      <!-- Simplicity -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">01 / Advantage</span>
        <h3 style="color: var(--color-lime); font-size: var(--text-3xl); margin-bottom: 12px;">Simplicity</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-base); line-height: 1.6;">
          A single purchase order; a single invoice; a single point of contact. We manage every complexity so you don't have to — streamlining the complete commercial and administrative lifecycle.
        </p>
      </div>

      <!-- Global Reach -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">02 / Advantage</span>
        <h3 style="color: var(--color-lime); font-size: var(--text-3xl); margin-bottom: 12px;">Global Reach</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-base); line-height: 1.6;">
          We give your business access to international suppliers across UK, US, European, and Asian markets — without the risk. Better technology, better value, and superior product availability.
        </p>
      </div>

      <!-- Maximum Efficiency -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">03 / Advantage</span>
        <h3 style="color: var(--color-lime); font-size: var(--text-3xl); margin-bottom: 12px;">Maximum Efficiency</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-base); line-height: 1.6;">
          We supply all goods 'On Time In Full,' with continuous KPI measurement delivered to you via regular, structured performance reports for complete accountability.
        </p>
      </div>

      <!-- Comprehensive Range -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">04 / Advantage</span>
        <h3 style="color: var(--color-lime); font-size: var(--text-3xl); margin-bottom: 12px;">Comprehensive Range</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-base); line-height: 1.6;">
          Access a complete range of products — from everyday consumables and maintenance parts to large capital equipment — across every railway engineering discipline.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Procurement Challenges — Our Solutions -->
<section class="section section--light" aria-labelledby="challenges-solutions-heading">
  <div class="container">
    <div class="grid-2" style="gap: 48px; align-items: center;">
      <div>
        <span class="eyebrow" style="color: var(--color-navy);">Proven Resolution</span>
        <h2 id="challenges-solutions-heading" style="color: var(--color-navy); margin-bottom: 20px;">Procurement Challenges We Solve</h2>
        <p style="color: var(--color-text-mid); font-size: var(--text-base); line-height: 1.6;">
          Often a situation arises in which your organisation requires a critical item or piece of equipment – as quickly as possible. Without the item in question, your business faces costly delays.
        </p>
        <p style="color: var(--color-text-mid); font-size: var(--text-base); line-height: 1.6;">
          Alternatively, your organisation may need a one-off piece of equipment outside the scope of its usual suppliers. Without established purchasing partnerships, your business will pay more than it should.
        </p>
        <p style="color: var(--color-text-mid); font-size: var(--text-base); line-height: 1.6;">
          Major organisations turn to Pearlcon Rail to resolve these high-friction procurement scenarios rapidly, cost-effectively, and reliably.
        </p>
      </div>

      <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 32px;" class="panel--lime-top">
        <h3 style="color: var(--color-navy); margin-bottom: 18px;">How Pearlcon Responds</h3>
        <ul class="feature-list" style="color: var(--color-text-mid); font-size: var(--text-base);">
          <li>Our strategic sourcing team works exhaustively to identify and procure even the most elusive items.</li>
          <li>Through longstanding global alliances and dealer networks, Pearlcon Rail can source anything you require — anywhere — from a trusted source.</li>
          <li>Our partnerships allow us to match you with the ideal purchase: targeting value for money, product quality, and the most convenient logistics solution to save you money and time.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Approach -->
<section class="section section--navy" aria-labelledby="approach-heading">
  <div class="container">
    <div style="margin-bottom: 44px;">
      <span class="eyebrow">Structured Methodology</span>
      <h2 id="approach-heading">How We Work With You</h2>
    </div>

    <div class="grid-4">
      <div class="panel panel--navy panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-4xl); color: var(--color-lime); font-weight: 700; display: block; margin-bottom: 10px;">01</span>
        <h3 style="color: var(--color-white); font-size: var(--text-xl); margin-bottom: 10px;">Define Scope</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6;">
          We agree together on the products, categories, technical specifications, and delivery services in scope for your account.
        </p>
      </div>

      <div class="panel panel--navy panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-4xl); color: var(--color-lime); font-weight: 700; display: block; margin-bottom: 10px;">02</span>
        <h3 style="color: var(--color-white); font-size: var(--text-xl); margin-bottom: 10px;">Dedicated Team</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6;">
          You receive a dedicated account management team backed by IT infrastructure for real-time transaction visibility and status updates.
        </p>
      </div>

      <div class="panel panel--navy panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-4xl); color: var(--color-lime); font-weight: 700; display: block; margin-bottom: 10px;">03</span>
        <h3 style="color: var(--color-white); font-size: var(--text-xl); margin-bottom: 10px;">Source & Procure</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6;">
          Our global sourcing team identifies vetted suppliers, conducts factory inspections, negotiates pricing, and manages all orders.
        </p>
      </div>

      <div class="panel panel--navy panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-4xl); color: var(--color-lime); font-weight: 700; display: block; margin-bottom: 10px;">04</span>
        <h3 style="color: var(--color-white); font-size: var(--text-xl); margin-bottom: 10px;">Deliver & Report</h3>
        <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6;">
          We manage shipping logistics, track every order to final delivery, and provide regular structured KPI performance reports.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="cta-banner" aria-label="Call to Action">
  <div class="container">
    <div class="cta-banner__inner">
      <div>
        <h2 class="cta-banner__title">Talk to our procurement specialists today.</h2>
        <p class="cta-banner__sub">Let us show you how we can drive efficiency across your rail supply chain.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn--dark btn--lg">Get in Touch</a>
    </div>
  </div>
</section>
@endsection