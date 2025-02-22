import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // 品牌色 紅／灰／藍
                brandRed: {
                    light: "#FCEBEC",
                    lightHover: "#FAE1E3",
                    lightActive: "#E7838D",
                    normal: "#DC3545",
                    normalHover: "#C6303E",
                    normalActive: "#B02A37",
                    dark: "#A52834",
                    darkHover: "#842029",
                    darkActive: "#63181F",
                    darker: "#4D1318",
                },
                brandGray: {
                    lightLight: "#FBFBFB",
                    light: "#F6F6F6",
                    lightHover: "#E4E4E4",
                    lightActive: "#C6C6C6",
                    normalLight: "#A4A4A4",
                    normal: "#484848",
                    normalHover: "#414141",
                    normalActive: "#3A3A3A",
                    dark: "#363636",
                    darkHover: "#2B2B2B",
                    darkActive: "#202020",
                    darker: "#191919",
                },
                brandBlue: {
                    lightLight: "#E9EAEC",
                    light: "#E6E6E9",
                    lightHover: "#B6BCD3",
                    normal: "#626981",
                    normalDarker: "#252B42",
                    normalHover: "#21273B",
                    normalActive: "#1E2235",
                    dark: "#1C2032",
                    darkHover: "#161A28",
                    darkActive: "#11131E",
                    darker: "#0D0F17",
                },
                // 標準字 共2種
                // class="font-lexend font-normal"
                // class="font-lexend font-extrabold"
                fontFamily: {
                    lexend: ['Lexend', 'sans-serif'],
                  },
            },
        },
    },

    plugins: [forms],
};