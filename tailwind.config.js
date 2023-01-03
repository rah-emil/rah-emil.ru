/* eslint-disable quote-props */
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,ts,js,vue,css}'],
  theme: {
    fontFamily: {
      sans: ['Circie', 'sans-serif'],
    },
    screens: {
      '3xs': '320px',
      '2xs': '475px',
      'xs': '576px',
      'sm': '768px',
      'md': '1024px',
      'lg': '1200px',
      '2lg': '1440px',
      'xl': '1920px',
    },
    extend: {
      colors: {
        black: '#17191E',
        dark: '#1F232E',
        grey: '#3A4666',
        primary: '#4069FF',
        violet: '#BD3EC7',
        yellow: '#FFD02C',
      },
    },
  },
  plugins: [],
};
