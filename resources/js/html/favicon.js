/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */

 $(function () {
    'use strict';

    /**
     * Available dinamic favicon.
     */
    var favicon_images = [
            '/images/favicons/favicon-1.png',
            '/images/favicons/favicon-2.png',
            '/images/favicons/favicon-3.png',
            '/images/favicons/favicon-4.png',
        ],
        image_counter = 0;

    setInterval(function() {
        $("link[rel='icon']").remove();
        $("link[rel='shortcut icon']").remove();
        $("head").append('<link rel="icon" href="' + favicon_images[image_counter] + '" type="image/gif">');

        if(image_counter == favicon_images.length -1)
            image_counter = 0;
        else
            image_counter++;
    }, 1500);
});
