/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./components/*.php",
    "./**/*.html"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'voyia-blue': 'rgb(147, 51, 234)',
        'voyia-dark': '#0A0A0A',
        'voyia-gray': '#1A1A1A',
        'voyia-purple': '#8B5CF6',
      },
      fontFamily: {
        'mono': ['Monaco', 'Menlo', 'Ubuntu Mono', 'monospace'],
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'pulse-blue': 'pulse-blue 2s infinite',
        'slide-up': 'slideInUp 0.8s ease-out',
        'rotate-y': 'rotateY 10s linear infinite',
        'blink': 'blink 1s infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
          '50%': { transform: 'translateY(-20px) rotate(180deg)' },
        },
        'pulse-blue': {
          '0%, 100%': { 'box-shadow': '0 0 0 0 rgba(147, 51, 234, 0.7)' },
          '50%': { 'box-shadow': '0 0 0 10px rgba(147, 51, 234, 0)' },
        },
        slideInUp: {
          'from': { opacity: '0', transform: 'translateY(30px)' },
          'to': { opacity: '1', transform: 'translateY(0)' },
        },
        rotateY: {
          'from': { transform: 'rotateY(0deg)' },
          'to': { transform: 'rotateY(360deg)' },
        },
        blink: {
          '0%, 50%': { opacity: '1' },
          '51%, 100%': { opacity: '0' },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}