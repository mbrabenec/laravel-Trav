const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('dotenv').config();
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
mix.options({
processCssUrls: false
});
if (!mix.inProduction()) {
mix.webpackConfig({
devtool: 'source-map'
})
.sourceMaps()
}
mix.js("resources/js/app.js", "public/js")
.sass('resources/scss/style.scss', 'public/css')
.options({
processCssUrls: false,
postCss: [ tailwindcss('./tailwind.config.js') ],
})
.browserSync({
host: 'localhost',
port: 3000,
proxy: {
target: process.env.APP_URL // Yay! Using APP_URL from the .env file!
}
});
// add versioning 
mix.version();
