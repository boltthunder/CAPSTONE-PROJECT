/** @type {import('tailwindcss').Config} */
module.exports = {
    important: true,
    content: ["dist/*.{ html,js,php}", "index.php", "client/*/*.{php,js,html}", "user/*.{js,php,css~}", "./node_modules/flowbite/**/*.js"],
    theme: {
        screens: {
            cp: "360px",
            // android phone screen
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1536px",
            // => @media (min-width: 1536px) { ... }
        },
        extend: {},
    },
    plugins: [require('flowbite/plugin')],
    corePlugins: {
        visibility: false,
    },
};