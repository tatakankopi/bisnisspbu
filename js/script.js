tailwind.config = {
    theme: {
        extend: {
            colors: {
                "primary": "#dc2626", // Flame Red
                "primary-hover": "#b91c1c",
                "background-light": "#ffffff",
                "background-dark": "#f8fafc",
                "text-main": "#1e293b",
                "text-muted": "#64748b",
                "card-light": "#ffffff",
                "accent-blue": "#1a365d",
                "accent": "#f97415",
                "surface-dark": "#231e1a",
                "brand-black": "#181411",
            },
            fontFamily: {
                "display": ["Poppins", "sans-serif"],
                "body": ["Poppins", "sans-serif"],
            },
            borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'fade-in': 'fadeIn 1s ease-out forwards',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(10px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                }
            }
        },
    },
}

// Mobile Menu Logic
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
