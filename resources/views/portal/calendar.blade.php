@extends('layouts.customer')

@section('title', 'Meal Calendar | Calirify')

@section('content')
<section class="min-h-screen bg-gray-50/50 pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- Header Section -->
        <div class="bg-white rounded-[3rem] p-8 md:p-12 border border-calirify-orange/5 shadow-2xl shadow-calirify-orange/5 reveal">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-calirify-orange mb-4">Meal Planner</p>
                    <h1 class="text-3xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">
                        Your Weekly <span class="text-calirify-orange italic">Schedule</span>
                    </h1>
                    <p class="mt-4 text-gray-500 font-medium max-w-xl">Customize your wellness journey. Swap meals, skip days, or rate your favorites to help us refine your nutrition.</p>
                </div>
                
                <div class="flex items-center gap-4 bg-gray-50 p-2 rounded-full border border-gray-100">
                    <button class="p-3 hover:bg-white hover:shadow-md rounded-full transition-all text-gray-400 hover:text-calirify-orange">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <span class="text-[10px] font-bold uppercase tracking-widest px-4">May 12 - May 18</span>
                    <button class="p-3 hover:bg-white hover:shadow-md rounded-full transition-all text-gray-400 hover:text-calirify-orange">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Weekly Grid -->
        <div class="overflow-x-auto pb-6 -mx-4 px-4 sm:mx-0 sm:px-0">
            <div class="min-w-[1000px] grid grid-cols-7 gap-4">
                @php
                    $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                    $dates = [12, 13, 14, 15, 16, 17, 18];
                    $today = 14;
                @endphp

                @foreach($days as $index => $day)
                    @php 
                        $date = $dates[$index];
                        $isToday = $date == $today;
                        $isPast = $date < $today;
                    @endphp
                    <div class="space-y-4">
                        <div class="text-center py-4 rounded-[2rem] {{ $isToday ? 'bg-calirify-orange text-white shadow-xl shadow-calirify-orange/20' : 'bg-white text-calirify-dark border border-calirify-orange/5' }}">
                            <p class="text-[10px] font-bold uppercase tracking-widest opacity-60">{{ $day }}</p>
                            <p class="text-2xl font-serif font-bold mt-1">{{ $date }}</p>
                        </div>

                        <!-- Lunch Slot -->
                        <div class="bg-white rounded-[2rem] p-5 border {{ $isToday ? 'border-calirify-orange/20' : 'border-gray-100' }} shadow-lg shadow-gray-200/50 {{ $isPast ? 'opacity-50 grayscale-[0.5]' : '' }} group hover:border-calirify-orange/30 transition-all cursor-pointer">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-[8px] font-bold uppercase tracking-widest text-calirify-orange">Lunch</span>
                                @if($isPast)
                                    <i data-lucide="check-circle-2" class="w-3 h-3 text-green-500"></i>
                                @endif
                            </div>
                            <h4 class="text-xs font-bold text-calirify-dark leading-snug mb-2 group-hover:text-calirify-orange transition-colors">Roasted Mediterranean Salmon</h4>
                            <p class="text-[9px] text-gray-400">450 kcal · High Protein</p>
                            
                            <div class="mt-4 pt-4 border-t border-gray-50 flex items-center justify-between">
                                <span class="text-[8px] font-bold uppercase text-gray-400">Scheduled</span>
                                <i data-lucide="more-horizontal" class="w-3 h-3 text-gray-300"></i>
                            </div>
                        </div>

                        <!-- Dinner Slot -->
                        <div class="bg-white rounded-[2rem] p-5 border {{ $isToday ? 'border-calirify-orange/20' : 'border-gray-100' }} shadow-lg shadow-gray-200/50 {{ $isPast ? 'opacity-50 grayscale-[0.5]' : '' }} group hover:border-calirify-orange/30 transition-all cursor-pointer">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-[8px] font-bold uppercase tracking-widest text-calirify-orange">Dinner</span>
                            </div>
                            <h4 class="text-xs font-bold text-calirify-dark leading-snug mb-2 group-hover:text-calirify-orange transition-colors">Herb-Crusted Grilled Chicken</h4>
                            <p class="text-[9px] text-gray-400">380 kcal · Low Carb</p>
                            
                            <div class="mt-4 pt-4 border-t border-gray-50 flex items-center justify-between">
                                <span class="text-[8px] font-bold uppercase text-gray-400">Scheduled</span>
                                <i data-lucide="more-horizontal" class="w-3 h-3 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Legend & Info -->
        <div class="flex flex-wrap items-center gap-8 py-6 px-10 bg-white rounded-[2rem] border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 reveal">
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-calirify-orange"></div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Active</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Delivered</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-orange-400"></div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Skipped</span>
            </div>
            <div class="ml-auto text-[10px] font-bold uppercase tracking-widest text-calirify-orange">
                Need to change a meal? Click on any card.
            </div>
        </div>
    </div>
</section>
@endsection
