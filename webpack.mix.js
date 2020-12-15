const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.browserSync({
    host: '127.0.0.1',
    proxy: process.env.APP_URL,
    open: true,
    files: [
        'app/**/*.php',
        'resources/views/**/*.php',
        'public/js/*.js',
        'public/css/*.css'
    ],
    watchOptions: {
        usePolling: true,
        interval: 500
    }
});
