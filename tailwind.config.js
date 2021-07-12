
module.exports = {
    theme: {
        extend: {
            fontFamily: {
                rubik: ['Rubik', 'sans-serif']
            },
            colors: {
                "darkBlue": "#01438a",
                "crayola": "#00a5cf",
                "aquamarine": "#9fffcb",
                "persianGreen": "#25a18e",
                "lightGreen": "#7ae582"
            },
            backgroundImage: {
                'shopBanner': "url('/img/banner/shop-banner.jpg')",
                'secureBanner': "url('/img/banner/secure-banner.jpg')",
                'saleBanner': "url('/img/banner/sale-banner.jpg')"
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
