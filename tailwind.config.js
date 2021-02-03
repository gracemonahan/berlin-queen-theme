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
      transparent: 'transparent',
    },
    fontFamily: {
      sans: ['Nunito', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
      brand: ['Poppins', 'sans-serif'],
    },
    letterSpacing: {
      normal: '.025em',
      wide: '.05em',
      wider: '.1em',
    },
    boxShadow: {
      sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      xl: '0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.04)', 
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      none: 'none',
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      },
      transitionProperty: {
        'height': 'height',
        'spacing': 'margin, padding',
      },
      backgroundImage: theme => ({
        'error': "url('resources/assets/images/error.png')",
       })
    },
  },
  variants: {
    extend: {
      borderColor: ['focus-visible'],
      opacity: ['disabled'],
      fontWeight: ['hover', 'focus'],
      backgroundColor: ['hover', 'focus'],
    }
  },
  plugins: [],
}
