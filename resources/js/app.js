import './bootstrap';

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import AOS from 'aos';
import 'aos/dist/aos.css';

import lottie from 'lottie-web';

AOS.init({
    once: true,
    easing: 'ease-in-out',
});

document.addEventListener("readystatechange", () => {
    const loader = document.getElementById("loader");

    if (document.readyState === "complete") {
        loader.style.display = "none";
    } else {
        lottie.loadAnimation({
            container: loader,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '/assets/AnimationOnLoad1.json'
        });

        window.addEventListener("load", () => {
            loader.style.transition = "opacity 0.5s ease";
            loader.style.opacity = 0;

            setTimeout(() => {
                loader.style.display = "none";
            }, 500);
        });
    }
});

//Dos opciones o se muestra siempre el loader y una animacion para salir o si la pagina no tiene ningun tipo de retraso no se muestra ni siquiera 

// window.addEventListener("load", () => {
//     const loader = document.getElementById("loader");

//     lottie.loadAnimation({
//         container: loader,
//         renderer: 'svg',
//         loop: true,
//         autoplay: true,
//         path: '/assets/AnimationOnLoad1.json'
//     });

//     loader.style.transition = "opacity 0.5s ease";
//     loader.style.opacity = 0;

//     setTimeout(() => {
//         loader.style.display = "none";
//     }, 500);
// });



document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        }
    });
});



