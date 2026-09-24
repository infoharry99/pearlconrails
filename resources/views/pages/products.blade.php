@extends('layouts.app')

@section('title', 'Products & Sectors — Pearlcon Rail | Railway Equipment & Parts')
@section('meta_description', 'Pearlcon Rail supplies railway equipment across electrification, rolling stock, signalling, track, station equipment, and more — sourced globally from trusted suppliers.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Products</span>
    </div>
    <h1>Products & Sectors</h1>
    <p>From everyday consumables to large capital equipment — across all railway disciplines</p>
  </div>
</section>

<!-- Products Overview Table -->
<section class="section section--light" aria-labelledby="products-table-heading">
  <div class="container">
    <div style="margin-bottom: 32px;">
      <span class="eyebrow" style="color: var(--color-navy);">Procurement Catalogue</span>
      <h2 id="products-table-heading" style="color: var(--color-navy); margin-bottom: 12px;">Products & Services Overview</h2>
      <p style="color: var(--color-text-mid); max-width: 780px;">
        Structured breakdown of our core railway supply disciplines, sourced from approved manufacturers across the UK, US, and European markets.
      </p>
    </div>

    <div class="table-wrap">
      <table class="data-table" aria-label="Railway Products and Services by Discipline">
        <thead>
          <tr>
            <th scope="col" style="width: 28%;">Category</th>
            <th scope="col">Key Products & Services</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-category">Electrification & Power Supply</td>
            <td>Overhead line equipment, railway cables, power supply systems, circuit protection, DC power, standby power solutions</td>
          </tr>
          <tr>
            <td class="cell-category">Rail Safety</td>
            <td>Access control, anti-slip products, fire-approved coatings, high-visibility workwear, diagnostics, emergency equipment</td>
          </tr>
          <tr>
            <td class="cell-category">Rolling Stock MRO</td>
            <td>Bogies parts & wheelsets, braking systems, door systems, traction, gears, interior fittings, power supplies, data systems</td>
          </tr>
          <tr>
            <td class="cell-category">Signalling & Control</td>
            <td>Interlockings, LED signals, level crossing controls, train management systems, cab equipment, signalling design service</td>
          </tr>
          <tr>
            <td class="cell-category">Station Equipment</td>
            <td>Ticketing & fare collection, escalators, platform seating, signage, fire protection, security, access control</td>
          </tr>
          <tr>
            <td class="cell-category">Track & Infrastructure</td>
            <td>Rail fastening systems, sleepers, welding, track maintenance equipment, switches, trackside security solutions</td>
          </tr>
          <tr>
            <td class="cell-category">Consultancy</td>
            <td>Engineering, environmental, safety, transport planning, and rail signage consultancy services</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Key Products List -->
<section class="section section--light" style="padding-top: 0;" aria-labelledby="key-products-heading">
  <div class="container">
    <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 40px;">
      <span class="eyebrow" style="color: var(--color-navy);">Component Portfolio</span>
      <h2 id="key-products-heading" style="color: var(--color-navy); margin-bottom: 24px;">Key Products & Sub-Assemblies</h2>
      
      <div class="grid-2" style="gap: 20px;">
        <ul class="feature-list" style="color: var(--color-text-mid);">
          <li>Switchgear modules</li>
          <li>Power electronic devices</li>
          <li>Computer systems and ancillary apparatus</li>
          <li>Cabling and harness work</li>
          <li>LED and state-of-the-art displays</li>
          <li>Mechanical components — precision and cast</li>
        </ul>
        <ul class="feature-list" style="color: var(--color-text-mid);">
          <li>Signage, security products and lighting systems</li>
          <li>Rail parts and mechanisms</li>
          <li>Stations and passenger facilities</li>
          <li>Control panels and sub assemblies</li>
          <li>Custom built products for new applications</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Sectors Served (Full Detailed List on Navy) -->
<section class="section section--navy" aria-labelledby="sectors-detailed-heading">
  <div class="container">
    <div style="margin-bottom: 40px;">
      <span class="eyebrow">Industry Domains</span>
      <h2 id="sectors-detailed-heading">Sectors Served</h2>
      <p style="color: var(--color-text-light); max-width: 720px; font-size: var(--text-base);">
        We supply specialized components, equipment, and consulting across every operational facet of passenger, freight, and urban rail infrastructure.
      </p>
    </div>

    <div class="grid-2" style="gap: 24px;">
      <div class="panel panel--navy panel--lime-top">
        <ul class="feature-list" style="color: var(--color-text-light); font-size: var(--text-base);">
          <li>Transport Infrastructure</li>
          <li>Workshops and Depots</li>
          <li>Transport Facilities & Logistics (freight and personnel)</li>
          <li>Rolling Stock Modules & Components</li>
          <li>Signalling & Communications Equipment</li>
          <li>IT / Communications Systems</li>
          <li>Transport Consulting</li>
          <li>Operations Management</li>
        </ul>
      </div>

      <div class="panel panel--navy panel--lime-top">
        <ul class="feature-list" style="color: var(--color-text-light); font-size: var(--text-base);">
          <li>Research & Development</li>
          <li>Stations & Passenger Facilities</li>
          <li>Lifts, Escalators & Moving Walkways</li>
          <li>Light Rail & Tram Systems</li>
          <li>Electrification & Power Supply</li>
          <li>Railway Safety Services & Parts</li>
          <li>Fare Collection</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Support Activities -->
<section class="section section--light" aria-labelledby="support-heading">
  <div class="container">
    <div style="margin-bottom: 36px;">
      <span class="eyebrow" style="color: var(--color-navy);">Engagement Scope</span>
      <h2 id="support-heading" style="color: var(--color-navy);">Three Areas of Support</h2>
    </div>

    <div class="grid-3">
      <div class="panel panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-3xl); color: var(--color-navy); display: block; margin-bottom: 12px; font-weight: 700;">01</span>
        <h3 style="color: var(--color-navy); font-size: var(--text-xl); margin-bottom: 12px;">Maintenance & R&D</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Source and supply of maintenance or R&D products, replacement assemblies, obsolete spare parts, and experimental prototypes.
        </p>
      </div>

      <div class="panel panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-3xl); color: var(--color-navy); display: block; margin-bottom: 12px; font-weight: 700;">02</span>
        <h3 style="color: var(--color-navy); font-size: var(--text-xl); margin-bottom: 12px;">Ongoing Operations</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Regular, recurring supply of products and consumables for ongoing production runs, planned maintenance schedules, and active depot activities.
        </p>
      </div>

      <div class="panel panel--lime-top">
        <span style="font-family: var(--font-display); font-size: var(--text-3xl); color: var(--color-navy); display: block; margin-bottom: 12px; font-weight: 700;">03</span>
        <h3 style="color: var(--color-navy); font-size: var(--text-xl); margin-bottom: 12px;">Cost & Process Optimization</h3>
        <p style="color: var(--color-text-mid); font-size: var(--text-sm); line-height: 1.6;">
          Strategic service to audit, improve and consolidate the procurement process, eliminate administrative waste, and drive down overall operational costs.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner" aria-label="Call to Action">
  <div class="container">
    <div class="cta-banner__inner">
      <div>
        <h2 class="cta-banner__title">Every elusive part sourced. Talk to us.</h2>
        <p class="cta-banner__sub">Our dedicated sourcing desk locates difficult, legacy, and custom rail parts.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn--dark btn--lg">Submit a Sourcing Request</a>
    </div>
  </div>
</section>
@endsection
