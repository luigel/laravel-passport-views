const mix = require("laravel-mix");

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
    terser: {
        terserOptions: {
            compress: {
                drop_console: true
            }
        }
    }
})
    .setPublicPath("public")
    .js("resources/js/app.js", "public")
    .sass("resources/sass/app.scss", "public")
    .version()
    .webpackConfig({
        resolve: {
            symlinks: false,
            alias: {
                "@": path.resolve(__dirname, "resources/js/")
            }
        }
    });
