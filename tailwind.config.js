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
                primary: "#A01208",
                dark: "#020202",
                secondary: "#64748b",
            },
            fontFamily: {
                protest: ["ProtestStrike", "sans-serif"],
                passion: ["PassionOne", "sans-serif"],
                Rowdies: ["Rowdies", "sans-serif"],
            },
        },
    },
    plugins: [],
};
