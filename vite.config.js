import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: false,
        }),
        tailwindcss(),
    ],
    theme: {
        extend: {
          colors: {
            primary: {
              100: '#b8e3e9',
              200: '#93bbc0',
              300: '#739398',
              400: '#556e71',
              500: '#394b4d',
              600: '#1f2a2b',
              700: '#0c1213',
            },
            secondary: {
              100: '#e6f3f5',
              200: '#b5d9de',
              300: '#93b1b5',
              400: '#728a8d',
              500: '#536568',
              600: '#364345',
              700: '#1b2324',
            },
            tertiary: {
              100: '#c7eff5',
              200: '#85cbd5',
              300: '#69a3ab',
              400: '#4f7c82',
              500: '#36575c',
              600: '#1f3538',
              700: '#0a1617',
            },
            quaternary: {
              100: '#93ebfa',
              200: '#4ac6d7',
              300: '#399dab',
              400: '#297580',
              500: '#195058',
              600: '#0b2e33',
              700: '#031316',
            },
            gray: {
              100: '#d7dcdd',
              200: '#afb4b5',
              300: '#8a8e8f',
              400: '#676a6b',
              500: '#454848',
              600: '#272828',
              700: '#101111',
            }
          }
        }
      }
});
