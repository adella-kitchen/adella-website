/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors:{
                red: '#BE3144',
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            }
        },
    },
    plugins: [require("flowbite/plugin")],
};
