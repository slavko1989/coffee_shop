const mix = require('laravel-mix');

// Compile JavaScript and Vue
mix.js('resources/js/app.js', 'public/js')
   .vue(); // If using Vue.js

// Compile CSS (Tailwind or other CSS frameworks)
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

// Version the assets for cache busting in production
if (mix.inProduction()) {
    mix.version();
}
