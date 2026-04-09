/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/assets/js/*.js',
    './public/deewid/svg/**/*.svg',
    'node_modules/@frostui/tailwindcss/dist/*.js'
  ],
  darkMode: ['class'],
  theme: {
    screens: {
      DEFAULT: '390px',
      xs: '540px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1540px'
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        md: '1rem',
        lg: '1rem',
        xl: '3rem',
        '2xl': '8rem'
      }
    },
    fontFamily: {
      'body': ['HarmonyOS Sans', 'Space Grotesk', 'Golos Text', 'Manrsope', 'Inter', 'sans-serif']
    },
    borderRadius: {
      'none': '0',
      DEFAULT: '.675rem',
      'sm': '.25rem',
      'md': '.375rem',
      'lg': '.5rem',
      'full': '9999px',
      'xl': '.925rem'
    },
    extend: {
      colors: {
        primary: '#9F92FB',
        secondary: '#6E63E5',
        accent: '#94EC53',
        colorCodGray: '#192227',
        colorCodBlack: '#010026',
        colorCodBlackOld: '#131800',
        transparent: 'transparent',
        current: 'currentColor',
        currentDzrkNight: '#0f172a',
        currentBlack: '#0e1c2f',
        white: '#FFFFFF',
        slight: '#F2F3F5',
        light: '#F5F6FB',
        green: '#00FF00',
        slate: {
          base: '#5A5D79',
          50: '#F4F4F6',
          100: '#E7E8EC',
          200: '#C4C5CF',
          300: '#A1A2B3',
          400: '#7D7F96',
          500: '#5A5D79',
          600: '#363A5D',
          700: '#131740',
          800: '#101436',
          900: '#0D102D'
        }
      },
      boxShadow: {
        sm: '0 2px 4px 0 rgb(60 72 88 / 0.15)',
        DEFAULT: '0px 1px 2px 0px rgba(42, 59, 81, 0.16)',
        md: '0px 10px 20px -5px rgba(0, 0, 0, 0.1)',
        lg: '0px 20px 40px -10px rgba(0, 0, 0, 0.1)',
        xl: '0 20px 25px -5px rgb(60 72 88 / 0.1), 0 8px 10px -6px rgb(60 72 88 / 0.1)',
        '2xl': '0 25px 50px -12px rgb(60 72 88 / 0.25)'
      }
    }
  },
  plugins: [
    require('@frostui/tailwindcss/plugin'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
  ]
};
