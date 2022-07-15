require('jquery-scrollify');

/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
*/

$(function () {
    'use strict';

    /**
     * Scrollify
     * @link https://github.com/lukehaas/Scrollify
     */
    // Available one scroll page in the home view.
    let scroll = (_) => {
        if(screen.width >= 768) {
            $.scrollify.enable();

            $.scrollify({
                section: '.section',
                sectionName: false,
                standardScrollElements: '.navbar',
                before: function() {
                    $('.nabvar-link').removeClass('active');

                    let link = $.scrollify.current()[0].attributes['data-link'].value;
                    $('a[data-section="' + link + '"]').addClass('active');
                },
            });
        } else {
            $.scrollify.disable();
        }
    }

    scroll();

    $(window).resize(function() {
        scroll();
    });

    // Link click available to go section.
    $('.nabvar-link').on('click', e => {
        e.preventDefault();

        let section = parseInt($(e.currentTarget).attr('data-section'));
        $.scrollify.move(section);
    });
});
