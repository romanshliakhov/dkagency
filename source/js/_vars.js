export default {
  activeMode: 'active-mode',
  activeClass: "active",
  windowEl: window,
  documentEl: document,
  htmlEl: document.documentElement,
  bodyEl: document.body,

  header: document.querySelector("header"),
  burger: document.querySelectorAll('.burger'),
  mobileMenu: document.querySelector('.header__menu'),
  mainLinks: document.querySelectorAll('header .menu-item a'),
  
  anchorLinks: document.querySelectorAll('.menu-link'),

  formWrappers: document.querySelectorAll( '.wpcf7' ),
  // formSubmitBtn: document.querySelector('.wpcf7-submit'),

  observerSections: document.querySelectorAll('section[id]'),
  overlay: document.querySelector('[data-overlay]'),

  modals: [...document.querySelectorAll('[data-popup]')],
  modalsButton: [...document.querySelectorAll('[data-btn-modal]')],

  marqueeSlider: document.querySelector('.marquee-section .swiper-container'),

  innerButtonModal: [...document.querySelectorAll('[data-order-name]')],
}





