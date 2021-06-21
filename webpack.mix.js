const { mix } = require('laravel-mix');

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

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.webpackConfig({
  plugins: [
    new BrowserSyncPlugin({
      files: [
        'app/**/*',
        'public/**/*',
        'resources/views/**/*',
        'routes/**/*'
      ],
      proxy: 'localhost'
    })
  ]
});

mix.sass('resources/assets/sass/app.scss', 'public/dist/styles')
   .sass('resources/assets/sass/main.scss', 'public/dist/styles')
  //  .js('resources/assets/js/main.js', 'public/dist/scripts');
