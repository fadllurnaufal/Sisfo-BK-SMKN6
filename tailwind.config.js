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
        transparent: 'transparent',
        current: 'currentColor',
        'tosca-100': '#8DAAA6',
        'tosca-300': '#4A797C',
        'orange-100': '#E9AE8C',
        'orange-200': '#E78953',
        'peach-100': '#FF9376',
        'cream-100': '#F6D5B6',

      },
    },
  },
  plugins: [],
}
