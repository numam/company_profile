import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                'body' : ['Sanchez']
            },
            colors: {
                'primary': "#1A1A1A",
                'secondary' : "#D2B48C",
                'third' : "#414141"
            }
        },
    },

    plugins: [forms],
};
