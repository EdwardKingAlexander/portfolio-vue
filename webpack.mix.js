const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/js/app.js', 'public/js')
    .vue({ version: 3 })
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .alias({
        '@': path.resolve('resources/js'),
    }) // ✅ This line fixes the '@' path issue
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}