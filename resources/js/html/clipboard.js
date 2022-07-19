/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */
 $(function () {
    'use strict';

    /**
     * Available copy to clipboard.
     */
    let copyToClipboard = (textToCopy) => {
        return new Promise((res, rej) => {
            var $temp = $('<input>');
            $('body').append($temp);
            $temp.val(textToCopy).select();
            document.execCommand('copy') ? res() : rej();
            $temp.remove();
        });
    };

    $('.clipboard-copy').on('click', (e) => {
        e.preventDefault();

        copyToClipboard($('.clipboard-content').text())
            .then((_) => {
                $('.clipboard-copy, .clipboard-success').addClass('active');

                setTimeout(function () {
                    $('.clipboard-copy, .clipboard-success').removeClass('active');
                }, 1500);
            })
            .catch((_) => {
                $('.clipboard-copy, .clipboard-error').addClass('active');

                setTimeout(function () {
                    $('.clipboard-copy, .clipboard-error').removeClass('active');
                }, 1500);
            });
    });
});
