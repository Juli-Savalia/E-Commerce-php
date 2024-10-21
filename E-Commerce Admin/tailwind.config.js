/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './Pages/**/*.{html,js,ts,jsx,tsx}', // Scans all files in the pages folder
    './Js/**/*.{js,ts}',                 // If you have scripts in the js folder using Tailwind classes
    './Styles/**/*.{css,scss}', 
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

