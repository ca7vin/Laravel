module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        'ping-slow': 'ping 1s ease-in-out 2',
      },
      keyframes: {
        ping: {
          '50%, 100%': { transform: 'scale(1.2)', opacity: 1 },
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
} 