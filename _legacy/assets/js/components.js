

const components = {
    getHeader(isRoot = false) {
        const prefix = isRoot ? 'pages/' : '';
        const homeLink = isRoot ? 'index.html' : '../index.html';
        const logoPath = isRoot ? 'assets/images/logo.png' : '../assets/images/logo.png';

        return `
        <nav class="fixed w-full z-50 glass-nav">
            <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                <!-- Left: Logo & Brand Name -->
                <div class="flex items-center flex-shrink-0">
                    <a href="${homeLink}" class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-xl overflow-hidden shadow-md flex items-center justify-center">
                            <img src="${logoPath}" alt="Calirify Icon"
                                class="w-full h-full object-cover">
                        </div>
                        <span class="text-2xl font-bold text-calirify-orange tracking-tighter">Calirify</span>
                    </a>
                </div>

                <!-- Center: Links (Hidden on Mobile) -->
                <div class="hidden lg:flex items-center justify-center gap-10 text-[15px] font-medium tracking-tight mx-4">
                    <a href="${homeLink}" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">Home</a>
                    <a href="${homeLink}#how-it-works" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">How It Works</a>
                    <a href="${homeLink}#weekly-menu" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">Menu</a>
                    <a href="${prefix}order.html" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">Subscription</a>
                    <a href="${homeLink}#testimonials" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">Stories</a>
                    <a href="${homeLink}#faq" class="nav-link hover:text-calirify-orange transition-colors whitespace-nowrap">FAQ</a>
                </div>

                <!-- Right: Action Buttons -->
                <div class="flex items-center gap-4 lg:gap-6 flex-shrink-0">
                    <a href="${prefix}login.html" class="hidden sm:inline-block text-[15px] font-medium hover:text-calirify-orange transition-colors">Login</a>
                    <a href="${prefix}order.html"
                        class="bg-calirify-orange text-white py-2.5 px-7 rounded-full text-[15px] font-bold hover:scale-105 transition-transform duration-300 shadow-lg shadow-calirify-orange/20">Order
                        Now</a>
                    <!-- Hamburger Button -->
                    <button id="mobile-menu-btn"
                        class="lg:hidden w-10 h-10 flex flex-col justify-center gap-1.5 focus:outline-none z-50">
                        <span class="line-1 w-7 h-0.5 bg-calirify-orange transition-all duration-300"></span>
                        <span class="line-2 w-7 h-0.5 bg-calirify-orange transition-all duration-300"></span>
                        <span class="line-3 w-7 h-0.5 bg-calirify-orange transition-all duration-300"></span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu"
            class="fixed top-20 left-0 w-full bg-white z-[40] border-b border-black/5 opacity-0 -translate-y-4 pointer-events-none transition-all duration-500 overflow-y-auto max-h-[calc(100vh-80px)]">
            <div class="p-6 flex flex-col gap-1">
                <a href="${homeLink}" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">Home</a>
                <a href="${homeLink}#how-it-works" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">How It Works</a>
                <a href="${homeLink}#weekly-menu" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">Menu</a>
                <a href="${prefix}order.html" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">Subscription</a>
                <a href="${homeLink}#testimonials" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">Stories</a>
                <a href="${homeLink}#faq" class="mobile-nav-link-dropdown px-6 py-3 rounded-xl text-[15px] font-semibold transition-all">FAQ</a>

                <div class="mt-4 pt-6 border-t border-black/5 flex flex-col gap-3">
                    <a href="${prefix}order.html" class="w-full bg-calirify-orange text-white py-3.5 rounded-full text-center text-[15px] font-bold shadow-lg">Order Now</a>
                    <a href="${prefix}login.html" class="w-full border-2 border-calirify-orange text-calirify-orange py-3.5 rounded-full text-center text-[15px] font-bold">Login</a>
                </div>
            </div>
        </div>`;
    },

    getFooter(isRoot = false) {
        const prefix = isRoot ? 'pages/' : '';
        const homeLink = isRoot ? 'index.html' : '../index.html';
        const logoPath = isRoot ? 'assets/images/logo.png' : '../assets/images/logo.png';

        return `
        <footer class="relative bg-[#0A0A0A] pt-16 pb-12">
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16 mb-12">
                    <div class="col-span-2 md:col-span-1 reveal">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-14 h-14 rounded-2xl overflow-hidden shadow-lg">
                                <img src="${logoPath}" alt="Calirify" class="w-full h-full object-cover">
                            </div>
                            <span class="text-4xl font-serif font-bold text-calirify-orange tracking-tight">Calirify</span>
                        </div>
                        <p class="text-sm text-gray-400 mb-8 italic max-w-xs leading-relaxed opacity-70">"Precision-portioned, chef-curated nutrition delivered fresh to your doorstep—eliminating tracking anxiety and fueling a high-performance life."</p>
                    </div>
                    <div class="reveal">
                        <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.3em] mb-8 opacity-80">Experience</h4>
                        <nav class="flex flex-col gap-3">
                            <a href="${homeLink}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Home</a>
                            <a href="${prefix}contact.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Contact</a>
                            <a href="${prefix}corporate.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Corporate Inquiries</a>
                        </nav>
                    </div>
                    <div class="reveal">
                        <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.4em] mb-8 opacity-80">Assistance</h4>
                        <nav class="flex flex-col gap-3">
                            <a href="${prefix}order-status.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Order Status</a>
                            <a href="${prefix}refund-policy.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Refund Policies</a>
                        </nav>
                    </div>
                    <div class="reveal">
                        <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.4em] mb-8 opacity-80">Policies</h4>
                        <nav class="flex flex-col gap-3">
                            <a href="${prefix}shipping-policy.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Shipping Policies</a>
                            <a href="${prefix}privacy-policy.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Privacy Policies</a>
                            <a href="${prefix}terms.html" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Terms and Condition</a>
                        </nav>
                    </div>
                </div>
                <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                    <p class="text-sm text-gray-500">&copy; 2026 Calirify. | Powered By <a href="https://olatechdigital.com/" class="hover:text-calirify-orange transition-colors" target="_blank" rel="noopener">Olatech Digital Solution</a></p>
                    
                    <!-- Direct SVG Social Media Links (Universally Visible & Fully Responsive) -->
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-calirify-orange hover:text-white hover:scale-110 hover:border-calirify-orange/30 transition-all duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-calirify-orange hover:text-white hover:scale-110 hover:border-calirify-orange/30 transition-all duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-calirify-orange hover:text-white hover:scale-110 hover:border-calirify-orange/30 transition-all duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-calirify-orange hover:text-white hover:scale-110 hover:border-calirify-orange/30 transition-all duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>`;
    },

    init() {
        const headerPlaceholder = document.getElementById('header-placeholder');
        const footerPlaceholder = document.getElementById('footer-placeholder');


        const isRoot = !window.location.pathname.includes('/pages/');

        if (headerPlaceholder) {
            headerPlaceholder.innerHTML = this.getHeader(isRoot);
        }
        if (footerPlaceholder) {
            footerPlaceholder.innerHTML = this.getFooter(isRoot);
        }


        this.setupMobileMenu();


        if (window.refreshReveal) {
            window.refreshReveal();
        }


        if (window.lucide) {
            window.lucide.createIcons();
        }
    },

    setupMobileMenu() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('opacity-0');
                menu.classList.toggle('-translate-y-4');
                menu.classList.toggle('pointer-events-none');


                const lines = btn.querySelectorAll('span');
                lines[0].classList.toggle('rotate-45');
                lines[0].classList.toggle('translate-y-2');
                lines[1].classList.toggle('opacity-0');
                lines[2].classList.toggle('-rotate-45');
                lines[2].classList.toggle('-translate-y-2');
            });


            menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                    const lines = btn.querySelectorAll('span');
                    lines[0].classList.remove('rotate-45', 'translate-y-2');
                    lines[1].classList.remove('opacity-0');
                    lines[2].classList.remove('-rotate-45', '-translate-y-2');
                });
            });
        }
    }
};

document.addEventListener('DOMContentLoaded', () => components.init());
