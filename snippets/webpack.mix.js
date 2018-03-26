let mix = require('laravel-mix');
let nodeExternals = require('webpack-node-externals');
require('laravel-mix-tailwind');

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

let baseConfig = {
    resolve: {
        alias: {
            App: path.resolve(__dirname, 'resources/assets/js'),
            Test: path.resolve(__dirname, 'tests/Javascript')
        }
    }
};

if (process.env.NODE_ENV === 'test') {
    let config = baseConfig;
    config.devtool = 'inline-cheap-module-source-map';
    config.externals = [nodeExternals()];
    mix.webpackConfig(config);
} else {
    mix.webpackConfig(baseConfig);
    mix.extract(['vue', 'axios', 'lodash', 'vuex', 'vue-router']);
}

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .tailwind()
   .browserSync()
   .disableNotifications();

if (mix.inProduction()) {
    mix.version();
}
