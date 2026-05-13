import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                'calirify-orange': '#E35F20',
                'calirify-cream': '#FAF4EB',
                'calirify-dark': '#1E1611',
                hnh: {
                    green: {
                        50:  '#F0FFF4',
                        100: '#D8F3DC',
                        200: '#B7E4C7',
                        300: '#74C69D',
                        400: '#52B788',
                        500: '#40916C',
                        600: '#358F5B',
                        700: '#2D6A4F',
                        800: '#1E4D3A',
                        900: '#1A3C2A',
                    },
                    orange: '#E86F2C',
                    cream:  '#FFF8F0',
                    dark:   '#1A1A2E',
                },
            },
            fontFamily: {
                display: ['"Playfair Display"', ...defaultTheme.fontFamily.serif],
                sans:    ['"DM Sans"', ...defaultTheme.fontFamily.sans],
                mono:    ['"JetBrains Mono"', ...defaultTheme.fontFamily.mono],
            },
            borderRadius: {
                'card': '8px',
                'btn':  '8px',
            },
            boxShadow: {
                'card':   '0 4px 20px rgba(26, 60, 42, 0.08)',
                'card-hover': '0 8px 30px rgba(26, 60, 42, 0.12)',
                'modal':  '0 20px 60px rgba(26, 60, 42, 0.15)',
            },
            animation: {
                'fade-in':    'fadeIn 0.5s ease-out',
                'slide-up':   'slideUp 0.5s ease-out',
                'slide-down': 'slideDown 0.3s ease-out',
                'scale-in':   'scaleIn 0.3s ease-out',
                'pulse-soft': 'pulseSoft 2s infinite',
                'shimmer':    'shimmer 1.5s infinite linear',
            },
            keyframes: {
                fadeIn:    { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                slideUp:   { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                slideDown: { '0%': { opacity: '0', transform: 'translateY(-10px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                scaleIn:   { '0%': { opacity: '0', transform: 'scale(0.95)' }, '100%': { opacity: '1', transform: 'scale(1)' } },
                pulseSoft: { '0%, 100%': { opacity: '1' }, '50%': { opacity: '0.7' } },
                shimmer:   { '0%': { transform: 'translateX(-100%)' }, '100%': { transform: 'translateX(100%)' } },
            },
        },
    },
    plugins: [],
};
