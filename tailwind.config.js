/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                purp: "#3a4781",
            },
            fontFamily: {
                motley: ['"Motley Forces"', "sans-serif"],
                sunday: ['"Sunday Grapes"', "sans-serif"],
                montserrat: ['"Montserrat"', "sans-serif"],
            },
        },
    },
    plugins: [],
};
