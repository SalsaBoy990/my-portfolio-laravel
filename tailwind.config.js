const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [require("./theme_styles")],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    safelist: [
        "italic",
        "bg-main-800",
        "bg-grass-green",
        "bg-turquoise",
        "bg-brown",
        "bg-main-400",
        "bg-darkpurple",
    ],
};
