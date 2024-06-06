// Main menu
var swiper = new Swiper(".slider__main", {
    grabCursor: true,
    pagination: {
        el: ".slider__main .swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,

});

// Brand row
var swiper = new Swiper(".brand__latest", {
    slidesPerView: 5,
    spaceBetween: 15,
    grabCursor: true,

    navigation: {
        nextEl: ".brand-row-header__btn--prev",
        prevEl: ".brand-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        "@0.65": {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        "@1.65": {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        "@2.00": {
            slidesPerView: 5,
            spaceBetween: 15,
        },
    }
});

// Product row
var swiper = new Swiper(".product__latest", {
    slidesPerView: 5,
    spaceBetween: 5,
    grabCursor: true,
    navigation: {
        nextEl: ".product-row-header__btn--prev",
        prevEl: ".product-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        "@0.65": {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 5,
        },
        "@1.65": {
            slidesPerView: 4,
            spaceBetween: 5,
        },
        "@2.00": {
            slidesPerView: 5,
            spaceBetween: 5,
        },
    }
});

// Post row
var swiper = new Swiper(".post__latest", {
    slidesPerView: 5,
    spaceBetween: 5,
    grabCursor: true,
    navigation: {
        nextEl: ".post-row-header__btn--prev",
        prevEl: ".post-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1
        },
        "@0.65": {
            slidesPerView: 2,
            // spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            // spaceBetween: 25,
        },
        "@1.65": {
            slidesPerView: 4,
            // spaceBetween: 25,
        },
        "@2.00": {
            slidesPerView: 5,
            // spaceBetween: 30,
        },
    }
});

// Detail
var swiper = new Swiper(".product__detail .product-detail-left__thumbslide", {
    spaceBetween: 5,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper2 = new Swiper(".product__detail .product-detail-left__featuredslide", {
    spaceBetween: 5,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});