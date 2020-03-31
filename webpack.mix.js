const mix = require('laravel-mix');
const path = require('path');

mix.webpackConfig({
   output: {
      chunkFilename: 'assets/js/chunk/[name].js',
      publicPath: 'wp-content/themes/'+ path.basename(path.dirname(__filename))+'/',
   },
});



mix.js('src/js/app.js', 'assets/js').sourceMaps()
   .sass('src/sass/app.scss', 'assets/css').options({
      processCssUrls: false
   });

mix.copyDirectory('src/images', 'assets/images');