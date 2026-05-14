@extends('layouts.customer')

@section('title', 'Subscription Details | Calirify')

@section('content')
<section class="min-h-screen bg-calirify-cream/20 pt-24 pb-12">
    <div class="max-w-4xl mx-auto px-6">
        <div class="mb-8 reveal">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-calirify-orange transition-colors group">
                <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                <span class="text-[10px] font-bold uppercase tracking-[0.2em]">Back to Dashboard</span>
            </a>
        </div>

        <div class="bg-white rounded-[3rem] overflow-hidden shadow-2xl shadow-calirify-orange/5 border border-calirify-orange/5 reveal">
            <!-- Header -->
            <div class="bg-calirify-dark p-8 lg:p-12 text-white relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-calirify-orange/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 relative z-10">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 rounded-full bg-calirify-orange text-white text-[9px] font-bold uppercase tracking-widest shadow-lg shadow-calirify-orange/20">
                                {{ $subscription['status'] }}
                            </span>
                            <span class="text-[10px] font-bold text-white/40 uppercase tracking-widest">#{{ $subscription['subscription_number'] }}</span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-serif font-bold leading-tight">{{ $subscription['plan_name'] }}</h1>
                    </div>
                    <div class="text-left md:text-right">
                        <p class="text-[9px] font-bold text-white/40 uppercase tracking-widest mb-1">Active Plan</p>
                        <p class="text-2xl font-serif font-bold text-calirify-orange">Rs. {{ number_format($subscription['total_amount'] ?? 0, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Details -->
            <div class="p-8 lg:p-12 space-y-12">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Delivery Info -->
                    <div class="bg-gray-50 rounded-3xl p-6 border border-gray-100">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-8 h-8 rounded-full bg-calirify-orange/10 flex items-center justify-center text-calirify-orange">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                            <h3 class="text-sm font-bold text-calirify-dark uppercase tracking-widest">Delivery Address</h3>
                        </div>
                        @if($subscription['address'])
                            <p class="text-sm font-bold text-calirify-dark">{{ $subscription['address']['full_name'] ?? 'N/A' }}</p>
                            <p class="text-xs text-gray-500 mt-1 leading-relaxed">
                                {{ $subscription['address']['address_line_1'] ?? '' }},<br>
                                {{ $subscription['address']['city'] ?? '' }} - {{ $subscription['address']['pincode'] ?? '' }}
                            </p>
                        @else
                            <p class="text-xs text-gray-500">Address not specified.</p>
                        @endif
                    </div>

                    <!-- Plan Specifics -->
                    <div class="bg-gray-50 rounded-3xl p-6 border border-gray-100 grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Diet Preference</p>
                            <p class="text-sm font-serif font-bold text-calirify-dark">{{ ucfirst($subscription['diet_type'] ?? 'Standard') }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Meal Slots</p>
                            <p class="text-sm font-serif font-bold text-calirify-dark">{{ is_array($subscription['meal_slots'] ?? null) ? implode(', ', array_map('ucfirst', $subscription['meal_slots'])) : ucfirst($subscription['meal_slots'] ?? 'Lunch') }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Total Days</p>
                            <p class="text-sm font-serif font-bold text-calirify-dark">{{ $subscription['active_days'] ?? '-' }} Days</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">Meals Remaining</p>
                            <p class="text-sm font-serif font-bold text-calirify-orange">{{ $subscription['meals_remaining'] ?? 'N/A' }} / {{ $subscription['total_meals'] ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-black/5">
                    <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Upcoming Schedule</h3>
                    
                    @if(empty($subscription['upcoming_meals']))
                        <div class="text-center py-8 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                            <p class="text-xs text-gray-500 font-medium">No upcoming deliveries scheduled for the next 14 days.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3">
                            @foreach($subscription['upcoming_meals'] as $day)
                                <div class="bg-white border {{ $day['status'] === 'skipped' ? 'border-red-100 bg-red-50/30' : ($day['status'] === 'completed' ? 'border-green-100 bg-green-50/30' : 'border-gray-100') }} rounded-2xl p-3 text-center">
                                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">
                                        {{ \Carbon\Carbon::parse($day['date'])->format('D') }}
                                    </p>
                                    <p class="text-sm font-serif font-bold text-calirify-dark mb-2">
                                        {{ \Carbon\Carbon::parse($day['date'])->format('d M') }}
                                    </p>
                                    <div class="inline-block px-2 py-0.5 rounded text-[8px] font-bold uppercase tracking-widest
                                        {{ match($day['status']) {
                                            'skipped' => 'bg-red-100 text-red-600',
                                            'completed' => 'bg-green-100 text-green-600',
                                            'active' => 'bg-calirify-orange/10 text-calirify-orange',
                                            default => 'bg-gray-100 text-gray-600'
                                        } }}">
                                        {{ $day['status'] }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Actions -->
                <div class="pt-8 border-t border-black/5 flex flex-col sm:flex-row gap-4">
                    <button class="flex-1 py-4 px-8 border border-calirify-orange/20 text-calirify-orange rounded-full font-bold text-[10px] uppercase tracking-widest hover:bg-calirify-orange hover:text-white transition-all">
                        Pause Subscription
                    </button>
                    <button class="flex-1 py-4 px-8 border border-gray-100 text-gray-400 rounded-full font-bold text-[10px] uppercase tracking-widest hover:bg-gray-100 hover:text-calirify-dark transition-all">
                        Skip Next Meal
                    </button>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center reveal">
            <p class="text-xs text-gray-400 font-medium mb-4">Want to change your delivery address or preferences?</p>
            <a href="https://wa.me/919876543210" class="text-calirify-orange font-bold text-[10px] uppercase tracking-widest hover:underline">
                Contact Nutrition Expert →
            </a>
        </div>
    </div>
</section>
@endsection
