/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    "./app/Views/**/**/**/**/*.php",
    "./app/Views/**/**/**/**/**/*.php",
    "./modules/Admin/Views/*.php",
    "./modules/Admin/Views/**/*.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require("daisyui"),
  ],
}

