import defaultTheme from "tailwindcss/defaultTheme";

const plugin = require("tailwindcss/plugin");

const Myclass = plugin(function ({ addUtilities }) {
    addUtilities({
        ".my-rotate-y-180": {
            transform: "rotateY(180deg)",
        },
        ".perspective": {
            perspective: "1000px",
        },
        ".preserve-3d": {
            transformStyle: "preserve-3d",
        },
        ".backface-hidden": {
            backfaceVisibility: "hidden",
        },
    });
});

/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Plus Jakarta Sans", "sans-serif"],
            },
            colors: {
                "purple-gradient": "#500CA4",
                "black-gradient": "#1E0C2F",
                "green-gradient": "#46F408",
                "custom-purple": "#3F037B",
            },
        },
    },
    plugins: [Myclass],
};
