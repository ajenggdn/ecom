/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            primary: "Poppins",
        },
        container: {
            padding: {
                DEFAULT: "30px",
                lg: "0",
            },
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1440px",
        },
        extend: {
            colors: {
                primary: "#222222",
                secondary: "#F5E6E0",
            },
            backgroundImage: {
                hero: "url('/public/img/bg_hero.svg')",
            },
        },
    },
    plugins: [],
};
