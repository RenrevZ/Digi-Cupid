/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/views/pages/*.php'],
  theme: {
    screens:{
      sm : '480px',
      md : '768px',
      lg : '1024px',
      xl : '1280px'
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}
