/**
 * MSIX Engineering & Design Solution - Interactive Site Scripts & Animation Engine
 */

(function () {
  'use strict';

  document.documentElement.classList.add('js');

  // ==========================================
  // 1. Sticky Header Scroll State
  // ==========================================
  const header = document.getElementById('siteHeader');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // ==========================================
  // 2. Mobile Navigation Drawer & Hamburger Toggle
  // ==========================================
  const mobileBtn = document.getElementById('mobileMenuBtn');
  const mobileDrawer = document.getElementById('mobileDrawer') || document.getElementById('mainNav');
  const navBackdrop = document.getElementById('navBackdrop');
  const drawerClose = document.getElementById('mobileDrawerClose');

  if (mobileBtn && mobileDrawer) {
    const setDrawerOpen = (open) => {
      mobileDrawer.classList.toggle('is-open', open);
      if (navBackdrop) navBackdrop.classList.toggle('is-active', open);
      mobileBtn.classList.toggle('is-active', open);
      mobileBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
      mobileDrawer.setAttribute('aria-hidden', open ? 'false' : 'true');
      document.body.classList.toggle('nav-open', open);
    };

    mobileBtn.addEventListener('click', () => {
      const isOpen = !mobileDrawer.classList.contains('is-open');
      setDrawerOpen(isOpen);
    });

    if (drawerClose) {
      drawerClose.addEventListener('click', () => setDrawerOpen(false));
    }

    if (navBackdrop) {
      navBackdrop.addEventListener('click', () => setDrawerOpen(false));
    }

    mobileDrawer.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        if (mobileDrawer.classList.contains('is-open')) {
          setDrawerOpen(false);
        }
      });
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileDrawer.classList.contains('is-open')) {
        setDrawerOpen(false);
      }
    });
  }

  // ==========================================
  // 3. Interactive Button Click Ripple Effect (Desktop & Mobile Touch)
  // ==========================================
  const triggerRipple = (btn, clientX, clientY) => {
    const rect = btn.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height) * 1.5;
    const x = clientX - rect.left - size / 2;
    const y = clientY - rect.top - size / 2;

    const ripple = document.createElement('span');
    ripple.className = 'btn-ripple';
    ripple.style.width = `${size}px`;
    ripple.style.height = `${size}px`;
    ripple.style.left = `${x}px`;
    ripple.style.top = `${y}px`;

    // Remove any previous ripples on rapid taps
    const prevRipple = btn.querySelector('.btn-ripple');
    if (prevRipple) prevRipple.remove();

    btn.appendChild(ripple);

    ripple.addEventListener('animationend', () => {
      ripple.remove();
    }, { once: true });
  };

  document.addEventListener('pointerdown', (e) => {
    const btn = e.target.closest('.btn, .lang-btn, .lang-pill-btn, .btn-header-cta, .filter-chip-btn, .faq-accordion-btn, .mobile-nav-toggle, .mobile-drawer-close, .service-explore-link');
    if (!btn) return;
    triggerRipple(btn, e.clientX, e.clientY);
  }, { passive: true });

  // ==========================================
  // 4. Staggered Scroll Reveal Animations (Desktop & Mobile Optimized)
  // ==========================================
  const revealSelector = '.reveal-item, .reveal-fade-up, .reveal-fade-left, .reveal-fade-right, .reveal-scale, .service-modern-card, .fact-col, .step-card-modern, .hub-card, .simple-info-card, .hub-flow-visualizer, .pillar-card, .founder-portrait-card, .supporting-card-modern, .cta-banner-wrap';
  const targets = document.querySelectorAll(revealSelector);

  if (targets.length) {
    if (!('IntersectionObserver' in window)) {
      targets.forEach((el) => el.classList.add('is-visible'));
    } else {
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        });
      }, {
        root: null,
        rootMargin: '0px 0px -4% 0px',
        threshold: 0.02
      });

      targets.forEach((el, idx) => {
        const parentGrid = el.closest('.services-tri-grid, .facts-quad-grid, .steps-quad-grid, .cards-tri-grid, .presence-tri-grid, .supporting-duo-grid');
        if (parentGrid) {
          const siblings = Array.from(parentGrid.children);
          const pos = siblings.indexOf(el);
          el.style.transitionDelay = `${Math.min((pos >= 0 ? pos : idx % 4) * 70, 280)}ms`;
        } else {
          el.style.transitionDelay = `${Math.min((idx % 4) * 50, 160)}ms`;
        }
        observer.observe(el);
      });
    }
  }

  // ==========================================
  // 5. Smooth Dynamic Number Counter
  // ==========================================
  const counterElements = document.querySelectorAll('[data-counter]');
  if (counterElements.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const targetValue = parseInt(el.getAttribute('data-counter'), 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1400; // ms
        const startTime = performance.now();

        const updateCount = (currentTime) => {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const easeOut = 1 - Math.pow(1 - progress, 3);
          const currentCount = Math.floor(easeOut * targetValue);

          el.textContent = currentCount + suffix;

          if (progress < 1) {
            requestAnimationFrame(updateCount);
          } else {
            el.textContent = targetValue + suffix;
            el.style.transform = 'scale(1.08)';
            setTimeout(() => {
              el.style.transform = '';
            }, 250);
          }
        };

        requestAnimationFrame(updateCount);
        obs.unobserve(el);
      });
    }, { threshold: 0.2 });

    counterElements.forEach((el) => counterObserver.observe(el));
  }

  // ==========================================
  // 6. Interactive FAQ Accordion
  // ==========================================
  const faqItems = document.querySelectorAll('.faq-accordion-item');
  faqItems.forEach((item) => {
    const btn = item.querySelector('.faq-accordion-btn');
    const content = item.querySelector('.faq-accordion-content');
    const icon = item.querySelector('.faq-icon-indicator');

    if (btn && content) {
      btn.addEventListener('click', () => {
        const isCurrentActive = item.classList.contains('is-active');

        // Close other accordion items
        faqItems.forEach((other) => {
          if (other !== item && other.classList.contains('is-active')) {
            other.classList.remove('is-active');
            const otherBtn = other.querySelector('.faq-accordion-btn');
            const otherContent = other.querySelector('.faq-accordion-content');
            const otherIcon = other.querySelector('.faq-icon-indicator');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
            if (otherContent) {
              otherContent.style.maxHeight = '0';
              otherContent.style.opacity = '0';
            }
            if (otherIcon) otherIcon.textContent = '+';
          }
        });

        // Toggle current item
        if (isCurrentActive) {
          item.classList.remove('is-active');
          btn.setAttribute('aria-expanded', 'false');
          content.style.maxHeight = '0';
          content.style.opacity = '0';
          if (icon) icon.textContent = '+';
        } else {
          item.classList.add('is-active');
          btn.setAttribute('aria-expanded', 'true');
          content.style.maxHeight = content.scrollHeight + 30 + 'px';
          content.style.opacity = '1';
          if (icon) icon.textContent = '−';
        }
      });
    }
  });

  // ==========================================
  // 7. Instant Live Search & Filter (Products & Industries)
  // ==========================================
  function setupLiveGridFilter(searchInputId, filterChipsId, gridId, noticeId) {
    const searchInput = document.getElementById(searchInputId);
    const filterContainer = document.getElementById(filterChipsId);
    const grid = document.getElementById(gridId);
    const notice = document.getElementById(noticeId);
    const clearBtn = searchInput ? searchInput.parentElement.querySelector('.search-clear-btn') : null;

    if (!grid) return;
    const cards = grid.querySelectorAll('.simple-info-card');
    if (!cards.length) return;

    let activeFilter = 'all';
    let queryText = '';

    const applyFilter = () => {
      let visibleCount = 0;
      const terms = queryText.toLowerCase().trim().split(/\s+/).filter(Boolean);

      cards.forEach((card) => {
        const title = (card.querySelector('h3')?.textContent || '').toLowerCase();
        const desc = (card.querySelector('p')?.textContent || '').toLowerCase();
        const category = (card.querySelector('.eyebrow-pill')?.textContent || '').toLowerCase();
        const combined = `${title} ${desc} ${category}`;

        // Check text search
        const matchesQuery = terms.length === 0 || terms.every((t) => combined.includes(t));

        // Check category filter
        let matchesCategory = true;
        if (activeFilter !== 'all') {
          const regex = new RegExp(activeFilter, 'i');
          matchesCategory = regex.test(combined);
        }

        if (matchesQuery && matchesCategory) {
          card.style.display = '';
          requestAnimationFrame(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) scale(1)';
          });
          visibleCount++;
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(12px) scale(0.96)';
          setTimeout(() => {
            if (card.style.opacity === '0') {
              card.style.display = 'none';
            }
          }, 200);
        }
      });

      if (notice) {
        if (visibleCount === 0) {
          notice.style.display = 'block';
          notice.textContent = document.documentElement.lang === 'it' 
            ? 'Nessun risultato trovato corrispondente ai criteri di ricerca.' 
            : 'No matching items found. Try a different keyword or filter.';
        } else {
          notice.style.display = 'none';
        }
      }

      if (clearBtn) {
        clearBtn.style.display = queryText.length > 0 ? 'inline-flex' : 'none';
      }
    };

    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        queryText = e.target.value;
        applyFilter();
      });

      searchInput.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && searchInput.value) {
          searchInput.value = '';
          queryText = '';
          applyFilter();
        }
      });
    }

    if (clearBtn) {
      clearBtn.addEventListener('click', () => {
        if (searchInput) searchInput.value = '';
        queryText = '';
        applyFilter();
        if (searchInput) searchInput.focus();
      });
    }

    if (filterContainer) {
      const chipButtons = filterContainer.querySelectorAll('.filter-chip-btn');
      chipButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          chipButtons.forEach((b) => b.classList.remove('is-active'));
          btn.classList.add('is-active');
          activeFilter = btn.getAttribute('data-filter') || 'all';
          applyFilter();
        });
      });
    }
  }

  setupLiveGridFilter('productSearchInput', 'productFilterChips', 'productGrid', 'productResultsNotice');
  setupLiveGridFilter('industrySearchInput', 'industryFilterChips', 'industryGrid', 'industryResultsNotice');

  // ==========================================
  // 8. 1-Click Copy-to-Clipboard & Floating Toast
  // ==========================================
  const toastEl = document.getElementById('siteToast');
  let toastTimer = null;

  function showToast(message) {
    if (!toastEl) return;
    toastEl.textContent = message;
    toastEl.classList.add('is-show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
      toastEl.classList.remove('is-show');
    }, 2800);
  }

  document.addEventListener('click', (e) => {
    const copyTarget = e.target.closest('[data-copy]');
    if (!copyTarget) return;

    const copyText = copyTarget.getAttribute('data-copy');
    if (!copyText) return;

    if (copyTarget.tagName === 'BUTTON' || copyTarget.classList.contains('copy-only')) {
      e.preventDefault();
    }

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(copyText).then(() => {
        const isIt = document.documentElement.lang === 'it';
        showToast((isIt ? '✓ Copiato: ' : '✓ Copied to clipboard: ') + copyText);
      }).catch(() => {
        fallbackCopy(copyText);
      });
    } else {
      fallbackCopy(copyText);
    }
  });

  function fallbackCopy(text) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.style.position = 'fixed';
    textArea.style.opacity = '0';
    document.body.appendChild(textArea);
    textArea.select();
    try {
      document.execCommand('copy');
      const isIt = document.documentElement.lang === 'it';
      showToast((isIt ? '✓ Copiato: ' : '✓ Copied: ') + text);
    } catch (err) {
      console.warn('Copy failed', err);
    }
    document.body.removeChild(textArea);
  }

  // ==========================================
  // 9. Scroll-to-Top with Circular Progress Ring
  // ==========================================
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  const scrollCircle = document.getElementById('scrollProgressCircle');
  const totalCircleLength = 113.1; // 2 * PI * 18

  if (scrollTopBtn && scrollCircle) {
    const updateScrollProgress = () => {
      const scrollY = window.scrollY;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;

      if (scrollY > 280) {
        scrollTopBtn.classList.add('is-visible');
      } else {
        scrollTopBtn.classList.remove('is-visible');
      }

      if (docHeight > 0) {
        const progress = Math.min(Math.max(scrollY / docHeight, 0), 1);
        const dashOffset = totalCircleLength * (1 - progress);
        scrollCircle.style.strokeDashoffset = dashOffset;
      }
    };

    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();

    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ==========================================
  // 10. Dynamic Coordinate Tracking (Spotlight Effect for Mouse & Touch)
  // ==========================================
  const interactiveCards = document.querySelectorAll('.service-modern-card, .hub-card, .step-card-modern, .simple-info-card, .pillar-card, .supporting-card-modern, .fact-col');
  
  const updateSpotlight = (card, clientX, clientY) => {
    const rect = card.getBoundingClientRect();
    const x = clientX - rect.left;
    const y = clientY - rect.top;
    card.style.setProperty('--mouse-x', `${x}px`);
    card.style.setProperty('--mouse-y', `${y}px`);
  };

  interactiveCards.forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      updateSpotlight(card, e.clientX, e.clientY);
    });

    card.addEventListener('touchstart', (e) => {
      if (e.touches && e.touches[0]) {
        updateSpotlight(card, e.touches[0].clientX, e.touches[0].clientY);
      }
    }, { passive: true });

    card.addEventListener('touchmove', (e) => {
      if (e.touches && e.touches[0]) {
        updateSpotlight(card, e.touches[0].clientX, e.touches[0].clientY);
      }
    }, { passive: true });
  });

})();
