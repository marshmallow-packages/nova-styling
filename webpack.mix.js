let mix = require("laravel-mix");

mix.js("resources/js/theme.js", "dist/js")
    .vue()
    .sass("resources/sass/dark.scss", "dist/css")
    .copy("resources/css/marshmallow-theme.css", "dist/css")
    .copy("resources/css/responsive.css", "dist/css");
