let mix = require("laravel-mix");

mix.js("resources/js/dark.js", "dist/js").sass(
    "resources/sass/dark.scss",
    "dist/css"
);
