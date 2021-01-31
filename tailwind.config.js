const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    colors: {
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
      green: colors.emerald,
      white: colors.white,
      black: colors.black,
    },
    fontFamily: {
      sans: ['Nunito', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
      brand: ['Nunito', 'sans-serif'],
    },
    letterSpacing: {
      normal: '.025em',
      wide: '.05em',
      wider: '.1em',
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      },
    }
  },
  variants: {
    extend: {
      borderColor: ['focus-visible'],
      opacity: ['disabled'],
      fontWeight: ['hover', 'focus'],
    }
  },
  plugins: [],
}
