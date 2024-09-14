let mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js") // Path to source JS and output directory
    .sass("resources/sass/app.scss", "public/css"); // Path to source SASS and output directory

mix.browserSync("127.0.0.1:8000");
