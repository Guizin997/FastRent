import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import theme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'dark-blue':'#001F33',
                'middle-blue':'#00263B',
                'dark-red':'#B71C1C',
                'scarlet-red':'#D32F2F',
                'off-white':'#F0F0F0',
                'grayish-black':'#1A1A1A',
            },
        },
    },

    plugins: [forms],
};
