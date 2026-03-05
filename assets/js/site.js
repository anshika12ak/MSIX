(function () {
  document.documentElement.classList.add('js');

  const header = document.getElementById('siteHeader');
  if (!header) return;

  const onScroll = () => {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
})();

(function () {
  const targets = document.querySelectorAll([
    'main > section',
    '.industry-card',
    '.service-card',
    '.product-card',
    '.analysis-row',
    '.pin-card',
    '.content-card',
    '.media-card',
    '.cta-panel'
  ].join(','));

  if (!targets.length) return;

  targets.forEach((el, index) => {
    el.classList.add('reveal-item');
    el.style.setProperty('--reveal-delay', `${Math.min(index * 35, 320)}ms`);
  });

  if (!('IntersectionObserver' in window)) {
    targets.forEach((el) => el.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      obs.unobserve(entry.target);
    });
  }, {
    root: null,
    rootMargin: '0px 0px -12% 0px',
    threshold: 0.12
  });

  targets.forEach((el) => observer.observe(el));
})();
