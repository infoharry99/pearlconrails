@extends('layouts.app')

@section('title', 'Contact Pearlcon Rail Services — Request a Quote or Sourcing Inquiry')
@section('meta_description', 'Contact Pearlcon Rail Services Ltd for railway equipment sourcing, procurement, and supply chain enquiries. Offices in UK and Saudi Arabia.')

@section('content')
<!-- Inner Hero -->
<section class="hero--inner" aria-label="Page Header">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Contact</span>
    </div>
    <h1>Get in Touch</h1>
    <p>One contact. One quote. Your sourcing starts here.</p>
  </div>
</section>

<!-- Contact Split Layout -->
<section class="section section--light" aria-labelledby="contact-heading">
  <div class="container">
    <div class="grid-2" style="grid-template-columns: 1.25fr 1fr; gap: 48px; align-items: start;">
      <!-- Left: Enquiry Form -->
      <div style="background: var(--color-white); border: 1px solid var(--color-border); padding: 40px;">
        <span class="eyebrow" style="color: var(--color-navy);">Direct Sourcing Request</span>
        <h2 id="contact-heading" style="color: var(--color-navy); margin-bottom: 24px; font-size: var(--text-3xl);">Enquiry & Quotation Form</h2>

        @if(session('success'))
          <div class="form-alert form-alert--success" role="alert" style="display: block;">
            <strong>Thank you for contacting Pearlcon Rail.</strong> {{ session('success') }}
          </div>
        @else
          <div id="formSuccessAlert" class="form-alert form-alert--success" role="alert">
            <strong>Thank you for contacting Pearlcon Rail.</strong> Your enquiry has been received by our procurement desk. We aim to respond within 1 business day.
          </div>
        @endif

        <form id="enquiryForm" action="{{ route('contact.submit') }}" method="POST" novalidate>
          @csrf

          <div class="form-group @error('fullName') form-field--error @enderror">
            <label for="fullName" class="form-label">Full Name <span style="color: #E53E3E;">*</span></label>
            <input type="text" id="fullName" name="fullName" class="form-input" value="{{ old('fullName') }}" required placeholder="e.g. John Smith">
            <div class="form-error-msg">@error('fullName') {{ $message }} @else Please enter your full name. @enderror</div>
          </div>

          <div class="form-group @error('companyName') form-field--error @enderror">
            <label for="companyName" class="form-label">Company Name <span style="color: #E53E3E;">*</span></label>
            <input type="text" id="companyName" name="companyName" class="form-input" value="{{ old('companyName') }}" required placeholder="e.g. Railway Transit Authority">
            <div class="form-error-msg">@error('companyName') {{ $message }} @else Please enter your company or organisation name. @enderror</div>
          </div>

          <div class="grid-2" style="gap: 16px;">
            <div class="form-group @error('country') form-field--error @enderror">
              <label for="country" class="form-label">Country</label>
              <input type="text" id="country" name="country" class="form-input" value="{{ old('country') }}" placeholder="e.g. United Kingdom">
            </div>

            <div class="form-group @error('phoneNumber') form-field--error @enderror">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="tel" id="phoneNumber" name="phoneNumber" class="form-input" value="{{ old('phoneNumber') }}" placeholder="+44 ...">
            </div>
          </div>

          <div class="form-group @error('emailAddress') form-field--error @enderror">
            <label for="emailAddress" class="form-label">Email Address <span style="color: #E53E3E;">*</span></label>
            <input type="email" id="emailAddress" name="emailAddress" class="form-input" value="{{ old('emailAddress') }}" required placeholder="name@company.com">
            <div class="form-error-msg">@error('emailAddress') {{ $message }} @else Please enter a valid business email address. @enderror</div>
          </div>

          <div class="form-group @error('subject') form-field--error @enderror">
            <label for="subject" class="form-label">Subject / Product / Service Required</label>
            <input type="text" id="subject" name="subject" class="form-input" value="{{ old('subject') }}" placeholder="e.g. Rolling Stock Bogie Spare Parts">
          </div>

          <div class="form-group @error('message') form-field--error @enderror">
            <label for="message" class="form-label">Message / Details <span style="color: #E53E3E;">*</span></label>
            <textarea id="message" name="message" class="form-textarea" required placeholder="Please outline part numbers, quantities, target delivery timelines, or technical specifications...">{{ old('message') }}</textarea>
            <div class="form-error-msg">@error('message') {{ $message }} @else Please provide details regarding your requirements. @enderror</div>
          </div>

          <div class="form-group @error('referralSource') form-field--error @enderror">
            <label for="referralSource" class="form-label">How did you hear about us?</label>
            <select id="referralSource" name="referralSource" class="form-select">
              <option value="">Please select</option>
              <option value="Google Search" {{ old('referralSource') == 'Google Search' ? 'selected' : '' }}>Google Search</option>
              <option value="LinkedIn" {{ old('referralSource') == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
              <option value="Referral" {{ old('referralSource') == 'Referral' ? 'selected' : '' }}>Referral</option>
              <option value="Existing Client" {{ old('referralSource') == 'Existing Client' ? 'selected' : '' }}>Existing Client</option>
              <option value="Other" {{ old('referralSource') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
          </div>

          <button type="submit" class="btn btn--primary btn--lg" style="width: 100%; margin-top: 10px;">Send Enquiry</button>
        </form>
      </div>

      <!-- Right: Contact Details (dark navy) -->
      <div>
        <div class="panel panel--navy panel--lime-top" style="padding: 40px 32px;">
          <span class="eyebrow">Direct Contact Details</span>
          <h3 style="color: var(--color-white); font-size: var(--text-2xl); margin-bottom: 24px;">Global Operating Desks</h3>

          <div style="margin-bottom: 28px; line-height: 1.7; font-size: var(--text-base);">
            <div style="margin-bottom: 12px;">
              <strong style="color: var(--color-white); display: block; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-lime);">Telephone</strong>
              <span style="font-family: var(--font-display); font-size: var(--text-2xl); color: var(--color-white); font-weight: 700;">+44 (0) 1234 440 530</span>
            </div>
            <div style="margin-bottom: 12px;">
              <strong style="color: var(--color-white); display: block; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-lime);">Email</strong>
              <a href="mailto:sales@pearlcon.com" style="color: var(--color-white); text-decoration: underline;">sales@pearlcon.com</a>
            </div>
            <div style="margin-bottom: 12px;">
              <strong style="color: var(--color-white); display: block; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-lime);">Website</strong>
              <span style="color: var(--color-text-light);">pearlconrail.co.uk</span>
            </div>
            <div style="margin-bottom: 12px;">
              <strong style="color: var(--color-white); display: block; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-lime);">Fax</strong>
              <span style="color: var(--color-text-light);">(123) 118 9999</span>
            </div>
          </div>

          <div style="border-top: 1px solid var(--color-border-dark); padding-top: 24px; margin-bottom: 24px;">
            <h4 style="color: var(--color-lime); font-size: var(--text-lg); margin-bottom: 6px;">UK Registered Office</h4>
            <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6; margin: 0;">
              38F Chigwell Lane, Oakhill Industrial Estate<br>
              Loughton IG10 3NY, United Kingdom
            </p>
          </div>

          <div style="border-top: 1px solid var(--color-border-dark); padding-top: 24px; margin-bottom: 24px;">
            <h4 style="color: var(--color-lime); font-size: var(--text-lg); margin-bottom: 6px;">Kingdom of Saudi Arabia Office</h4>
            <p style="color: var(--color-text-light); font-size: var(--text-sm); line-height: 1.6; margin: 0;">
              Pearlcon LLC<br>
              2996 Najd Street, Al Tubayshi<br>
              Dammam 32233, Saudi Arabia
            </p>
          </div>

          <div style="background: rgba(13,31,60,0.6); border: 1px solid var(--color-border-dark); padding: 18px; font-size: var(--text-xs); color: var(--color-text-light); line-height: 1.7;">
            <div><strong>Business Hours:</strong> Monday–Friday, 9:00 AM – 5:30 PM (GMT)</div>
            <div><strong>Response Time:</strong> We aim to respond to all enquiries within 1 business day.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section with Accordion -->
<section class="section section--light" style="padding-top: 0;" aria-labelledby="faq-heading">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto;">
      <span class="eyebrow" style="color: var(--color-navy); text-align: left;">Clear Answers</span>
      <h2 id="faq-heading" style="color: var(--color-navy); margin-bottom: 32px;">Frequently Asked Questions</h2>

      <div class="accordion" role="region" aria-label="FAQ Accordion">
        <!-- Q1 -->
        <div class="accordion__item">
          <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-1">
            <span>What types of railway products can Pearlcon Rail source?</span>
            <span class="accordion__icon">+</span>
          </button>
          <div id="faq-1" class="accordion__content">
            We source across all railway disciplines — from everyday consumables and MRO parts to complex capital equipment including rolling stock components, signalling systems, electrification equipment, track materials, and station infrastructure.
          </div>
        </div>

        <!-- Q2 -->
        <div class="accordion__item">
          <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-2">
            <span>Do you work with rail operators outside the UK?</span>
            <span class="accordion__icon">+</span>
          </button>
          <div id="faq-2" class="accordion__content">
            Yes. We serve clients across the UK, Europe, Middle East, and North Africa. Our buying offices in the UK, US, and China give us reach to source from global suppliers for any client, anywhere.
          </div>
        </div>

        <!-- Q3 -->
        <div class="accordion__item">
          <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-3">
            <span>How do I place an order or get a quote?</span>
            <span class="accordion__icon">+</span>
          </button>
          <div id="faq-3" class="accordion__content">
            Contact us via the form above or directly at sales@pearlcon.com. Our sourcing team will review your requirements and respond with a competitive quotation.
          </div>
        </div>

        <!-- Q4 -->
        <div class="accordion__item">
          <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-4">
            <span>Can Pearlcon Rail handle urgent or one-off sourcing needs?</span>
            <span class="accordion__icon">+</span>
          </button>
          <div id="faq-4" class="accordion__content">
            Yes — urgent and one-off sourcing is one of our specialisms. Our strategic sourcing team works to identify and procure even the most elusive items, often at short notice.
          </div>
        </div>

        <!-- Q5 -->
        <div class="accordion__item">
          <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-5">
            <span>Do you manage shipping and delivery as well?</span>
            <span class="accordion__icon">+</span>
          </button>
          <div id="faq-5" class="accordion__content">
            Yes. We provide an end-to-end logistics service including order tracking, shipping documentation, freight forwarding co-ordination, customs clearance, and delivery to your warehouse.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
