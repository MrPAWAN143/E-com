/** @type {import('tailwindcss').Config} */

export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue', // Include if you're using Vue
    './resources/**/*.ts',  // Include if using TypeScript
  ],
  theme: {
    extend: {
         colors: {
        primary_navy: '#14243A',
        text: '#182230',
        orange_accent: '#F36B38',
        background: '#F8F9FB',
        hover_orange: '#DF5728',
      },
    },
  },
  plugins: [],
}
