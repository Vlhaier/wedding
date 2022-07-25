const ScrollMagic = require('scrollmagic');

/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
*/

$(function () {
    'use strict';

    /**
     * ScrollMagic
     * @link hhttps://github.com/janpaepke/ScrollMagic
     */
    // Link click available to go section.
    $('.nabvar-link').on('click', e => {
        e.preventDefault();

        let section = $(e.currentTarget).attr('href'),
            top = 0;

            if (screen.width >= 1280) {
                top = 5;
            } else if (screen.width <= 1279 && screen.width >= 639) {
                top = 0;
            } else {
                top = 52;
            }

        $('html, body').animate({
            scrollTop: $(section).offset().top - top
        }, 500);
    });

    // Available active link.
    let controller = new ScrollMagic.Controller();

    if ($('.section').length) {
        $('.section').each(function () {
            let triggerElement = this;

            new ScrollMagic
                .Scene({
                    triggerElement,
                    triggerHook: 0.3
                })
                .setClassToggle(triggerElement, 'active')
                .on('enter leave', function() {
                    let link = $('.section.active').last().attr('id');

                    $('.nabvar-link').removeClass('active');
                    $('a[href="#' + link + '"]').addClass('active');
                })
                .addTo(controller);
        });
    }

    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
});
