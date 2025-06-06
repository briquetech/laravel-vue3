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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .vue();
    /*.postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

// Custom package assets
mix.js('packages/brique-admin-creator/resources/js/app.js', 'public/vendor/brique-admin-creator/js')
  .vue()
  .options({
    processCssUrls: false
  });