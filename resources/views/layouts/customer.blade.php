<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Customer Portal | Calirify')</title>
    
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://unpkg.com/lucide@latest"></script>
    @stack('styles')
</head>
<body class="min-h-screen bg-calirify-cream/20 text-calirify-dark antialiased selection:bg-calirify-orange selection:text-white pb-24 lg:pb-0" x-data="{ mobileMenuOpen: false, profileDropdownOpen: false }">
    
    <!-- Top Navigation -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-black/5 shadow-sm">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                <div class="h-9 w-9 rounded-lg overflow-hidden flex items-center justify-center bg-white shadow-sm">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Calirify Icon" class="w-full h-full object-cover">
                </div>
                <span class="font-serif text-xl font-bold text-calirify-orange tracking-tight">Calirify</span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden items-center gap-6 lg:flex">
                <a href="{{ route('dashboard') }}" class="px-1 py-5 text-sm font-semibold {{ request()->routeIs('dashboard') ? 'border-b-[3px] border-calirify-orange text-calirify-orange' : 'border-b-[3px] border-transparent text-gray-500 hover:text-calirify-orange' }} transition-colors">
                    Dashboard
                </a>
                <a href="{{ route('calendar') }}" class="px-1 py-5 text-sm font-semibold {{ request()->routeIs('calendar') ? 'border-b-[3px] border-calirify-orange text-calirify-orange' : 'border-b-[3px] border-transparent text-gray-500 hover:text-calirify-orange' }} transition-colors">
                    Calendar
                </a>
                <a href="{{ route('menu') }}" class="px-1 py-5 text-sm font-semibold {{ request()->routeIs('menu') ? 'border-b-[3px] border-calirify-orange text-calirify-orange' : 'border-b-[3px] border-transparent text-gray-500 hover:text-calirify-orange' }} transition-colors">
                    Menu
                </a>
                <a href="{{ route('support') }}" class="px-1 py-5 text-sm font-semibold {{ request()->routeIs('support') ? 'border-b-[3px] border-calirify-orange text-calirify-orange' : 'border-b-[3px] border-transparent text-gray-500 hover:text-calirify-orange' }} transition-colors">
                    Support
                </a>
                <a href="{{ route('profile') }}" class="px-1 py-5 text-sm font-semibold {{ request()->routeIs('profile') ? 'border-b-[3px] border-calirify-orange text-calirify-orange' : 'border-b-[3px] border-transparent text-gray-500 hover:text-calirify-orange' }} transition-colors">
                    Me
                </a>
            </nav>

            <!-- User Menu -->
            <div class="flex items-center gap-2">
                <!-- Notifications -->
                <button class="relative inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-500 transition hover:bg-gray-50 hover:text-calirify-orange">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                    <!-- Notification Badge -->
                    <span class="absolute right-2.5 top-2.5 h-2 w-2 rounded-full bg-calirify-orange"></span>
                </button>

                <div class="relative" @click.away="profileDropdownOpen = false">
                    <button @click="profileDropdownOpen = !profileDropdownOpen" class="inline-flex items-center gap-2 rounded-full py-1.5 px-2 transition hover:bg-gray-50 focus:outline-none">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-calirify-orange/10 text-sm font-bold text-calirify-orange">
                            {{ strtoupper(substr($userData['name'] ?? 'C', 0, 1)) }}
                        </span>
                        <span class="hidden text-sm font-semibold text-calirify-dark sm:block">
                            {{ $userData['name'] ?? 'Customer' }}
                        </span>
                    </button>
                    
                    <div x-show="profileDropdownOpen" 
                         x-transition.opacity
                         class="absolute right-0 mt-2 w-48 rounded-xl bg-white py-2 shadow-xl border border-black/5"
                         style="display: none;">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-calirify-orange">Account Settings</a>
                        <a href="{{ route('wallet') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-calirify-orange">My Wallet</a>
                        <form action="{{ route('logout') }}" method="POST" class="w-full border-t border-gray-50 mt-1 pt-1">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-calirify-orange">Logout Session</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="animate-fade-in">
        @yield('content')
    </main>

    <!-- Mobile Bottom Navigation -->
    <nav class="fixed inset-x-0 bottom-0 z-40 border-t border-black/5 bg-white shadow-[0_-6px_20px_rgba(0,0,0,0.05)] lg:hidden">
        <div class="grid grid-cols-5">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-1 px-1 py-3 text-[9px] font-bold uppercase tracking-tighter {{ request()->routeIs('dashboard') ? 'text-calirify-orange bg-calirify-orange/5' : 'text-gray-400 hover:text-calirify-orange' }} transition-colors text-center">
                <i data-lucide="layout-dashboard" class="w-4 h-4 mb-1"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('calendar') }}" class="flex flex-col items-center gap-1 px-1 py-3 text-[9px] font-bold uppercase tracking-tighter {{ request()->routeIs('calendar') ? 'text-calirify-orange bg-calirify-orange/5' : 'text-gray-400 hover:text-calirify-orange' }} transition-colors text-center">
                <i data-lucide="calendar" class="w-4 h-4 mb-1"></i>
                <span>Calendar</span>
            </a>
            <a href="{{ route('menu') }}" class="flex flex-col items-center gap-1 px-1 py-3 text-[9px] font-bold uppercase tracking-tighter {{ request()->routeIs('menu') ? 'text-calirify-orange bg-calirify-orange/5' : 'text-gray-400 hover:text-calirify-orange' }} transition-colors text-center">
                <i data-lucide="utensils" class="w-4 h-4 mb-1"></i>
                <span>Menu</span>
            </a>
            <a href="{{ route('support') }}" class="flex flex-col items-center gap-1 px-1 py-3 text-[9px] font-bold uppercase tracking-tighter {{ request()->routeIs('support') ? 'text-calirify-orange bg-calirify-orange/5' : 'text-gray-400 hover:text-calirify-orange' }} transition-colors text-center">
                <i data-lucide="message-circle" class="w-4 h-4 mb-1"></i>
                <span>Support</span>
            </a>
            <a href="{{ route('profile') }}" class="flex flex-col items-center gap-1 px-1 py-3 text-[9px] font-bold uppercase tracking-tighter {{ request()->routeIs('profile') ? 'text-calirify-orange bg-calirify-orange/5' : 'text-gray-400 hover:text-calirify-orange' }} transition-colors text-center">
                <i data-lucide="user" class="w-4 h-4 mb-1"></i>
                <span>Me</span>
            </a>
        </div>
    </nav>

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
