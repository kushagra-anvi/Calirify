@extends('layouts.customer')

@section('title', 'Your Profile | Calirify')

@section('content')
<section class="min-h-screen bg-gray-50/50 pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- Header -->
        <div class="reveal">
            <h1 class="text-3xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">Your <span class="text-calirify-orange italic">Profile</span></h1>
            <p class="mt-4 text-gray-500 font-medium">Manage your personal settings and wellness preferences.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-10">
            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white rounded-[3rem] p-10 border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 text-center reveal">
                    <div class="relative w-32 h-32 mx-auto mb-8">
                        <div class="absolute inset-0 bg-calirify-orange/10 rounded-full animate-pulse"></div>
                        <div class="absolute inset-2 bg-calirify-orange rounded-full flex items-center justify-center text-white shadow-xl shadow-calirify-orange/30">
                            <span class="text-4xl font-serif font-bold">{{ strtoupper(substr($userData['name'] ?? 'C', 0, 1)) }}</span>
                        </div>
                    </div>
                    <h2 class="text-2xl font-serif font-bold text-calirify-dark mb-1">{{ $userData['name'] ?? 'Customer' }}</h2>
                    <p class="text-sm text-gray-400 font-medium mb-8">{{ session('user_phone') }}</p>
                    
                    <div class="px-6 py-3 bg-calirify-dark text-white rounded-full text-[10px] font-bold uppercase tracking-widest inline-block mb-8">
                        {{ $userData['loyalty_tier'] ?? 'Gold Member' }}
                    </div>

                    <div class="pt-8 border-t border-gray-50 flex flex-col gap-3">
                        <button class="flex items-center gap-4 px-6 py-4 rounded-2xl bg-gray-50 text-calirify-dark hover:bg-calirify-orange hover:text-white transition-all group">
                            <i data-lucide="user" class="w-4 h-4 text-gray-400 group-hover:text-white"></i>
                            <span class="text-[10px] font-bold uppercase tracking-widest">Personal Info</span>
                        </button>
                        <button class="flex items-center gap-4 px-6 py-4 rounded-2xl bg-white border border-gray-100 text-gray-400 hover:border-calirify-orange hover:text-calirify-orange transition-all group">
                            <i data-lucide="bell" class="w-4 h-4 text-gray-400 group-hover:text-calirify-orange"></i>
                            <span class="text-[10px] font-bold uppercase tracking-widest">Notifications</span>
                        </button>
                        <a href="{{ route('logout') }}" class="flex items-center gap-4 px-6 py-4 rounded-2xl bg-white border border-gray-100 text-red-400 hover:bg-red-50 hover:border-red-100 transition-all group mt-4">
                            <i data-lucide="log-out" class="w-4 h-4 text-red-400"></i>
                            <span class="text-[10px] font-bold uppercase tracking-widest">Logout Session</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Personal Details -->
                <div class="bg-white rounded-[3rem] p-10 border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 reveal">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Personal Information</h3>
                        <button class="text-[10px] font-bold text-calirify-orange uppercase tracking-widest hover:underline">Edit Info</button>
                    </div>
                    <div class="grid md:grid-cols-2 gap-10">
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Full Name</p>
                            <p class="text-base font-serif font-bold text-calirify-dark">{{ $userData['name'] ?? 'Not set' }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Mobile Number</p>
                            <p class="text-base font-serif font-bold text-calirify-dark">{{ session('user_phone') }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Email Address</p>
                            <p class="text-base font-serif font-bold text-calirify-dark">{{ $userData['email'] ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Member Since</p>
                            <p class="text-base font-serif font-bold text-calirify-dark">January 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Wellness Preferences -->
                <div class="bg-white rounded-[3rem] p-10 border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 reveal">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Wellness Preferences</h3>
                        <button class="text-[10px] font-bold text-calirify-orange uppercase tracking-widest hover:underline">Manage</button>
                    </div>
                    <div class="space-y-10">
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-4">Dietary Identity</p>
                            <div class="flex flex-wrap gap-3">
                                @foreach(['Non-Vegetarian', 'High Protein', 'Low Carb'] as $pref)
                                    <span class="px-4 py-1.5 rounded-full bg-calirify-orange/5 border border-calirify-orange/10 text-[10px] font-bold text-calirify-dark uppercase tracking-widest">{{ $pref }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-4">Allergies & Exclusions</p>
                            <div class="flex flex-wrap gap-3">
                                @foreach(['No Peanuts', 'No Seafood'] as $pref)
                                    <span class="px-4 py-1.5 rounded-full bg-red-50 border border-red-100 text-[10px] font-bold text-red-600 uppercase tracking-widest">{{ $pref }}</span>
                                @endforeach
                                <button class="px-4 py-1.5 rounded-full border border-dashed border-gray-200 text-[10px] font-bold text-gray-400 uppercase tracking-widest hover:border-calirify-orange hover:text-calirify-orange transition-all">+ Add More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
