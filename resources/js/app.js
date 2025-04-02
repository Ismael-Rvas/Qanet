import './bootstrap';

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    once: true, 
  });
  
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        }
    });
});



