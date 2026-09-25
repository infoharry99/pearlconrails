/**
 * PEARLCON RAIL SERVICES LTD — Core JavaScript
 * Domain: pearlconrail.co.uk
 * Performance: Vanilla JS, zero dependencies, accessible, 60fps micro-interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Hero Reveal Animation (Single deliberate page-load animation on hero)
  const heroReveal = document.querySelector('.hero__content');
  if (heroReveal) {
    heroReveal.classList.add('hero__content-reveal');
  }

  // 2. Dynamic Sticky Navbar on Scroll
  const navHeader = document.querySelector('.nav');
  if (navHeader) {
    const handleScroll = () => {
      if (window.scrollY > 24) {
        navHeader.classList.add('is-scrolled');
      } else {
        navHeader.classList.remove('is-scrolled');
      }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // run once on init
  }

  // 3. Scroll-Triggered Reveal Animations (IntersectionObserver)
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    // Fallback: reveal immediately if IntersectionObserver is unsupported
    revealElements.forEach(el => el.classList.add('is-revealed'));
  }

  // 4. Interactive 3D Glow on Who-We-Are Card
  const orbitalCard = document.querySelector('.who-we-are-card');
  if (orbitalCard) {
    orbitalCard.addEventListener('mousemove', (e) => {
      const rect = orbitalCard.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;
      orbitalCard.style.background = `radial-gradient(circle at ${x}% ${y}%, #1a345d 0%, #0D1F3C 75%)`;
    });

    orbitalCard.addEventListener('mouseleave', () => {
      orbitalCard.style.background = 'radial-gradient(circle at 50% 30%, #152A4A 0%, #0D1F3C 100%)';
    });
  }

  // 5. Interactive Orbital Nodes (Click / Hover corridor highlight)
  const orbitalNodes = document.querySelectorAll('.orbital-node');
  orbitalNodes.forEach(node => {
    node.style.cursor = 'pointer';
    node.addEventListener('mouseenter', () => {
      const circle = node.querySelector('circle:nth-child(2)');
      if (circle) circle.setAttribute('fill', '#8DC63F');
      const text = node.querySelector('text');
      if (text) text.setAttribute('fill', '#0D1F3C');
    });

    node.addEventListener('mouseleave', () => {
      const circle = node.querySelector('circle:nth-child(2)');
      if (circle) circle.setAttribute('fill', '#162A4A');
      const text = node.querySelector('text');
      if (text) text.setAttribute('fill', '#FFFFFF');
    });
  });

  // 6. Mobile Navigation Toggle
  const mobileToggle = document.querySelector('.nav__mobile-toggle');
  const navLinks = document.querySelector('.nav__links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
      mobileToggle.setAttribute('aria-expanded', !isExpanded);
      navLinks.classList.toggle('is-open');
    });

    // Close mobile nav when clicking a link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          navLinks.classList.remove('is-open');
          mobileToggle.setAttribute('aria-expanded', 'false');
        }
      });
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navLinks.classList.contains('is-open')) {
        navLinks.classList.remove('is-open');
        mobileToggle.setAttribute('aria-expanded', 'false');
        mobileToggle.focus();
      }
    });
  }

  // 7. Active Nav Link Detection (fallback if not set by Blade)
  const currentPath = window.location.pathname;
  const pageName = currentPath.split('/').pop() || 'index.html';
  const navItems = document.querySelectorAll('.nav__link');

  navItems.forEach(item => {
    const href = item.getAttribute('href');
    if (href) {
      const itemPage = href.split('/').pop();
      if (itemPage === pageName || (pageName === '' && itemPage === 'index.html') || (pageName === 'index.html' && itemPage === '/')) {
        item.classList.add('is-active');
      }
    }
  });

  // 8. Accessible Accordion (FAQ on Contact page)
  const accordionTriggers = document.querySelectorAll('.accordion__trigger');

  accordionTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
      const targetId = trigger.getAttribute('aria-controls');
      const targetPanel = document.getElementById(targetId);

      // Close all other accordions (clean, focused UX)
      accordionTriggers.forEach(otherTrigger => {
        if (otherTrigger !== trigger) {
          otherTrigger.setAttribute('aria-expanded', 'false');
          const otherId = otherTrigger.getAttribute('aria-controls');
          const otherPanel = document.getElementById(otherId);
          if (otherPanel) {
            otherPanel.classList.remove('is-open');
          }
        }
      });

      // Toggle current accordion
      trigger.setAttribute('aria-expanded', !isExpanded);
      if (targetPanel) {
        targetPanel.classList.toggle('is-open', !isExpanded);
      }
    });
  });

  // 9. Contact Form Validation & Submission
  const contactForm = document.getElementById('enquiryForm');
  const formAlert = document.getElementById('formSuccessAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      let isValid = true;

      // Validate required inputs
      const requiredFields = contactForm.querySelectorAll('[required]');
      requiredFields.forEach(field => {
        const formFieldGroup = field.closest('.form-group');
        const value = field.value.trim();

        if (!value) {
          isValid = false;
          if (formFieldGroup) formFieldGroup.classList.add('form-field--error');
        } else if (field.type === 'email') {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(value)) {
            isValid = false;
            if (formFieldGroup) formFieldGroup.classList.add('form-field--error');
          } else {
            if (formFieldGroup) formFieldGroup.classList.remove('form-field--error');
          }
        } else {
          if (formFieldGroup) formFieldGroup.classList.remove('form-field--error');
        }

        // Clear error on input
        field.addEventListener('input', () => {
          if (formFieldGroup) formFieldGroup.classList.remove('form-field--error');
        }, { once: true });
      });

      if (!isValid) {
        e.preventDefault();
        const firstError = contactForm.querySelector('.form-field--error input, .form-field--error textarea');
        if (firstError) firstError.focus();
      } else {
        // If this is a static page without PHP backend submission endpoint
        if (!contactForm.getAttribute('action') || contactForm.getAttribute('action') === '#' || contactForm.getAttribute('action') === '') {
          e.preventDefault();
          if (formAlert) {
            formAlert.style.display = 'block';
            formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
          contactForm.reset();
        }
      }
    });
  }
});
