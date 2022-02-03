import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';

const swiper = new Swiper('#swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay:3000,
    },
})