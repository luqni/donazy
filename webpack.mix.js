const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .js("resources/js/admin.js", "public/js")
    .js("resources/js/home.js", "public/js")
    .version()
    .copy('node_modules/owl.carousel/dist/assets/owl.carousel.css', 'public/css/owl.carousel.css')
    .copy('node_modules/owl.carousel/dist/assets/owl.theme.default.css', 'public/css/owl.theme.default.css')
    .copy('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js/owl.carousel.min.js')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });
