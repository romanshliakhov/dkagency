export default {
  activeMode: 'active-mode',
  activeClass: "active",
  windowEl: window,
  documentEl: document,
  htmlEl: document.documentElement,
  bodyEl: document.body,

  header: document.querySelector("header"),
  burger: document.querySelectorAll('.burger'),
  mobileMenu: document.querySelector('.menu-drawer'),
  mainLinks: document.querySelectorAll('header .menu-item a'),

  formWrapper: document.querySelector( '.wpcf7' ),
  formSubmitBtn: document.querySelector('.wpcf7-submit'),

  observerSections: document.querySelectorAll('section[id]'),
  overlay: document.querySelector('[data-overlay]'),
  modals: [...document.querySelectorAll('[data-popup]')],

  marqueeSlider: document.querySelector('.marquee-section .swiper-container'),
}





