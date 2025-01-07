/** @type {import('tailwindcss').Config} */

const { fontFamily } = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        playfair: ["Playfair Display", ...fontFamily.sans]
      }
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
  ],
}

