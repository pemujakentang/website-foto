import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            spacing: {
                '18': '4.5rem',
            },
            fontFamily: {
                inter: ["Inter","sans-serif"],
                galiient: ["Gallient"],
            },
            colors: {
                //900 di pallete
                'color1': {
                    '50': '#f6f7f6',
                    '100': '#e1e6e2',
                    '200': '#c2cdc5',
                    '300': '#9caca1',
                    '400': '#768b7c',
                    '500': '#5c7063',
                    '600': '#48594e',
                    '700': '#3c4941',
                    '800': '#333c37',
                    '900': '#2d3430',
                    '950': '#1f2622',
                },
                //800
                'color2': {
                    '50': '#f6f7f6',
                    '100': '#e2e5e2',
                    '200': '#c6cbc4',
                    '300': '#a1aa9e',
                    '400': '#7c877a',
                    '500': '#626d5f',
                    '600': '#4d564b',
                    '700': '#40473e',
                    '800': '#3a4039',
                    '900': '#2e332e',
                    '950': '#181b18',
                },
                //600
                'color3': {
                    '50': '#f4f4f2',
                    '100': '#e3e2de',
                    '200': '#c9c6bf',
                    '300': '#a9a69b',
                    '400': '#908c7f',
                    '500': '#827d70',
                    '600': '#736d63',
                    '700': '#5a544e',
                    '800': '#4e4a45',
                    '900': '#45413e',
                    '950': '#262422',
                },
                //200
                'almond': {
                    '50': '#fcf6f0',
                    '100': '#f8eadc',
                    '200': '#f2dac4',
                    '300': '#e5b48c',
                    '400': '#da8e5d',
                    '500': '#d2713d',
                    '600': '#c45c32',
                    '700': '#a3472b',
                    '800': '#823b2a',
                    '900': '#6a3224',
                    '950': '#391811',
                },                
            },
        },
       
    },

    plugins: [forms],
};
