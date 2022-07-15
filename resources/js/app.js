/*
 |--------------------------------------------------------------------------
 | Bootstrap The Application
 |--------------------------------------------------------------------------
 |
 | First we will load all of this project's JavaScript dependencies which
 | includes Vue and other libraries. It is a great starting point when
 | building robust, powerful web applications using Vue and Laravel.
 |
 */

require('./bootstrap');

/*
 |--------------------------------------------------------------------------
 | Custom Elements
 |--------------------------------------------------------------------------
 |
 | Here we'll set up the custom components, plugins, and section specific
 | javascript files that are going to be needed to run our application
 | this is a nice place to require all sorts of custom jQuery code.
 |
 */

 require('./html/favicon');
 require('./html/scroll');

/*
 |--------------------------------------------------------------------------
 | Setup The Vue Instance
 |--------------------------------------------------------------------------
 |
 | Next, we will create a fresh Vue application instance and attach it to
 | the page. Then, you may begin adding components to this application
 | or customize the JavaScript scaffolding to fit your unique needs.
 |
 */

new window.Vue({
    components: {
        PasswordToggle: require('./components/PasswordToggle').default,
    },
}).$mount('#app');
