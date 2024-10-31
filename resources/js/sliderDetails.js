const swiper = new Swiper('.sliderroomdetails', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 1000,
    initialSlide: 0,
    slidesPerView: 1,
    breakpoints: {
      1000: {
        slidesPerView: 2,
        spaceBetween: 20
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
});

