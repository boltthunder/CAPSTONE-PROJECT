/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [". / src /* . { html, js,php}", "index.php",
        "user/*/*.{html,js,php,css}",
        "super-admin/*.{html,js,php,css}"

    ],
    important: true,

    theme: {
        screens: {
            'cp': '360px',
            // android phone screen
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
        },
        extend: {},

    },
    plugins: [],
    corePlugins: {
        visibility: false
    },
}