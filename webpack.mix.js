let mix = require("laravel-mix");

mix.js("resources/js/dark.js", "dist/js")
    .js("resources/js/responsive.js", "dist/js")
    .sass("resources/sass/dark.scss", "dist/css")
    .copy("resources/css/marshmallow-theme.css", "dist/css")
    .copy("resources/css/responsive.css", "dist/css");
