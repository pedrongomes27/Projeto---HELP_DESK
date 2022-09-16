const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend:{
            colors: {
                'green-header':'#228B22',
                'green-nav':'#015F01',
                'yellow-butt': '#E0A800',
            },
            
            fontFamily: {
                "roboto": ['Roboto Slab', 'serif'],
                "titillium": ['Titillium Web', 'sans-serif'],
                "caecilia": ['Caecilia LT Pro', 'sans-serif']
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
