/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors');

export default {
  content: [
    './resources/views/*.blade.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          lighter: colors.gray['800'],
          "DEFAULT": colors.gray['900'],
          darker: colors.blue['900']
        },
        secondary: {
          lighter: colors.red['500'],
          "DEFAULT": colors.red['600'],
          darker: colors.red['900']
        },
        background: {
          lighter: colors.blue['100'],
          "DEFAULT": colors.blue['200'],
          darker: colors.blue['300']
        },
        green: colors.emerald,
        yellow: colors.amber,
        purple: colors.violet
      },
      textColor: {
        orange: colors.orange,
        copyright: "#6D6D6D",
        red: {
          ...colors.red,
          "DEFAULT": colors.red['500']
        },
        primary: {
          lighter: "#FFFFFF",
          "DEFAULT": "#FFFFFF",
          darker: "#FFFF"
        },
        secondary: {
          lighter: colors.gray['600'],
          "DEFAULT": "white",
          darker: colors.gray['800']
        }
      },
      dropShadow: {
        'center-md': '0 0px 15px rgba(255, 0, 0, 1)',
        '4xl': [
            '0 35px 35px rgba(0, 0, 0, 0.25)',
            '0 45px 65px rgba(0, 0, 0, 0.15)'
        ]
      },
    },
  },
  plugins: [],
}

