module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    container: {

    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
      require('daisyui'),
  ],
}
