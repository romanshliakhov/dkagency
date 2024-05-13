import {
  addCustomClass, removeCustomClass,
  stickyHeader, initParallaxEffect,
  animateInit, fadeOut, scrollToSection
} from "../functions/customFunctions";
import AOS from 'aos';
import lottie from 'lottie-web';

import vars from '../_vars';
import {disableScroll} from "../functions/disable-scroll";
import {enableScroll} from "../functions/enable-scroll";

const {
  header,
  mobileMenu,
  technologiesItems,
  bricksItems,
  upBtn,
  preloaderBox,
  activeClass} = vars;

function aosInit(){
  AOS.init({
    offset: 0,
    delay: 0,
    anchorPlacement: 'top-bottom',
    once: true
  });
}


if (preloaderBox) {
  window.addEventListener('load', function() {
    setTimeout(function (){
      fadeOut(preloaderBox, 500);
      aosInit();
    }, 2200);
  });
}


document.addEventListener('DOMContentLoaded', function() {
  !preloaderBox && aosInit();
  const headerHeight = header.offsetHeight;

  if(preloaderBox) {
    const classNameString =  preloaderBox.classList[0];
    const jsonFileName = '5briсks'
    const preloader =  lottie.loadAnimation({
      container: preloaderBox,
      renderer: 'svg',
      loop: false,
      autoplay: true,
      path: `${preloaderBox.dataset.path}/${jsonFileName}.json`,
      rendererSettings: {
        hideOnTransparent: true,
        className: `${classNameString}__icon`,
        // progressiveLoad: true
      }
    });
    preloader.setSpeed(3);
  }

  window.addEventListener('scroll', function() {
    if (window.pageYOffset > headerHeight) {
      addCustomClass(header,'bg')
    } else {
      if(!mobileMenu.classList.contains(activeClass)) {
        removeCustomClass(header,'bg');
      }
    }
  });

  technologiesItems.length && animateInit(technologiesItems, 'animate-items', 1500);
  bricksItems.length && animateInit(bricksItems, 'animate-bricks', 2000);

  stickyHeader(header, 300, 100, 'ease', 650, 80);

  initParallaxEffect('.form-section__bg');
  initParallaxEffect('.about-section__bg');

  upBtn.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({top: 0, behavior: 'smooth'});
  });
});