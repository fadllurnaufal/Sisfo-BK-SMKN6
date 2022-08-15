/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'tosca-100': '#8DAAA6',
        'tosca-200': '#5E8587',
        'tosca-300': '#4A797C',
        'tosca-400': '#1E3031',
        'orange-100': '#E9AE8C',
        'orange-200': '#E78953',
        'peach-100': '#FF9376',
        'cream-100': '#F6D5B6',
      },
      borderRadius: {
        '4xl': '32px'
      },
      margin: {
        '30': '120px'
      },
      zIndex: {
        '1': 1
      },
      fontSize: {
        '6-1/2xl': '64px'
      },
      width: {
        '68': '272px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
