module.exports = {
  content: ["index.php"],
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
