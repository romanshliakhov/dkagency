import Swiper from 'swiper';
import vars from "../_vars";
import { Autoplay } from 'swiper/modules';

const { marqueeSlider } = vars;

console.log(marqueeSlider);

if (marqueeSlider) {
  const swiper = new Swiper(marqueeSlider, {
    modules: [Autoplay],
    slidesPerView: 'auto',
    spaceBetween: 20,
    observer: true,
    observeParents: true,
    loop: true,
    speed: 4000,

    autoplay: {
      delay: 0,
    },
  });
}












