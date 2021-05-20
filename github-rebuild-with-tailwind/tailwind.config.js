module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        spacing: {
            '72': '18rem',
        },
        colors: {
            'btn-green' : '#2ea44f',
            'btn-green-dark' : '#2c974b',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
