/** @type {import('tailwindcss').Config} */
export default {
    content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            borderColor: {
                'red-500': '#EF4444',
            },
            colors: {
                custom: {
                    primary: '#7cbcc0', // Define your custom color
                    secondary: '#565656', // Another custom color
                },
            },
            fontFamily: {
                'cormorant': ['Prata', 'sans-serif'],
                'kaushan-script': ['Kaushan Script', 'sans-serif']
            },
            lineHeight: {
                '5xl': '1.3', // Custom line height value for text-5xl
            },
            height: {
                '70vh': '70vh', // Define your custom viewport height
              },
        },
    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
        require('@tailwindcss/forms'),
    ],
}

