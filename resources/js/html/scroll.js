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

        let section = $(e.currentTarget).attr('href');
        console.log(section);
        $('html, body').animate({
            scrollTop: $(section).offset().top - 5
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
});
