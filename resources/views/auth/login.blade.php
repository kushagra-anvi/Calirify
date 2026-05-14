@extends('layouts.app')

@section('title', 'Login | Calirify')

@section('content')
<section class="relative min-h-[90vh] flex items-center justify-center pt-24 pb-12 lg:pt-32 lg:pb-16 overflow-hidden bg-calirify-cream/30">
    <div class="absolute inset-0 opacity-[0.02] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

    <div class="max-w-md w-full mx-auto px-6 relative z-10">
        <div class="bg-white rounded-[2.5rem] p-8 lg:p-12 shadow-3xl shadow-calirify-orange/10 border border-calirify-orange/5 text-center reveal">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-calirify-orange/10 rounded-2xl mb-6">
                    <svg class="w-8 h-8 text-calirify-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-4.04-3.654A9.959 9.959 0 013 12c0-5.523 4.477-10 10-10s10 4.477 10 10a9.956 9.956 0 01-1.21 4.757m-7.777 1.443s-1.712.213-3.92.36m0 0a9.953 9.953 0 01-4.042-3.654M11 20v-3m0 3a10.023 10.023 0 003-3m-3 3H9m4-3a10.023 10.023 0 01-3 3" />
                    </svg>
                </div>
                <h1 class="text-3xl font-serif font-bold text-calirify-dark mb-2">Welcome Back</h1>
                <p class="text-sm text-gray-500 font-medium leading-relaxed">Sign in with your phone number to manage your subscriptions.</p>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-2xl border border-green-100 text-xs font-bold uppercase tracking-widest">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-700 rounded-2xl border border-red-100 text-xs font-bold uppercase tracking-widest text-left">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ session('otp_sent') ? url('/login/verify') : url('/login/send-otp') }}" method="POST" class="space-y-6">
                @csrf
                
                @if (!session('otp_sent'))
                    <div class="text-left">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3 ml-2">Phone Number</label>
                        <div class="relative">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-sm">+91</span>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="98765 43210" required maxlength="10"
                                class="w-full pl-14 pr-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-bold focus:ring-4 focus:ring-calirify-orange/10 focus:border-calirify-orange outline-none transition-all">
                        </div>
                    </div>
                    <button type="submit" 
                        class="w-full py-4 bg-calirify-orange text-white rounded-full font-bold text-xs uppercase tracking-widest hover:scale-[1.02] active:scale-[0.98] transition-all shadow-xl shadow-calirify-orange/20 mt-4">
                        Send OTP
                    </button>
                @else
                    <input type="hidden" name="phone" value="{{ old('phone', session('otp_phone')) }}">
                    <div class="text-left">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3 ml-2">Enter 6-Digit OTP</label>
                        <input type="text" name="otp" placeholder="••••••" required maxlength="6"
                            class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-center text-2xl font-black tracking-[0.5em] focus:ring-4 focus:ring-calirify-orange/10 focus:border-calirify-orange outline-none transition-all">
                        <p class="mt-4 text-[10px] text-gray-400 font-bold uppercase tracking-widest text-center">
                            Sent to <span class="text-calirify-dark">+91 {{ session('otp_phone') }}</span>
                        </p>
                    </div>
                    <button type="submit" 
                        class="w-full py-4 bg-calirify-orange text-white rounded-full font-bold text-xs uppercase tracking-widest hover:scale-[1.02] active:scale-[0.98] transition-all shadow-xl shadow-calirify-orange/20 mt-4">
                        Verify & Sign In
                    </button>
                    <a href="{{ url('/login') }}" class="block text-[10px] font-bold text-calirify-orange uppercase tracking-widest hover:underline mt-4">
                        Change Phone Number
                    </a>
                @endif
            </form>

            <div class="mt-12 pt-8 border-t border-black/5">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Don't have an account?</p>
                <a href="{{ url('/order') }}" class="text-xs font-bold text-calirify-dark hover:text-calirify-orange transition-colors">
                    Start your first meal plan →
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
