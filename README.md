# PEARLCON RAIL SERVICES LTD — Official Website

> **Tagline:** Supporting Rail Companies Around the World  
> **Sub-tagline:** Providing smart, efficient and global procurement & consulting solutions for the rail industry  
> **Website Domain:** [pearlconrail.co.uk](https://pearlconrail.co.uk)  
> **Headquarters:** Loughton, Essex, United Kingdom  
> **Operating Footprint:** UK · US · Europe · Saudi Arabia · China  

---

## 1. Overview

Pearlcon Rail Services Ltd (trading as **Pearlcon Rail**) is a UK-registered specialist railway supplying, sourcing, procurement, logistics, and consultancy company serving global railway operators, transit authorities, and maintenance organisations.

This repository contains the complete, production-ready website engineered in **Laravel (Blade Components, Controllers, Form Validation, Clean Routing)** and paired with a **zero-dependency, accessible vanilla HTML5/CSS3/JS build**.

---

## 2. Design System & Brand Identity

### Palette
| Color | Hex | Purpose |
|---|---|---|
| Deep Railway Navy | `#0D1F3C` | Primary brand authority, dark sections, headers, footer |
| Navy Mid | `#162A4A` | Card backgrounds, section fills, diagram panels |
| Navy Light | `#1E3A5F` | Subtle borders and dividers |
| Brand Lime | `#8DC63F` | Action accent, CTA buttons, indicators, highlights |
| Dark Lime | `#6FAD2A` | Hover states |
| Pure White | `#FFFFFF` | Hero headline, high-contrast cards |
| Off-White | `#F5F7FA` | Clean industrial section backgrounds |
| Slate Dark | `#0D1F3C` | Body text on light backgrounds |
| Slate Mid | `#4A5568` | Secondary body copy |
| Light Slate | `#CBD5E0` | Subtitles, footer copy |

### Typography
- **Display Font:** `Barlow Condensed` (Google Fonts) — Hero headlines, section titles, stat figures
- **Body Font:** `Inter` (Google Fonts) — Navigation, narrative copy, form labels, buttons
- **Design Principles:** Sharp 0px corners, high data-density tables, SVG architecture diagram of the *One Stop Shop*, accessible focus indicators, single deliberate page-load reveal animation on hero.

---

## 3. Site Architecture

```
/
├── index.html                   → Homepage (Full Hero, At a Glance, Capabilities, Sectors, Clients)
├── about.html                   → About Pearlcon Rail (Overview, Solutions, Global Offices)
├── services.html                → Services & Solutions (6 Structured Strips, One-Stop Shop Diagram)
├── products.html                → Products & Sectors (Procurement Data Table, Key Components)
├── why-us.html                  → Why Pearlcon Rail (Problem statement, 4 Advantages, Methodology)
├── clients.html                 → Rail Clients & Global Reach (Network Rail, HS2, London Underground, SAR)
├── contact.html                 → Contact & Sourcing Enquiry Form (55/45 Split, Accessible FAQ Accordion)
│
├── app/
│   └── Http/Controllers/
│       ├── Controller.php       → Base Controller
│       ├── PageController.php   → 7 Page Routes
│       └── ContactController.php→ Enquiry validation & processing
│
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php        → Master layout with meta, fonts, assets
│   ├── partials/
│   │   ├── nav.blade.php        → Responsive top navigation
│   │   └── footer.blade.php     → 3-Column corporate footer
│   └── pages/
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       ├── products.blade.php
│       ├── why-us.blade.php
│       ├── clients.blade.php
│       └── contact.blade.php
│
├── routes/
│   └── web.php                  → Clean named routes
│
├── public/
│   ├── index.php                → Laravel front controller
│   ├── .htaccess                → URL rewrite rules
│   └── assets/
│       ├── css/style.css        → Unified Design System stylesheet
│       ├── js/script.js         → Vanilla JS (Mobile Nav, Accordion, Hero Reveal, Validation)
│       └── img/
│           ├── logo.svg         → High-speed train silhouette with lime accent
│           └── favicon.svg      → Sleek rail icon
│
├── composer.json                → Laravel 10/11 specifications
├── .env.example                 → Production configuration & mail settings
└── README.md
```

---

## 4. How to Run

### Option A: Running as a Laravel Application
```bash
# 1. Install dependencies
composer install

# 2. Copy environment file
cp .env.example .env
php artisan key:generate

# 3. Start local development server
php artisan serve
```
Visit `http://localhost:8000` in your web browser.

### Option B: Running as Standalone Static HTML
Simply double-click `index.html` or open any `.html` file directly in any modern browser (Chrome, Edge, Firefox, Safari) or serve with any static web server:
```bash
npx serve .
# or
python -m http.server 8000
```

---

## 5. Contact Information

- **Phone:** +44 (0) 1234 440 530  
- **Email:** sales@pearlcon.com  
- **Website:** [pearlconrail.co.uk](https://pearlconrail.co.uk)  
- **UK Headquarters:** 38F Chigwell Lane, Oakhill Industrial Estate, Loughton IG10 3NY, UK  
- **Saudi Arabia Office:** Pearlcon LLC, 2996 Najd Street, Al Tubayshi, Dammam 32233, Saudi Arabia  
