mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [

    // add here
    require("tailwindcss"),

    ]);


const { version } = require("laravel-mix");
let mix = require("laravel-mix")
let source = "public/sisfo/src/"
let build = "public/sisfo/build/"

mix.js(source + "app.js", build).version();


