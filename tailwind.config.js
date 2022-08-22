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
      container: {
        width: '1440px',
        height: '1024px',
        padding: '0px',
        margin: '0px',
        

      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'tosca-100': '#8DAAA6',
        'tosca-200': '#5E8587',
        'tosca-300': '#4A797C',
        'tosca-400': '#3B6163',
        'orange-100': '#E9AE8C',
        'orange-200': '#E78953',
        'orange-300': '#DA9D7B',
        'peach-100': '#FF9376',
        'cream-100': '#F6D5B6',
        'gray-350': '#808080',
        'black-50': '#4c4c4c',
        'black-100': '#100F0F'
      },
      borderRadius: {
        '4xl': '32px'
      },
      margin: {
        '13': '52px',
        '23': '92px',
        '30': '120px',
        '42': '168px',
        '47': '188px',
        '84': '336px',
        '100': '400px',
        '135': '540px',
        '160': '639px',
        
      },
      zIndex: {
        '1': 1
      },
      fontSize: {
        '6-1/2xl': '64px'
      },
      width: {
        '18': '72px',
        '38': '152px',
        '50': '200px',
        '67': '268px',
        '68': '272px',
        '100': '400px',
        '116': '464px',
        '121': '484px',
        '157': '628px',
        
      },
      height: {
        '18': '72px',
        '39': '156px',
        '121': '484px',
        '235': '940px',
        
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
