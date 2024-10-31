const swiperRooms = new Swiper('.sliderRoomList', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grid: {
        rows: 6, 
        fill: 'column'
    },
    spaceBetween: 30,
    loop: false,
});