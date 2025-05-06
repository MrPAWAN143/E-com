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
        primary: '#F2DFCE',
        text: '#f2f2f2',
        tertiary: '#733917',
        secondary: '#A67951',
        contrast: '#1A2426',
      },
    },
  },
  plugins: [],
}
