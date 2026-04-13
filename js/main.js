// Milani Transportes — main.js

(function () {
  'use strict';

  // ── Menu mobile ─────────────────────────
  const toggle = document.getElementById('nav-toggle');
  const nav    = document.getElementById('nav-principal');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('aberto');
      toggle.setAttribute('aria-expanded', nav.classList.contains('aberto'));
    });

    nav.querySelectorAll('.nav-link').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('aberto');
      });
    });
  }

  // ── Header com sombra ao rolar ───────────
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    });
  }

  // ── Animação de entrada nos cards ────────
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visivel');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    document.querySelectorAll(
      '.servico-card, .frota-card, .numero-item'
    ).forEach(function (el, i) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity .5s ease ' + (i * 0.08) + 's, transform .5s ease ' + (i * 0.08) + 's';
      observer.observe(el);
    });

    document.addEventListener('animationend', function () {}, { passive: true });

    document.querySelectorAll('.servico-card, .frota-card, .numero-item').forEach(function (el) {
      el.addEventListener('transitionend', function () {
        if (el.classList.contains('visivel')) {
          el.style.opacity = '';
          el.style.transform = '';
          el.style.transition = '';
        }
      }, { once: true });
    });
  }

  // Adiciona classe "visivel" via CSS
  var style = document.createElement('style');
  style.textContent = '.visivel { opacity: 1 !important; transform: none !important; }';
  document.head.appendChild(style);

})();
