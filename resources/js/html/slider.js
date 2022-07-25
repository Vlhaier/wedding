require('slick-carousel/slick/slick');

/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */

$(function () {
    'use strict';

    /**
     * Carousel slick
     * @link http://kenwheeler.github.io/slick
     */
    // Carousel from site - 3 elements.
    if (screen.width <= 1279) {
        $('.slider-home').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            centerMode: false,
            variableWidth: false,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        variableWidth: false,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: true,
                    },
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: true,
                    },
                },
            ],
        });
    }
});
