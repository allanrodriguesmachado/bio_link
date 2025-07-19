// tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class', // <--- Garanta que esta linha está aqui
    content: [
        // ... seus caminhos para arquivos Blade, Vue, React, etc.
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
