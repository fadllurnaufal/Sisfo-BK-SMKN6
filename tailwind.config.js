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
        'orange-300': '#DA9D7B',
        'peach-100': '#FF9376',
        'cream-100': '#F6D5B6',
      },
      borderRadius: {
        '4xl': '32px'
      },
      margin: {
        '13': '52px',
        '23': '92px',
        '30': '120px',
        '84': '336px',
        
      },
      zIndex: {
        '1': 1
      },
      fontSize: {
        '6-1/2xl': '64px'
      },
      width: {
        '68': '272px',
        '116': '464px'
      },
      height: {
        'sidebar': '940px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
