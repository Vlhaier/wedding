const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
*/

mix.setPublicPath('public_html/');

mix.js('resources/js/app.js', 'js')
    .vue()
    .sass('resources/sass/app.scss', 'css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .webpackConfig({ devtool: 'source-map' })
    .sourceMaps()
    .extract([
        'axios',
        'jquery',
        'lodash',
        'simplebar',
        'vue',
    ]);

if (mix.inProduction()) {
    mix.version();
}