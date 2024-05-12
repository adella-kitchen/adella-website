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
            colors: {
                red: "#BE3144",
                red2: "#F1DADD",
                red3: "#821E2C",
                black1: "#1C1C1C",
                grey1: "#4A4A4A",
                grey2: "#6D6D6D",
                grey3: "#566A7F",
                grey4: "#BFC1C4",
                grey5: "#E6E6E6",
                grey6: "#F8F9FA",
                green: "#0E8C39",
                green2: "#246D3D",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
