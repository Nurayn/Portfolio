import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue'
    ],

    theme: {
        fontFamily: {
            primary: 'Playfair Display',
            body: 'work Sans'
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                lg: '3rem'
            }
        },
        extend: {
            colors: {
                'light-primary': '#F9EFDB',
                'light-secondary': '#EBD9B4',
                'light-tail-100': '#9DBC98',
                'light-tail-500': '#638889',
                'dark-primary': '#040D12',
                'dark-secondary': '#183D3D',
                'dark-tail-100': '#5C8374',
                'dark-tail-500': '#93B1A6',
                accent: {
                    DEFAULT: '#ac6b34',
                    hover: '#925a2b'
                },
                paragraph: '#878e99',
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red
            }
        }
    },

    plugins: [forms]
}
