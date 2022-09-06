/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

let colors = {
    ...defaultTheme.colors,
    black: "#000",
    "black-bg": "#3C4447",
    "black-text": "rgba(0,0,0,0.8)",
    "black-footer": "#2B373F",
    "black-12pc": "rgba(0,0,0,0.12)",
    white: "#fff",
    white80pc: "rgba(255,255,255,0.8)",
    white87pc: "rgba(255,255,255,0.87)",
    "gray-text": "#CCCCCC",
    white12pc: "rgba(255,255,255,0.12)",
    "main-400": "#5D7DD9",
    "main-500": "#3E50B4",
    "main-600": "#25408F",
    "main-800": "#1B286D",
    brown: "#8F7425",
    turquoise: "#25758F",
    "grass-green": "#408F25",
    "violet-red": "#CA4164",
    darkpurple: "#8F2575",
};

module.exports = {
    theme: {
        themeVariants: ["dark"],
        fontSize: {
            xs: ".75rem",
            sm: ".875rem", // 14px
            base: "1rem", // 16px
            lg: "1.125rem", // 18px
            xl: "1.25rem", // 20px
            "2xl": "1.5rem", // 24px
            "3xl": "1.875rem",

            "32px": "2rem",

            "4xl": "2.25rem", // 36px
            "5xl": "3rem",

            "56px": "3.5rem",

            "6xl": "4rem",
            "7xl": "5rem",
        },
        screens: {
            content: "1440px",
            mobile: "576px",
            smallest: "460px",
            ...defaultTheme.screens,
        },
        extend: {
            maxHeight: {
                0: "0",
                xl: "36rem",
            },
            height: {
                156: "156px",
            },
            colors: {
                ...defaultTheme.colors,
                gray: {
                    50: "#f9fafb",
                    100: "#f4f5f7",
                    200: "#e5e7eb",
                    300: "#d5d6d7",
                    400: "#9e9e9e",
                    500: "#707275",
                    600: "#4c4f52",
                    700: "#24262d",
                    800: "#1a1c23",
                    900: "#121317",
                    // default values from Tailwind UI palette
                    // '300': '#d2d6dc',
                    // '400': '#9fa6b2',
                    // '500': '#6b7280',
                    // '600': '#4b5563',
                    // '700': '#374151',
                    // '800': '#252f3f',
                    // '900': '#161e2e',
                },
                transparent: "transparent",
                black: "#000",
                white: "#fff",
                "black-bg": "#3C4447",
                "black-text": "rgba(0,0,0,0.8)",
                "black-footer": "#2B373F",
                "black-12pc": "rgba(0,0,0,0.12)",
                white: "#fff",
                white80pc: "rgba(255,255,255,0.8)",
                white87pc: "rgba(255,255,255,0.87)",
                "gray-text": "#CCCCCC",
                white12pc: "rgba(255,255,255,0.12)",
                "main-400": "#5D7DD9",
                "main-500": "#3E50B4",
                "main-600": "#25408F",
                "main-800": "#1B286D",
                brown: "#8F7425",
                turquoise: "#25758F",
                "grass-green": "#408F25",
                "violet-red": "#CA4164",
                darkpurple: "#8F2575",
            },
            fontFamily: {
                sans: ["Exo 2", ...defaultTheme.fontFamily.sans],
                serif: ["DM Serif Text", ...defaultTheme.fontFamily.serif],
                exo: ["Exo", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        backgroundColor: [
            "hover",
            "focus",
            "active",
            "odd",
            "dark",
            "dark:hover",
            "dark:focus",
            "dark:active",
            "dark:odd",
        ],
        display: ["responsive", "dark"],
        textColor: [
            "focus-within",
            "hover",
            "active",
            "dark",
            "dark:focus-within",
            "dark:hover",
            "dark:active",
        ],
        placeholderColor: ["focus", "dark", "dark:focus"],
        borderColor: ["focus", "hover", "dark", "dark:focus", "dark:hover"],
        divideColor: ["dark"],
        boxShadow: ["focus", "dark:focus"],
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
