/**
 * PEARLCON RAIL SERVICES LTD — Core JavaScript
 * Domain: pearlconrail.co.uk
 * Performance: Vanilla JS, zero dependencies, accessible
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Hero Reveal Animation (Single deliberate page-load animation on hero)
  const heroReveal = document.querySelector('.hero__content');
  if (heroReveal) {
    heroReveal.classList.add('hero__content-reveal');
  }

  // 2. Mobile Navigation Toggle
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

  // 3. Active Nav Link Detection (fallback if not set by Blade)
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

  // 4. Accessible Accordion (FAQ on Contact page)
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

  // 5. Contact Form Validation & Submission
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
