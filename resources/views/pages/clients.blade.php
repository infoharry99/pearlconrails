@extends('layouts.app')

@section('title', 'Clients & Global Reach — Pearlcon Rail Services')
@section('meta_description', 'Pearlcon Rail Services works with leading rail operators including Network Rail, London Underground, HS2, and Saudi Arabian Railway. Discover our global reach.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Clients</span>
    </div>
    <h1>Rail Clients & Global Reach</h1>
    <p>Trusted by rail operators across the UK, Europe, and the Middle East</p>
  </div>
</section>

<!-- Client Overview -->
<section class="section section--light" aria-labelledby="client-overview-heading">
  <div class="container">
    <div style="max-width: 820px; margin-bottom: 44px;">
      <span class="eyebrow" style="color: var(--color-navy);">Industry Relationships</span>
      <h2 id="client-overview-heading" style="color: var(--color-navy); margin-bottom: 16px;">Who We Work With</h2>
      <p style="color: var(--color-text-mid); font-size: var(--text-lg); line-height: 1.6;">
        Pearlcon Rail works with leading railway organisations across the globe. Our clients include national rail networks, urban transit authorities, and major rail infrastructure programmes. We serve as their single sourcing partner — supplying equipment, spare parts, and procurement services that keep their operations running.
      </p>
    </div>

    <!-- 4 Detailed Client Panels -->
    <div class="grid-2" style="gap: 28px;">
      <!-- Saudi Arabian Railway Company -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">Middle East National Operator</span>
        <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 12px;">Saudi Arabian Railway Company</h3>
        <p style="color: var(--color-lime); font-size: var(--text-sm); font-weight: 600; margin-bottom: 12px;">Saudi Arabia</p>
        <p style="color: var(--color-text-light); line-height: 1.6;">
          One of the major national rail networks in the Middle East — supplying equipment, components, and spare parts for rail operations and capital expansions across the Kingdom.
        </p>
      </div>

      <!-- Network Rail -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">National Infrastructure Authority</span>
        <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 12px;">Network Rail</h3>
        <p style="color: var(--color-lime); font-size: var(--text-sm); font-weight: 600; margin-bottom: 12px;">United Kingdom</p>
        <p style="color: var(--color-text-light); line-height: 1.6;">
          The infrastructure manager for most of the railway network in England, Scotland, and Wales — supporting procurement of track, infrastructure, and ongoing maintenance materials.
        </p>
      </div>

      <!-- London Underground -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">Urban Mass Transit Network</span>
        <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 12px;">London Underground</h3>
        <p style="color: var(--color-lime); font-size: var(--text-sm); font-weight: 600; margin-bottom: 12px;">United Kingdom</p>
        <p style="color: var(--color-text-light); line-height: 1.6;">
          The world's oldest metro system — supplying rolling stock components, station equipment, signalling parts, and MRO materials for one of the world's busiest urban rail networks.
        </p>
      </div>

      <!-- HS2 -->
      <div class="panel panel--navy panel--lime-top">
        <span class="eyebrow">High-Speed Rail Mega-Project</span>
        <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 12px;">HS2</h3>
        <p style="color: var(--color-lime); font-size: var(--text-sm); font-weight: 600; margin-bottom: 12px;">United Kingdom</p>
        <p style="color: var(--color-text-light); line-height: 1.6;">
          High Speed 2 — Britain's new high-speed rail programme. Supporting supply chain requirements and precision procurement for one of the UK's most significant infrastructure projects.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Geographic Reach -->
<section class="section section--light" style="padding-top: 0;" aria-labelledby="footprint-heading">
  <div class="container">
    <div style="margin-bottom: 36px;">
      <span class="eyebrow" style="color: var(--color-navy);">Territorial Presence</span>
      <h2 id="footprint-heading" style="color: var(--color-navy);">Our Global Footprint</h2>
    </div>

    <div class="grid-3">
      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); font-size: var(--text-2xl); margin-bottom: 12px;">United Kingdom & Europe</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Headquarters in Loughton, Essex. Deep supplier network across the UK, Germany, France, and wider Europe. Serving Network Rail, London Underground, HS2, and European rail clients.
        </p>
      </div>

      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); font-size: var(--text-2xl); margin-bottom: 12px;">United States</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Established buying office in the US. Sourcing American engineering components, safety equipment, electrical sub-systems, and technology for international rail clients.
        </p>
      </div>

      <div class="panel panel--lime-top">
        <h3 style="color: var(--color-navy); font-size: var(--text-2xl); margin-bottom: 12px;">Middle East & North Africa</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Registered operating office in Dammam, Saudi Arabia (Pearlcon LLC). Supplying equipment, materials, and components for major projects, plant operation, and maintenance in the Kingdom and MENA region.
        </p>
      </div>
    </div>

    <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 20px 24px; margin-top: 24px;">
      <p style="font-size: var(--text-sm); color: var(--color-text-mid); margin: 0;">
        <strong style="color: var(--color-navy);">Supplementary Asia-Pacific Sourcing:</strong> Also serving clients through dedicated buying offices and established manufacturer relationships in China and across Asia Pacific.
      </p>
    </div>
  </div>
</section>

<!-- Supplier Base (Lime Bar) -->
<section class="section section--lime" style="padding: 40px 0;" aria-label="Supplier statistics">
  <div class="container" style="text-align: center;">
    <p style="font-family: var(--font-display); font-size: var(--text-3xl); font-weight: 700; color: var(--color-navy); line-height: 1.2; margin: 0;">
      5,000+ established suppliers in various parts of the world — ensuring competitive pricing and on-time delivery, even for the most difficult products.
    </p>
  </div>
</section>

<!-- Work With Us -->
<section class="section section--navy" aria-labelledby="work-with-us-heading">
  <div class="container" style="text-align: left;">
    <div style="max-width: 780px;">
      <span class="eyebrow">Enterprise Procurement Partnership</span>
      <h2 id="work-with-us-heading" style="margin-bottom: 16px;">Join Our Growing Client Base</h2>
      <p style="color: var(--color-text-light); font-size: var(--text-lg); line-height: 1.6; margin-bottom: 28px;">
        Whether you are a national rail authority, an urban transit operator, or a maintenance organisation, Pearlcon Rail can become your single sourcing partner.
      </p>
      <a href="{{ route('contact') }}" class="btn btn--primary btn--lg">Get in Touch</a>
    </div>
  </div>
</section>
@endsection
