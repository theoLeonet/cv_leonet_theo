// webpack.mix.js

const mix = require('laravel-mix');

mix.ts('sources/ts/Main.ts', 'js').sourceMaps()
    .sass('sources/scss/main.scss', 'css').sourceMaps()
    .setPublicPath('dist').setResourceRoot('../')
    .browserSync({
        proxy: 'https://cv_leonet_theo.lndo.site',
        open: false
    });