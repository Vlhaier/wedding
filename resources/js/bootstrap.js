/*
 |--------------------------------------------------------------------------
 | MomentJS
 |--------------------------------------------------------------------------
 |
 | A lightweight JavaScript date manipulation library for parsing, validating
 | and displaying formatted dates on the client-side. Also includes robust
 | support for i18n with a variety of locale bundles to load and switch.
 |
 */

window.moment = require('moment');
window.moment.locale('es');

window._ = require('lodash');

/*
 |--------------------------------------------------------------------------
 | Global jQuery Instance
 |--------------------------------------------------------------------------
 |
 | We'll load jQuery and the Bootstrap jQuery plugin which provides support
 | for JavaScript based Bootstrap features such as modals and tabs. This
 | code may be modified to fit the specific needs of your application.
 |
 */

window.$ = window.jQuery = require('jquery');
window.SimpleBar = require('simplebar');

try {
    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'Authorization': 'Bearer ' + Laravel.apiToken,
};


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

/*
 |--------------------------------------------------------------------------
 | SweetAlert
 |--------------------------------------------------------------------------
 |
 | SweetAlert is a beautiful replacement for JavaScript's alerts that makes
 | popup messages easy and pretty and looks great no matter if you're on
 | a desktop computer, mobile or tablet. It's even highly customizable
 |
 */

window.sweetAlert = require('sweetalert2');
