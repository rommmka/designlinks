module.exports = {
  content: ["index.md", "_includes/*"],
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
