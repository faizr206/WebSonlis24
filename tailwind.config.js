/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'motley':['"Motley Forces"', 'sans-serif'],
        'sunday':['"Sunday Grapes"', 'sans-serif'],
        'montserrat':['"Montserrat"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}