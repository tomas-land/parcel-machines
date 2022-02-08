const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')


module.exports = {
    content: [
        './resources/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        screens: {
            xl: {
                max: "1279px"
            },
            // => @media (max-width: 1279px) { ... }

            lg: {
                max: "1023px"
            },
            // => @media (max-width: 1023px) { ... }

            md: {
                max: "767px"
            },
            // => @media (max-width: 767px) { ... }

            sm: {
                max: "639px"
            },
            // => @media (max-width: 639px) { ... }
        },
        container: {
            center: true,
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            }
        },
        extend: {
            spacing: {
                '128': '32rem'
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },


};
