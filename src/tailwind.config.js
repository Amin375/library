module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './resources/**/*.js',
    ],
    theme: {
        screens: {
            'xs': {'min': '425px', 'max': '640px'},
            'sm': {'min': '640px', 'max': '767px'},
            'md': {'min': '768px', 'max': '1024px'},
            'lg': {'min': '1024px', 'max': '1279px'},
            'xl': {'min': '1280px', 'max': '1535px'},
            '2xl': {'min': '1536px'},
        },
    },
    variants: {
        extend: {
            backgroundColor: ['even'],
        },
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    },
}
