<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Calirify | Clean Calorie-Counted Meals')</title>
    
    <meta name="description" content="Experience the best of traditional Indian flavors with a modern twist. Calirify delivers clean calorie counted food delivered daily to your doorstep.">
    
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    @stack('styles')
</head>
<body class="bg-white text-calirify-dark selection:bg-calirify-orange selection:text-white overflow-x-hidden">

    <!-- Header Component -->
    <nav class="fixed w-full z-50 glass-nav bg-white/80 backdrop-blur-md border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-xl overflow-hidden shadow-md flex items-center justify-center bg-white">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Calirify Icon" class="w-full h-full object-cover">
                    </div>
                    <span class="text-2xl font-bold text-calirify-orange tracking-tighter">Calirify</span>
                </a>
            </div>

            <div class="hidden lg:flex items-center justify-center gap-10 text-[15px] font-medium tracking-tight mx-4">
                <a href="{{ url('/') }}" class="nav-link hover:text-calirify-orange transition-colors">Home</a>
                <a href="{{ url('/#how-it-works') }}" class="nav-link hover:text-calirify-orange transition-colors">How It Works</a>
                <a href="{{ url('/#weekly-menu') }}" class="nav-link hover:text-calirify-orange transition-colors">Menu</a>
                <a href="{{ url('/order') }}" class="nav-link hover:text-calirify-orange transition-colors">Subscription</a>
                <a href="{{ url('/#testimonials') }}" class="nav-link hover:text-calirify-orange transition-colors">Stories</a>
            </div>

            <div class="flex items-center gap-4 lg:gap-6 flex-shrink-0">
                @if(session('user_phone'))
                    <a href="{{ url('/dashboard') }}" class="hidden sm:inline-block text-[15px] font-medium hover:text-calirify-orange transition-colors">Dashboard</a>
                @else
                    <a href="{{ url('/login') }}" class="hidden sm:inline-block text-[15px] font-medium hover:text-calirify-orange transition-colors">Login</a>
                @endif
                <a href="{{ url('/order') }}" class="bg-calirify-orange text-white py-2.5 px-7 rounded-full text-[15px] font-bold hover:scale-105 transition-transform duration-300 shadow-lg shadow-calirify-orange/20">Order Now</a>
                
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden w-10 h-10 flex flex-col justify-center gap-1.5 focus:outline-none z-50" x-data="{ mobileMenuOpen: false }">
                    <span class="w-7 h-0.5 bg-calirify-orange transition-all duration-300" :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''"></span>
                    <span class="w-7 h-0.5 bg-calirify-orange transition-all duration-300" :class="mobileMenuOpen ? 'opacity-0' : ''"></span>
                    <span class="w-7 h-0.5 bg-calirify-orange transition-all duration-300" :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="relative bg-[#0A0A0A] pt-16 pb-12 text-white">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16 mb-12">
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl overflow-hidden shadow-lg bg-white">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Calirify" class="w-full h-full object-cover">
                        </div>
                        <span class="text-4xl font-serif font-bold text-calirify-orange tracking-tight">Calirify</span>
                    </div>
                    <p class="text-sm text-gray-400 mb-8 italic max-w-xs leading-relaxed opacity-70">"Precision-portioned, chef-curated nutrition delivered fresh to your doorstep—eliminating tracking anxiety and fueling a high-performance life."</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.3em] mb-8 opacity-80">Experience</h4>
                    <nav class="flex flex-col gap-3">
                        <a href="{{ url('/') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Home</a>
                        <a href="{{ url('/contact') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Contact</a>
                    </nav>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.4em] mb-8 opacity-80">Assistance</h4>
                    <nav class="flex flex-col gap-3">
                        <a href="{{ url('/order-status') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Order Status</a>
                        <a href="{{ url('/refund-policy') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Refund Policies</a>
                    </nav>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold text-white uppercase tracking-[0.4em] mb-8 opacity-80">Policies</h4>
                    <nav class="flex flex-col gap-3">
                        <a href="{{ url('/privacy-policy') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Privacy Policies</a>
                        <a href="{{ url('/terms') }}" class="text-sm font-bold text-gray-500 hover:text-white transition-colors">Terms and Condition</a>
                    </nav>
                </div>
            </div>
            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-gray-500 text-sm">
                <p>&copy; 2026 Calirify. | Powered By <a href="https://olatechdigital.com/" class="hover:text-calirify-orange transition-colors">Olatech Digital Solution</a></p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.lucide) {
                window.lucide.createIcons();
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
