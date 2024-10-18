/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#76885B",
                dark: "#0f172a",
                secondary: "#64748b",
            },
            fontFamily: {
                protest : ['ProtestStrike', 'sans-serif' ],
                passion : ['PassionOne', 'sans-serif' ],
            },
        },
    },
    plugins: [],
};
