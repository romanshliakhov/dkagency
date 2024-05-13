import Swiper from "../vendor/swiper";
import vars from "../_vars";

const {teamSections, technologiesSlider, projectSliders} = vars;

if (teamSections) {
  teamSections.forEach(function(item){
    const items = item.querySelectorAll('.swiper-slide');
    const slider     = item.querySelector('.swiper-container');
    const sliderPrev = item.querySelector('.team-section__prev');
    const sliderNext = item.querySelector('.team-section__next');

    items.length && new Swiper(slider, {
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 70,
      observer: true,
      observeParents: true,

      navigation: {
        nextEl: sliderNext,
        prevEl: sliderPrev,
      },
      watchOverflow: true,

      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        576: {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: true,
        },

        767: {
          slidesPerView: 1,
          spaceBetween: 70,
        }
      }

    });
  })
}

if (technologiesSlider) {

  (function () {
    "use strict";

    const breakpoint = window.matchMedia("(min-width:1025px)");
    let slider;

    const breakpointChecker = () => {
      if (breakpoint.matches) {
        if (slider) slider.destroy(true, true);
      } else {
        enableSwiper();
      }
    };

    const enableSwiper = () => {
      slider = new Swiper(".technologies-section .swiper-container", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        speed: 8000,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
        breakpoints: {
          320: {
            slidesPerView: 6,
            spaceBetween: 25,
          },
          375: {
            slidesPerView: 3.5,
            spaceBetween: 25,
          },
          576: {
            slidesPerView: 2.4,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 3,
            spaceBetween: 25,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 30,
          }
        }
      });
    };

    breakpoint.addEventListener('change', breakpointChecker);
    breakpointChecker();
  })();
}

if (projectSliders) {
  projectSliders.forEach((projectSlider)=> {
    const slider = projectSlider.querySelector('.swiper-container');
    const items = projectSlider.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)');
    const sliderPrev = projectSlider.querySelector('.project-slider__prev');
    const sliderNext = projectSlider.querySelector('.project-slider__next');

    let slideToShow = 1.2;
    let loopFlag = true;


    // console.log(items.length)

    if (items.length === 1) {
      loopFlag = false;
      slideToShow = 1
    }


    items.length && new Swiper(slider, {
      slidesPerView: slideToShow,
      loop: loopFlag,
      speed: 1000,
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      watchOverflow: true,

      navigation: {
        nextEl: sliderNext,
        prevEl: sliderPrev,
      },

      breakpoints: {
        320: {
          slidesPerView: slideToShow === 1.2 ? 1 : 1,
          centeredSlides: true,
        },

        576: {
          slidesPerView: slideToShow,
        },

        1025: {
          centeredSlides: false,
          slidesPerView: slideToShow,
        }
      }

    });
  })
}













