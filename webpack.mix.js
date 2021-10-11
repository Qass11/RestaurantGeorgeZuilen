const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/panel.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts');

mix.browserSync({
    proxy: 'restaurantgeorgezuilen.test',
    host: 'restaurantgeorgezuilen.test',
    open: 'external',
    files: [
        'public/js/**/*',
        'public/css/**/*',
        'public/**/*.+(html|php)',
        'resources/views/**/*.php',
        'resources/lang/**/**.php'
    ],
});
