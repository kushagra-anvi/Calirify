@extends('layouts.app')

@section('title', 'Build Your Meal Plan | Calirify')

@push('styles')
    <style>
        .step-active {
            background-color: #4caf50;
            color: white;
        }

        .step-completed {
            background-color: #E35F20;
            color: white;
        }

        .progress-line {
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
        }

        .progress-line-filled {
            height: 2px;
            background: #f9dd8a;
            transition: width 0.3s ease;
        }

        html {
            height: 100%;
            background-color: #fafafa;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
@endpush

@section('content')
    <main class="flex-1 pt-20 flex flex-col-reverse lg:flex-row bg-[#fafafa]">

        <!-- Left Sidebar: Progress & Summary -->
        <aside class="w-full lg:w-96 bg-calirify-dark text-white flex flex-col lg:sticky lg:top-20 z-30">

            <!-- Mobile Progress Bar (Sticky bottom style) -->
            <div class="lg:hidden bg-calirify-dark border-t border-white/5 p-4 sticky bottom-0 z-40">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-[10px] font-bold text-white/40 uppercase tracking-[0.3em]">Step <span
                            id="mobile-step-num">1</span> / 5</p>
                    <button id="mobile-pricing-trigger" onclick="toggleMobilePricing()"
                        class="hidden text-[10px] font-bold bg-white/10 px-3 py-1 rounded-full uppercase tracking-widest flex items-center gap-2">
                        Summary <span id="price-total-mobile" class="text-white">₹0</span>
                        <svg id="pricing-chevron" class="w-3 h-3 transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Dots Progress Indicator -->
                <div class="flex items-center gap-2">
                    <div id="m-step-1" class="flex-1 h-1 rounded-full bg-calirify-orange transition-all"></div>
                    <div id="m-step-2" class="flex-1 h-1 rounded-full bg-white/10 transition-all"></div>
                    <div id="m-step-3" class="flex-1 h-1 rounded-full bg-white/10 transition-all"></div>
                    <div id="m-step-4" class="flex-1 h-1 rounded-full bg-white/10 transition-all"></div>
                    <div id="m-step-5" class="flex-1 h-1 rounded-full bg-white/10 transition-all"></div>
                </div>

                <!-- Dropdown Mobile Pricing Detail -->
                <div id="mobile-pricing-details" class="hidden pt-4 space-y-3 animate-in fade-in slide-in-from-top-2">
                    <div class="flex justify-between text-[11px] opacity-60">
                        <span>Diet</span>
                        <span id="m-summary-diet">Not selected</span>
                    </div>
                    <div class="flex justify-between text-[11px] opacity-60">
                        <span>Plan</span>
                        <span id="m-summary-plan">Not selected</span>
                    </div>
                    <div class="pt-2 border-t border-white/5 flex justify-between font-bold text-sm">
                        <span>Total</span>
                        <span id="m-summary-total">₹0</span>
                    </div>
                </div>
            </div>

            <!-- Desktop Progress Bar Indicator -->
            <div class="hidden lg:flex flex-col p-8 overflow-y-auto custom-scrollbar">
                <!-- Steps Indicators -->
                <div class="space-y-8 mb-12">
                    <p class="text-[10px] font-bold text-white/40 uppercase tracking-[0.3em] mb-8">Step <span
                            id="current-step-num">1</span> / 5</p>

                    <div class="flex flex-col gap-6">
                        <!-- Step 1 Indicator -->
                        <div class="flex items-center gap-4 group cursor-pointer" onclick="goToStep(1)">
                            <div id="step-icon-1"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm step-active transition-all duration-300">
                                1
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest opacity-40">Check</p>
                                <p id="step-summary-1" class="text-[10px] font-medium text-white/60">Pincode</p>
                            </div>
                        </div>

                        <!-- Step 2 Indicator -->
                        <div class="flex items-center gap-4 group cursor-pointer" onclick="goToStep(2)">
                            <div id="step-icon-2"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-white/10 text-white/40 transition-all duration-300">
                                2
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest opacity-40">Diet</p>
                                <p id="step-summary-2" class="text-[10px] font-medium text-white/60">Not selected</p>
                            </div>
                        </div>

                        <!-- Step 3 Indicator -->
                        <div class="flex items-center gap-4 group cursor-pointer" onclick="goToStep(3)">
                            <div id="step-icon-3"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-white/10 text-white/40 transition-all duration-300">
                                3
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest opacity-40">Plan</p>
                                <p id="step-summary-3" class="text-[10px] font-medium text-white/60">Not selected</p>
                            </div>
                        </div>

                        <!-- Step 4 Indicator -->
                        <div class="flex items-center gap-4 group cursor-pointer" onclick="goToStep(4)">
                            <div id="step-icon-4"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-white/10 text-white/40 transition-all duration-300">
                                4
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest opacity-40">Contact</p>
                                <p id="step-summary-4" class="text-[10px] font-medium text-white/60">Not selected</p>
                            </div>
                        </div>

                        <!-- Step 5 Indicator -->
                        <div class="flex items-center gap-4 group cursor-pointer" onclick="goToStep(5)">
                            <div id="step-icon-5"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-white/10 text-white/40 transition-all duration-300">
                                5
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest opacity-40">Delivery</p>
                                <p id="step-summary-5" class="text-[10px] font-medium text-white/60">Not selected</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Pricing Module Summary Card -->
                <div id="desktop-pricing-card"
                    class="hidden mt-auto bg-white/5 rounded-3xl p-6 border border-white/5 space-y-4">
                    <div class="flex items-center gap-2 mb-2 text-calirify-orange">
                        <i data-lucide="calculator" class="w-5 h-5"></i>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-white">Live pricing</h4>
                    </div>

                    <div class="space-y-2 text-xs">
                        <div class="flex justify-between">
                            <span class="opacity-60">Per meal</span>
                            <span class="font-bold">₹<span id="price-per-meal">273</span></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="opacity-60">Meals/day</span>
                            <span id="summary-meals-day" class="font-bold">1</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="opacity-60">Delivery days</span>
                            <span id="summary-days" class="font-bold">1</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="opacity-60">People</span>
                            <span id="summary-people" class="font-bold">1</span>
                        </div>
                        <div class="flex justify-between text-green-400">
                            <span class="font-bold uppercase tracking-tighter">You save</span>
                            <span class="font-bold">₹<span id="summary-savings">0</span></span>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-white/10">
                        <div class="flex justify-between items-end mb-4">
                            <p class="text-[10px] font-bold uppercase tracking-widest opacity-60">Order Total</p>
                            <div class="text-right">
                                <p class="text-[10px] line-through opacity-40 mb-1">₹<span id="old-total">0</span></p>
                                <p class="text-2xl font-serif font-bold">₹<span id="final-total">0</span></p>
                            </div>
                        </div>
                        <p id="save-badge"
                            class="hidden text-center text-[9px] font-bold bg-[#f9dd8a] text-calirify-dark py-1 rounded-full uppercase tracking-widest">
                            Save <span id="save-percent">0</span>%</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Right Side: Content Area Frame -->
        <div class="flex-1 bg-white lg:rounded-tl-[3rem] shadow-2xl relative flex flex-col">
            <div class="flex-1 overflow-y-auto custom-scrollbar">

                <!-- STEP 1: SERVICEABILITY CHECK -->
                <div id="step-content-1"
                    class="step-container p-6 lg:p-16 max-w-4xl mx-auto animate-in fade-in slide-in-from-right-8 duration-500">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="bg-calirify-orange/10 text-calirify-orange text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Step
                                1 · Serviceability</span>
                        </div>
                        <h2 class="text-3xl lg:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-4">
                            Are we in your <span class="italic text-calirify-orange">neighborhood</span>?
                        </h2>
                        <p class="text-sm lg:text-base text-gray-400 font-medium">Enter your delivery pincode to check
                            if we serve your area.</p>
                    </div>

                    <div class="max-w-md">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Delivery
                            Pincode</label>
                        <div class="relative flex items-center">
                            <input type="text" id="check-pincode" placeholder="e.g. 201301" maxlength="6"
                                oninput="config.pincode = null; document.getElementById('step-summary-1').innerText = 'Pincode';"
                                class="w-full px-6 py-5 rounded-2xl border border-gray-100 bg-gray-50/50 text-xl font-bold tracking-widest focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                            <button type="button" onclick="checkServiceability()"
                                class="absolute right-2 top-2 bottom-2 px-6 bg-calirify-orange text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:scale-105 transition-all shadow-lg shadow-calirify-orange/20">Check</button>
                        </div>
                        <div id="pincode-result" class="mt-4 hidden animate-in fade-in slide-in-from-top-2">

                        </div>
                    </div>
                </div>

                <!-- STEP 2: DIET SELECTION -->
                <div id="step-content-2"
                    class="step-container hidden p-6 lg:p-16 max-w-4xl mx-auto animate-in fade-in slide-in-from-right-8 duration-500">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="bg-calirify-orange/10 text-calirify-orange text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Step
                                2 · Diet</span>
                        </div>
                        <h2 class="text-3xl lg:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-4">
                            Choose your <span class="italic text-calirify-orange">taste</span> profile.
                        </h2>
                        <p class="text-sm lg:text-base text-gray-400 font-medium">Select your dietary preference to see
                            appropriate meal options.</p>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

                        <!-- Vegetarian Card -->
                        <label class="relative group cursor-pointer">
                            <input type="radio" name="diet" value="veg" class="peer sr-only"
                                onchange="updateDiet('Veg')">
                            <div
                                class="h-full border-2 border-gray-100 rounded-[2.5rem] p-8 transition-all duration-300 peer-checked:border-calirify-orange peer-checked:bg-calirify-orange/5 group-hover:border-gray-200">
                                <div
                                    class="w-20 h-20 bg-green-50 rounded-2xl flex items-center justify-center mb-6 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}" alt="Vegetarian Meal"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-calirify-dark mb-2">Vegetarian</h3>
                                <p class="text-sm text-gray-500 leading-relaxed">Fresh, seasonal greens, legumes, and
                                    traditional Indian favorites.</p>
                            </div>
                            <div
                                class="absolute top-8 right-8 w-6 h-6 border-2 border-gray-200 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-calirify-orange peer-checked:border-calirify-orange peer-checked:[&_svg]:opacity-100">
                                <svg class="w-3 h-3 text-white opacity-0 transition-opacity duration-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </label>

                        <!-- Non-Vegetarian Card -->
                        <label class="relative group cursor-pointer">
                            <input type="radio" name="diet" value="non-veg" class="peer sr-only"
                                onchange="updateDiet('Non-Veg')">
                            <div
                                class="h-full border-2 border-gray-100 rounded-[2.5rem] p-8 transition-all duration-300 peer-checked:border-calirify-orange peer-checked:bg-calirify-orange/5 group-hover:border-gray-200">
                                <div
                                    class="w-20 h-20 bg-red-50 rounded-2xl flex items-center justify-center mb-6 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('assets/images/calirify_images/calirify_scraped_4.jpg') }}" alt="Non-Vegetarian Meal"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-calirify-dark mb-2">Non-Vegetarian</h3>
                                <p class="text-sm text-gray-500 leading-relaxed">Juicy meats, aromatic gravies, and
                                    high-protein gourmet meals.</p>
                            </div>
                            <div
                                class="absolute top-8 right-8 w-6 h-6 border-2 border-gray-200 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-calirify-orange peer-checked:border-calirify-orange peer-checked:[&_svg]:opacity-100">
                                <svg class="w-3 h-3 text-white opacity-0 transition-opacity duration-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </label>

                        <!-- Mix Card -->
                        <label class="relative group cursor-pointer">
                            <input type="radio" name="diet" value="mix" class="peer sr-only"
                                onchange="updateDiet('Mix')">
                            <div
                                class="h-full border-2 border-gray-100 rounded-[2.5rem] p-8 transition-all duration-300 peer-checked:border-calirify-orange peer-checked:bg-calirify-orange/5 group-hover:border-gray-200">
                                <div
                                    class="w-20 h-20 bg-amber-50 rounded-2xl flex items-center justify-center mb-6 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('assets/images/calirify_images/indian_food_mix.png') }}" alt="Mixed Veg and Non-Veg Meal"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-calirify-dark mb-2">Mix</h3>
                                <p class="text-sm text-gray-500 leading-relaxed">Best of both worlds. Perfect blend of vegetarian and non-vegetarian delights.</p>
                            </div>
                            <div
                                class="absolute top-8 right-8 w-6 h-6 border-2 border-gray-200 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-calirify-orange peer-checked:border-calirify-orange peer-checked:[&_svg]:opacity-100">
                                <svg class="w-3 h-3 text-white opacity-0 transition-opacity duration-300" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- STEP 3: PLAN SELECTION & DAY-WISE PLANNER -->
                <div id="step-content-3"
                    class="step-container hidden p-8 lg:p-16 max-w-4xl mx-auto animate-in fade-in slide-in-from-right-8 duration-500">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="bg-calirify-orange/10 text-calirify-orange text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Step
                                3 · Plan</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-4">
                            Build your <span class="italic text-calirify-orange">day-wise</span> calendar.
                        </h2>
                    </div>

                    <!-- Meal Slots Toggle Module -->
                    <div class="mb-10">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Meal Slots</p>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Breakfast Slot -->
                            <div id="slot-breakfast"
                                class="p-6 border-2 border-gray-100 rounded-3xl flex items-center justify-between cursor-pointer transition-all"
                                onclick="toggleSlot('breakfast')">
                                <div class="flex items-center gap-4">
                                    <span class="text-2xl">🌅</span>
                                    <div>
                                        <p class="text-sm font-bold">Breakfast</p>
                                        <p class="text-[10px] text-gray-400">8:00–9:30 AM</p>
                                    </div>
                                </div>
                                <div id="breakfast-check"
                                    class="w-6 h-6 rounded-full border-2 border-gray-100 flex items-center justify-center">
                                </div>
                            </div>
                            <!-- Lunch Slot -->
                            <div id="slot-lunch"
                                class="p-6 border-2 border-calirify-orange bg-calirify-orange/5 rounded-3xl flex items-center justify-between cursor-pointer transition-all"
                                onclick="toggleSlot('lunch')">
                                <div class="flex items-center gap-4">
                                    <span class="text-2xl">☀️</span>
                                    <div>
                                        <p class="text-sm font-bold">Lunch</p>
                                        <p class="text-[10px] text-gray-400">12:30–2:00 PM</p>
                                    </div>
                                </div>
                                <div id="lunch-check"
                                    class="w-6 h-6 rounded-full bg-calirify-orange flex items-center justify-center"><svg
                                        class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                            </div>
                            <!-- Snacks Slot -->
                            <div id="slot-snacks"
                                class="p-6 border-2 border-gray-100 rounded-3xl flex items-center justify-between cursor-pointer transition-all"
                                onclick="toggleSlot('snacks')">
                                <div class="flex items-center gap-4">
                                    <span class="text-2xl">☕</span>
                                    <div>
                                        <p class="text-sm font-bold">Snacks</p>
                                        <p class="text-[10px] text-gray-400">4:30–6:00 PM</p>
                                    </div>
                                </div>
                                <div id="snacks-check"
                                    class="w-6 h-6 rounded-full border-2 border-gray-100 flex items-center justify-center">
                                </div>
                            </div>
                            <!-- Dinner Slot -->
                            <div id="slot-dinner"
                                class="p-6 border-2 border-gray-100 rounded-3xl flex items-center justify-between cursor-pointer transition-all"
                                onclick="toggleSlot('dinner')">
                                <div class="flex items-center gap-4">
                                    <span class="text-2xl">🌙</span>
                                    <div>
                                        <p class="text-sm font-bold">Dinner</p>
                                        <p class="text-[10px] text-gray-400">8:00–9:30 PM</p>
                                    </div>
                                </div>
                                <div id="dinner-check"
                                    class="w-6 h-6 rounded-full border-2 border-gray-100 flex items-center justify-center">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming 3-Day Menu Preview Section -->
                    <div class="mb-10 bg-gray-50/50 p-6 lg:p-8 rounded-[2.5rem] border border-gray-100 transition-all duration-300">
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleMenuPreview()">
                            <div class="flex items-center gap-4">
                                <span class="text-xl p-3 bg-white rounded-2xl border border-gray-100" id="menu-toggle-icon">📅</span>
                                <div>
                                    <p class="text-[10px] font-bold text-calirify-orange uppercase tracking-widest mb-0.5">Interactive Menu</p>
                                    <h3 class="text-lg lg:text-xl font-serif font-bold text-calirify-dark flex items-center gap-2">
                                        Upcoming 3-Day Menu Preview
                                        <span class="text-xs text-gray-400 font-sans font-normal opacity-70" id="menu-toggle-hint">(Tap to View)</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg id="menu-chevron" class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 hidden" id="menu-preview-container">
                            <!-- Rendered dynamically via JS -->
                        </div>
                    </div>

                    <!-- Duration Section -->
                    <div class="mb-10">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6">Duration (Delivery Days)</p>
                        <div class="flex flex-wrap gap-4 pb-2">
                            <button
                                class="duration-btn flex-shrink-0 p-6 rounded-3xl border-2 border-calirify-orange bg-calirify-orange/5 text-calirify-dark transition-all text-center min-w-[125px] flex flex-col justify-center items-center"
                                data-duration="1"
                                onclick="updateDuration(1, this)">
                                <span class="text-3xl font-serif font-black block mb-1 text-calirify-dark">1</span>
                                <span class="duration-price text-xs font-medium opacity-75 text-gray-500">₹273 / meal</span>
                            </button>
                            <button
                                class="duration-btn flex-shrink-0 p-6 rounded-3xl border-2 border-gray-100 text-calirify-dark transition-all text-center min-w-[125px] flex flex-col justify-center items-center"
                                data-duration="3"
                                onclick="updateDuration(3, this)">
                                <span class="text-3xl font-serif font-black block mb-1 text-calirify-dark">3</span>
                                <span class="duration-price text-xs font-medium opacity-75 text-gray-500">₹265 / meal</span>
                            </button>
                            <button
                                class="duration-btn flex-shrink-0 p-6 rounded-3xl border-2 border-gray-100 text-calirify-dark transition-all text-center min-w-[125px] flex flex-col justify-center items-center"
                                data-duration="7"
                                onclick="updateDuration(7, this)">
                                <span class="text-3xl font-serif font-black block mb-1 text-calirify-dark">7</span>
                                <span class="duration-price text-xs font-medium opacity-75 text-gray-500">₹251 / meal</span>
                            </button>
                            <button
                                class="duration-btn flex-shrink-0 p-6 rounded-3xl border-2 border-gray-100 text-calirify-dark transition-all text-center min-w-[125px] flex flex-col justify-center items-center"
                                data-duration="14"
                                onclick="updateDuration(14, this)">
                                <span class="text-3xl font-serif font-black block mb-1 text-calirify-dark">14</span>
                                <span class="duration-price text-xs font-medium opacity-75 text-gray-500">₹238 / meal</span>
                            </button>
                            <button
                                class="duration-btn flex-shrink-0 p-6 rounded-3xl border-2 border-gray-100 text-calirify-dark transition-all text-center min-w-[125px] flex flex-col justify-center items-center"
                                data-duration="30"
                                onclick="updateDuration(30, this)">
                                <span class="text-3xl font-serif font-black block mb-1 text-calirify-dark">30</span>
                                <span class="duration-price text-xs font-medium opacity-75 text-gray-500">₹213 / meal</span>
                            </button>
                        </div>
                    </div>

                    <!-- Date & People Config Row -->
                    <div class="grid sm:grid-cols-2 gap-8 mb-10">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Start date</p>
                            <input type="date" id="start-date"
                                class="w-full px-5 py-4 rounded-2xl border border-gray-100 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-calirify-orange/30">
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">People</p>
                            <div class="flex items-center gap-4">
                                <button
                                    class="w-12 h-12 rounded-xl border border-gray-100 flex items-center justify-center font-bold text-xl hover:bg-gray-50"
                                    onclick="updatePeople(-1)">-</button>
                                <span id="people-count" class="text-lg font-bold w-8 text-center">1</span>
                                <button
                                    class="w-12 h-12 rounded-xl border border-gray-100 flex items-center justify-center font-bold text-xl hover:bg-gray-50"
                                    onclick="updatePeople(1)">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Day-Wise Skip Calendar Widget -->
                    <div class="mt-12 pt-12 border-t border-gray-100">
                        <div class="flex items-center gap-3 mb-8">
                            <span
                                class="w-10 h-10 bg-calirify-orange/10 rounded-xl flex items-center justify-center text-calirify-orange text-xl">📅</span>
                            <div>
                                <h4 class="text-sm font-bold">Day-wise Meal Planner</h4>
                                <p class="text-[10px] text-gray-400">Customise your schedule. Toggle any meal to skip.
                                </p>
                            </div>
                        </div>

                        <div class="max-h-[400px] overflow-y-auto custom-scrollbar pr-2">
                            <div id="calendar-list" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Calendar Slots Generated Dynamically via Javascript Engine -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 4: CONTACT & OTP PHONE VERIFICATION -->
                <div id="step-content-4"
                    class="step-container hidden p-8 lg:p-16 max-w-4xl mx-auto animate-in fade-in slide-in-from-right-8 duration-500">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="bg-calirify-orange/10 text-calirify-orange text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Step
                                4 · Contact</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-4">
                            Introduce <span class="italic text-calirify-orange">yourself</span>.
                        </h2>
                        <p class="text-gray-400 font-medium">How should we address you and keep you updated?</p>
                    </div>

                    <form class="space-y-8" onsubmit="return false;">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Full Name</label>
                            <input type="text" id="contact-name" placeholder="John Doe"
                                class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6 items-end">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Phone Number</label>
                                <div class="relative flex items-center">
                                    <span class="absolute left-6 text-sm font-bold text-gray-400">+91</span>
                                    <input type="tel" id="contact-phone" placeholder="98765 43210"
                                        class="w-full pl-16 pr-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                    <button type="button" onclick="sendOTP()"
                                        class="absolute right-2 top-2 bottom-2 px-4 bg-calirify-dark text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-calirify-orange transition-all">Send OTP</button>
                                </div>
                            </div>
                            <div id="otp-container" class="hidden animate-in fade-in slide-in-from-bottom-2">
                                <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Verify OTP</label>
                                <div class="relative">
                                    <input type="text" id="contact-otp" placeholder="0000"
                                        class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all tracking-[0.5em] text-center">
                                    <button type="button" onclick="verifyOTP()"
                                        class="absolute right-2 top-2 bottom-2 px-4 bg-green-600 text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-green-700 transition-all">Verify</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Email Address <span class="lowercase opacity-40">(Optional)</span></label>
                            <input type="email" id="contact-email" placeholder="john@example.com"
                                class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                        </div>
                    </form>
                </div>

                <!-- STEP 5: DELIVERY ADDRESS (SINGLE VS SPLIT OPTIONS) -->
                <div id="step-content-5"
                    class="step-container hidden p-8 lg:p-16 max-w-4xl mx-auto animate-in fade-in slide-in-from-right-8 duration-500">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="bg-calirify-orange/10 text-calirify-orange text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Step
                                5 · Delivery</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-4">
                            Where shall we <span class="italic text-calirify-orange">deliver</span>?
                        </h2>
                        <p class="text-gray-400 font-medium">Our riders will find you with these details.</p>
                    </div>

                    <!-- Split / Same Address Toggle Cards -->
                    <div class="mb-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div id="addr-same"
                            class="p-6 border-2 border-calirify-orange bg-calirify-orange/5 rounded-3xl cursor-pointer transition-all flex items-center justify-between"
                            onclick="setAddressMode('same')">
                            <div class="flex items-center gap-4">
                                <span class="text-2xl">📍</span>
                                <div>
                                    <p class="text-sm font-bold text-calirify-dark">Same Address</p>
                                    <p class="text-[10px] text-gray-400">All meals to one location</p>
                                </div>
                            </div>
                            <div id="addr-same-check"
                                class="w-6 h-6 rounded-full bg-calirify-orange flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="addr-split"
                            class="p-6 border-2 border-gray-100 rounded-3xl cursor-pointer transition-all flex items-center justify-between"
                            onclick="setAddressMode('split')">
                            <div class="flex items-center gap-4">
                                <span class="text-2xl">🌓</span>
                                <div>
                                    <p class="text-sm font-bold text-calirify-dark">Split Morning / Evening</p>
                                    <p class="text-[10px] text-gray-400">Office / Gym / Residential split</p>
                                </div>
                            </div>
                            <div id="addr-split-check"
                                class="w-6 h-6 rounded-full border border-gray-100 flex items-center justify-center">
                            </div>
                        </div>
                    </div>

                    <form class="space-y-6">
                        <!-- Single Delivery Address Form Fields -->
                        <div id="single-address-fields" class="space-y-6">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Flat / House No. / Building / Street</label>
                                <input type="text" id="delivery-address-single" placeholder="102, Green Valley Apartments"
                                    class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                            </div>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Area / Street / Sector</label>
                                    <input type="text" id="delivery-area-single" placeholder="Sector 62, Noida"
                                        class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Landmark (Optional)</label>
                                    <input type="text" id="delivery-landmark-single" placeholder="Near Apollo Hospital"
                                        class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Pincode</label>
                                    <div class="relative">
                                        <input type="text" id="delivery-pincode-single" maxlength="6"
                                            class="w-full pl-6 pr-24 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all"
                                            oninput="onSplitPincodeChange('single')">
                                        <button type="button" onclick="checkSplitPincode('single')" id="btn-verify-single"
                                            class="absolute right-2 top-2 bottom-2 px-3 bg-gray-100 text-gray-500 text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-calirify-orange hover:text-white transition-all">
                                            Verified
                                        </button>
                                    </div>
                                    <p id="status-pincode-single" class="mt-2 text-[10px] text-green-600 font-semibold flex items-center gap-1">
                                        <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-ping"></span> Serviceable Pincode
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Split Delivery Address Form Fields -->
                        <div id="split-address-fields" class="hidden space-y-6">
                            <!-- Morning Address (Breakfast & Lunch) -->
                            <div class="p-6 bg-gray-50/50 rounded-3xl border border-gray-100 space-y-6">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl">🌅</span>
                                    <h3 class="text-xs font-bold tracking-wider text-calirify-dark uppercase">Morning Delivery Address <span class="text-[9px] text-gray-400 font-normal normal-case">(Breakfast & Lunch)</span></h3>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Flat / House No. / Building / Street</label>
                                    <input type="text" id="delivery-address-morning" placeholder="e.g., Office Floor 4, Cyber City"
                                        class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-white text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                </div>
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Area / Street / Sector</label>
                                        <input type="text" id="delivery-area-morning" placeholder="Sector 62, Noida"
                                            class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Landmark (Optional)</label>
                                        <input type="text" id="delivery-landmark-morning" placeholder="Near Apollo Hospital"
                                            class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Pincode</label>
                                        <div class="relative">
                                            <input type="text" id="delivery-pincode-morning" maxlength="6"
                                                class="w-full pl-6 pr-24 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all"
                                                oninput="onSplitPincodeChange('morning')">
                                            <button type="button" onclick="checkSplitPincode('morning')" id="btn-verify-morning"
                                                class="absolute right-2 top-2 bottom-2 px-3 bg-gray-100 text-gray-500 text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-calirify-orange hover:text-white transition-all">
                                                Verified
                                            </button>
                                        </div>
                                        <p id="status-pincode-morning" class="mt-2 text-[10px] text-green-600 font-semibold flex items-center gap-1">
                                            <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-ping"></span> Serviceable Pincode
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Evening Address (Snacks & Dinner) -->
                            <div class="p-6 bg-gray-50/50 rounded-3xl border border-gray-100 space-y-6">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl">🌙</span>
                                    <h3 class="text-xs font-bold tracking-wider text-calirify-dark uppercase">Evening Delivery Address <span class="text-[9px] text-gray-400 font-normal normal-case">(Snacks & Dinner)</span></h3>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Flat / House No. / Building / Street</label>
                                    <input type="text" id="delivery-address-evening" placeholder="e.g., Block B-402, Residential Palms"
                                        class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-white text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                </div>
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Area / Street / Sector</label>
                                        <input type="text" id="delivery-area-evening" placeholder="Sector 62, Noida"
                                            class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Landmark (Optional)</label>
                                        <input type="text" id="delivery-landmark-evening" placeholder="Near Apollo Hospital"
                                            class="w-full px-6 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all">
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">Pincode</label>
                                        <div class="relative">
                                            <input type="text" id="delivery-pincode-evening" maxlength="6"
                                                class="w-full pl-6 pr-24 py-4 rounded-2xl border border-gray-100 bg-gray-50/50 text-sm font-medium focus:ring-2 focus:ring-calirify-orange/20 outline-none transition-all"
                                                oninput="onSplitPincodeChange('evening')">
                                            <button type="button" onclick="checkSplitPincode('evening')" id="btn-verify-evening"
                                                class="absolute right-2 top-2 bottom-2 px-3 bg-gray-100 text-gray-500 text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-calirify-orange hover:text-white transition-all">
                                                Verified
                                            </button>
                                        </div>
                                        <p id="status-pincode-evening" class="mt-2 text-[10px] text-green-600 font-semibold flex items-center gap-1">
                                            <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-ping"></span> Serviceable Pincode
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sticky Bottom Checkout Controller/Nav Bar -->
            <div class="bg-white/80 backdrop-blur-md border-t border-gray-100 p-6 flex justify-between items-center">
                <button id="prev-btn"
                    class="hidden px-8 py-4 rounded-2xl border border-gray-100 text-sm font-bold text-gray-400 hover:bg-gray-50 transition-all"
                    onclick="changeStep(-1)">
                    ← Back
                </button>
                <button id="next-btn"
                    class="ml-auto px-10 py-4 rounded-2xl bg-calirify-orange text-white text-sm font-bold uppercase tracking-widest hover:scale-[1.02] transition-all shadow-xl shadow-calirify-orange/20"
                    onclick="changeStep(1)">
                    Next →
                </button>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        let currentStep = 1;
        const pincodeStatus = {
            single: true,
            morning: true,
            evening: true
        };
        const config = {
            pincode: null,
            diet: null,
            slots: { breakfast: false, lunch: true, snacks: false, dinner: false },
            addressMode: 'same',
            duration: 1,
            people: 1,
            skips: [], 
            pricing: {
                1: 273,
                3: 265,
                7: 251,
                14: 238,
                30: 213
            },
            matrix: null
        };

        // Initialize Start Date field
        document.addEventListener('DOMContentLoaded', () => {
            const dateInput = document.getElementById('start-date');
            if (dateInput) {
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                const yyyy = tomorrow.getFullYear();
                const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
                const dd = String(tomorrow.getDate()).padStart(2, '0');
                dateInput.value = `${yyyy}-${mm}-${dd}`;
            }
        });

        async function checkServiceability() {
            const pin = document.getElementById('check-pincode').value;
            const resultDiv = document.getElementById('pincode-result');
            const checkBtn = document.querySelector('button[onclick="checkServiceability()"]');

            const isValidPin = /^[1-9][0-9]{5}$/.test(pin);

            if (!isValidPin) {
                alert('Please enter a valid 6-digit Indian pincode.');
                return;
            }

            checkBtn.disabled = true;
            checkBtn.innerText = 'Checking...';
            resultDiv.classList.remove('hidden');
            resultDiv.innerHTML = `<div class="p-4 bg-gray-50 text-gray-400 rounded-xl text-xs font-bold border border-gray-100 flex items-center gap-2">
                <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                Checking serviceability in your area...
            </div>`;

            try {
                const response = await fetch(`/api/serviceability/check?pincode=${pin}`);
                const data = await response.json();

                if (response.ok && data.status === 'available') {
                    config.pincode = pin;
                    if (document.getElementById('delivery-pincode-single')) document.getElementById('delivery-pincode-single').value = pin;
                    if (document.getElementById('delivery-pincode-morning')) document.getElementById('delivery-pincode-morning').value = pin;
                    if (document.getElementById('delivery-pincode-evening')) document.getElementById('delivery-pincode-evening').value = pin;
                    document.getElementById('step-summary-1').innerText = pin;
                    
                    resultDiv.innerHTML = `<div class="p-4 bg-green-50 text-green-700 rounded-xl text-xs font-bold border border-green-100 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                        ${data.message} Proceeding...
                    </div>`;
                    
                    setTimeout(() => changeStep(1), 1000);
                } else {
                    resultDiv.innerHTML = `<div class="p-4 bg-red-50 text-red-700 rounded-xl text-xs font-bold border border-red-100 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 11V6a1 1 0 012 0v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H5a1 1 0 110-2h5z" transform="rotate(45 10 11)"></path></svg>
                        ${data.message || 'Service currently unavailable in this area.'}
                    </div>`;
                }
            } catch (error) {
                resultDiv.innerHTML = `<div class="p-4 bg-amber-50 text-amber-700 rounded-xl text-xs font-bold border border-amber-100">
                    Unable to verify pincode. Please try again later.
                </div>`;
            } finally {
                checkBtn.disabled = false;
                checkBtn.innerText = 'Check';
            }
        }

        const menuData = {
            Veg: {
                Day1: {
                    breakfast: "🌅 Gobi Paratha with Fresh Curd",
                    lunch: "☀️ Bhindi Do Piaza & Dal",
                    snacks: "☕ Samosa & Masala Chai",
                    dinner: "🌙 Pav Bhaji Special"
                },
                Day2: {
                    breakfast: "🌅 Poha with Roasted Peanuts",
                    lunch: "☀️ Mughlai Gobhi & Kabuli",
                    snacks: "☕ Veg Grilled Sandwich & Tea",
                    dinner: "🌙 Subz Khurchan & Roti"
                },
                Day3: {
                    breakfast: "🌅 Idli Sambar & Coconut Chutney",
                    lunch: "☀️ Chilli Mushroom Feast",
                    snacks: "☕ Dhokla with Chutney & Tea",
                    dinner: "🌙 Baigan Bharta Smoked"
                }
            },
            'Non-Veg': {
                Day1: {
                    breakfast: "🌅 Egg Masala Omelette & Toast",
                    lunch: "☀️ Murg Do Piaza & Dal",
                    snacks: "☕ Chicken Tikka Roll & Chai",
                    dinner: "🌙 Keema Pav Classic"
                },
                Day2: {
                    breakfast: "🌅 Scrambled Eggs with Toast",
                    lunch: "☀️ Chicken Mughlai & Kabuli",
                    snacks: "☕ Chicken Mayo Sandwich & Tea",
                    dinner: "🌙 Murg Khurchan & Roti"
                },
                Day3: {
                    breakfast: "🌅 Egg Bhurji Paratha",
                    lunch: "☀️ Chilli Chicken Feast",
                    snacks: "☕ Chicken Nuggets & Hot Tea",
                    dinner: "🌙 Murgi Bharta Smoked"
                }
            },
            Mix: {
                Day1: {
                    breakfast: "🌅 Egg Omelette / Gobi Paratha",
                    lunch: "☀️ Murg Do Piaza / Bhindi Do Piaza",
                    snacks: "☕ Chicken Tikka / Samosa & Chai",
                    dinner: "🌙 Keema Pav / Pav Bhaji Special"
                },
                Day2: {
                    breakfast: "🌅 Scrambled Eggs / Poha",
                    lunch: "☀️ Chicken Mughlai / Mughlai Gobhi",
                    snacks: "☕ Chicken Mayo / Veg Grilled Sandwich",
                    dinner: "🌙 Murg / Subz Khurchan & Roti"
                },
                Day3: {
                    breakfast: "🌅 Egg Bhurji / Idli Sambar",
                    lunch: "☀️ Chilli Chicken / Chilli Mushroom",
                    snacks: "☕ Chicken Nuggets / Dhokla & Tea",
                    dinner: "🌙 Murgi Bharta / Baigan Bharta"
                }
            }
        };

        function updateMenuPreview() {
            const diet = config.diet || 'Veg';
            const dietKey = diet === 'Mix' ? 'Mix' : (diet === 'Non-Vegetarian' || diet === 'Non Veg' || diet === 'Non-Veg' ? 'Non-Veg' : 'Veg');
            const data = menuData[dietKey] || menuData.Veg;

            const days = ['Day1', 'Day2', 'Day3'];
            const dayLabels = ['Tomorrow (Day 1)', 'Day 2', 'Day 3'];
            let html = '';

            days.forEach((dayKey, idx) => {
                const dayMenu = data[dayKey];
                html += `
                    <div class="p-6 bg-white/5 rounded-3xl border border-gray-100 space-y-4 hover:border-calirify-orange/20 transition-all duration-300 text-left">
                        <div class="flex items-center justify-between border-b border-gray-50 pb-3">
                            <h4 class="text-sm font-bold text-calirify-dark">${dayLabels[idx]}</h4>
                            <span class="text-[10px] bg-calirify-orange/10 text-calirify-orange font-bold uppercase tracking-widest px-2 py-0.5 rounded">Gourmet</span>
                        </div>
                        <div class="space-y-3 text-xs">
                `;

                const slots = [
                    { id: 'breakfast', icon: '🌅', label: 'Breakfast' },
                    { id: 'lunch', icon: '☀️', label: 'Lunch' },
                    { id: 'snacks', icon: '☕', label: 'Snacks' },
                    { id: 'dinner', icon: '🌙', label: 'Dinner' }
                ];

                slots.forEach(slot => {
                    const isSelected = config.slots[slot.id];
                    const mealName = dayMenu[slot.id];
                    html += `
                        <div class="flex items-start gap-2.5 transition-all duration-200 ${isSelected ? 'opacity-100 scale-[1.01]' : 'opacity-30 filter grayscale'}">
                            <span class="text-base">${slot.icon}</span>
                            <div>
                                <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">${slot.label} ${isSelected ? '<span class="text-[8px] bg-green-500/10 text-green-600 px-1.5 py-0.2 rounded font-bold uppercase tracking-widest ml-1">Selected</span>' : ''}</p>
                                <p class="text-xs font-semibold text-calirify-dark mt-0.5">${mealName}</p>
                            </div>
                        </div>
                    `;
                });

                html += `
                        </div>
                    </div>
                `;
            });

            const container = document.getElementById('menu-preview-container');
            if (container) container.innerHTML = html;
        }

        let isMenuExpanded = false;
        function toggleMenuPreview() {
            isMenuExpanded = !isMenuExpanded;
            const container = document.getElementById('menu-preview-container');
            const chevron = document.getElementById('menu-chevron');
            const hint = document.getElementById('menu-toggle-hint');
            const icon = document.getElementById('menu-toggle-icon');

            if (container) {
                if (isMenuExpanded) {
                    container.classList.remove('hidden');
                    if (chevron) chevron.classList.add('rotate-180');
                    if (hint) hint.innerText = '(Tap to Collapse)';
                    if (icon) icon.innerText = '📖';
                } else {
                    container.classList.add('hidden');
                    if (chevron) chevron.classList.remove('rotate-180');
                    if (hint) hint.innerText = '(Tap to View)';
                    if (icon) icon.innerText = '📅';
                }
            }
        }

        function updateDiet(val) {
            config.diet = val;
            document.getElementById('step-summary-2').innerText = val;
            const mobDiet = document.getElementById('m-summary-diet');
            if (mobDiet) mobDiet.innerText = val;
            
            updateDurationLabels();
            calculatePricing();
            updateStepUI();
            updateMenuPreview();

            setTimeout(() => {
                if (currentStep === 2) {
                    changeStep(1);
                }
            }, 600);
        }

        function toggleMobilePricing() {
            const details = document.getElementById('mobile-pricing-details');
            const chevron = document.getElementById('pricing-chevron');
            if (details) details.classList.toggle('hidden');
            if (chevron) chevron.classList.toggle('rotate-180');
        }

        function toggleSlot(slot) {
            config.slots[slot] = !config.slots[slot];
            const el = document.getElementById(`slot-${slot}`);
            const check = document.getElementById(`${slot}-check`);

            if (config.slots[slot]) {
                el.classList.add('border-calirify-orange', 'bg-calirify-orange/5');
                el.classList.remove('border-gray-100');
                check.innerHTML = '<svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>';
                check.classList.add('bg-calirify-orange');
                check.classList.remove('border-2', 'border-gray-100');
            } else {
                el.classList.remove('border-calirify-orange', 'bg-calirify-orange/5');
                el.classList.add('border-gray-100');
                check.innerHTML = '';
                check.classList.remove('bg-calirify-orange');
                check.classList.add('border-2', 'border-gray-100');
            }
            config.skips = []; 
            updateDurationLabels();
            generateCalendar();
            calculatePricing();
            updateMenuPreview();
        }

        function updateDuration(days, el) {
            config.duration = days;
            config.skips = []; 
            document.querySelectorAll('.duration-btn').forEach(btn => {
                btn.classList.remove('border-calirify-orange', 'bg-calirify-orange/5');
                btn.classList.add('border-gray-100');
            });
            el.classList.add('border-calirify-orange', 'bg-calirify-orange/5');
            el.classList.remove('border-gray-100');
            generateCalendar();
            calculatePricing();
        }

        function updatePeople(change) {
            config.people = Math.max(1, config.people + change);
            document.getElementById('people-count').innerText = config.people;
            calculatePricing();
        }

        function updateDurationLabels() {
            document.querySelectorAll('.duration-btn').forEach(btn => {
                const duration = btn.getAttribute('data-duration');
                const priceEl = btn.querySelector('.duration-price');
                if (priceEl && config.pricing[duration]) {
                    priceEl.innerText = `₹${Math.round(config.pricing[duration])} / meal`;
                }
            });
        }

        function generateCalendar() {
            const list = document.getElementById('calendar-list');
            if (!list) return;
            list.innerHTML = '';
            const startDateInput = document.getElementById('start-date');
            let startDate = new Date();
            if (startDateInput && startDateInput.value) {
                startDate = new Date(startDateInput.value);
            }

            for (let i = 0; i < config.duration; i++) {
                const date = new Date(startDate);
                date.setDate(startDate.getDate() + i);
                const dayStr = date.toLocaleDateString('en-US', { weekday: 'short', day: '2-digit', month: 'short' });

                const item = document.createElement('div');
                item.className = 'relative flex flex-col gap-3 p-5 bg-white rounded-3xl border border-gray-100 transition-all hover:border-gray-200 text-left';

                let slotsHtml = '';
                if (config.slots.breakfast) {
                    const isSkipped = config.skips.includes(`${i}-breakfast`);
                    slotsHtml += `
                        <label class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded border-2 flex items-center justify-center transition-all ${isSkipped ? 'border-gray-200' : 'bg-calirify-orange border-calirify-orange'}">
                                    ${isSkipped ? '' : '<svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>'}
                                </div>
                                <span class="text-[10px] font-bold ${isSkipped ? 'text-gray-300 line-through' : 'text-calirify-dark'} uppercase tracking-widest">Breakfast</span>
                            </div>
                            <input type="checkbox" class="sr-only" ${isSkipped ? 'checked' : ''} onchange="toggleMealSkip(${i}, 'breakfast')">
                            <span class="text-[9px] font-bold text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity">${isSkipped ? 'Add back' : 'Skip'}</span>
                        </label>`;
                }
                if (config.slots.lunch) {
                    const isSkipped = config.skips.includes(`${i}-lunch`);
                    slotsHtml += `
                        <label class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded border-2 flex items-center justify-center transition-all ${isSkipped ? 'border-gray-200' : 'bg-calirify-orange border-calirify-orange'}">
                                    ${isSkipped ? '' : '<svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>'}
                                </div>
                                <span class="text-[10px] font-bold ${isSkipped ? 'text-gray-300 line-through' : 'text-calirify-dark'} uppercase tracking-widest">Lunch</span>
                            </div>
                            <input type="checkbox" class="sr-only" ${isSkipped ? 'checked' : ''} onchange="toggleMealSkip(${i}, 'lunch')">
                            <span class="text-[9px] font-bold text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity">${isSkipped ? 'Add back' : 'Skip'}</span>
                        </label>`;
                }
                if (config.slots.snacks) {
                    const isSkipped = config.skips.includes(`${i}-snacks`);
                    slotsHtml += `
                        <label class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded border-2 flex items-center justify-center transition-all ${isSkipped ? 'border-gray-200' : 'bg-calirify-orange border-calirify-orange'}">
                                    ${isSkipped ? '' : '<svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>'}
                                </div>
                                <span class="text-[10px] font-bold ${isSkipped ? 'text-gray-300 line-through' : 'text-calirify-dark'} uppercase tracking-widest">Snacks</span>
                            </div>
                            <input type="checkbox" class="sr-only" ${isSkipped ? 'checked' : ''} onchange="toggleMealSkip(${i}, 'snacks')">
                            <span class="text-[9px] font-bold text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity">${isSkipped ? 'Add back' : 'Skip'}</span>
                        </label>`;
                }
                if (config.slots.dinner) {
                    const isSkipped = config.skips.includes(`${i}-dinner`);
                    slotsHtml += `
                        <label class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded border-2 flex items-center justify-center transition-all ${isSkipped ? 'border-gray-200' : 'bg-calirify-orange border-calirify-orange'}">
                                    ${isSkipped ? '' : '<svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>'}
                                </div>
                                <span class="text-[10px] font-bold ${isSkipped ? 'text-gray-300 line-through' : 'text-calirify-dark'} uppercase tracking-widest">Dinner</span>
                            </div>
                            <input type="checkbox" class="sr-only" ${isSkipped ? 'checked' : ''} onchange="toggleMealSkip(${i}, 'dinner')">
                            <span class="text-[9px] font-bold text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity">${isSkipped ? 'Add back' : 'Skip'}</span>
                        </label>`;
                }

                item.innerHTML = `
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">${dayStr}</span>
                        <i data-lucide="calendar-check-2" class="w-4 h-4 text-calirify-orange/40"></i>
                    </div>
                    <div class="space-y-3">
                        ${slotsHtml}
                    </div>
                `;
                list.appendChild(item);
            }
            if (window.lucide) {
                window.lucide.createIcons();
            }
        }

        function toggleMealSkip(dayIndex, slot) {
            const key = `${dayIndex}-${slot}`;
            const index = config.skips.indexOf(key);
            if (index > -1) config.skips.splice(index, 1);
            else config.skips.push(key);

            generateCalendar();
            calculatePricing();
        }

        function calculatePricing() {
            const dietKey = config.diet ? config.diet.toLowerCase().replace('-', '_') : 'veg';
            const slotKeys = [];
            if (config.slots.breakfast) slotKeys.push('breakfast');
            if (config.slots.lunch) slotKeys.push('lunch');
            if (config.slots.snacks) slotKeys.push('snacks');
            if (config.slots.dinner) slotKeys.push('dinner');
            
            // Default slot if none selected (for base price calculation)
            const primarySlot = slotKeys[0] || 'lunch';

            let perMeal = config.pricing[config.duration];
            let basePerMeal = config.pricing[1];

            // If matrix is available, try to find exact match
            if (config.matrix && config.matrix[config.duration]) {
                const searchKey = `${dietKey}_${primarySlot}`;
                if (config.matrix[config.duration][searchKey]) {
                    perMeal = config.matrix[config.duration][searchKey].price_per_meal;
                }
                if (config.matrix[1][searchKey]) {
                    basePerMeal = config.matrix[1][searchKey].price_per_meal;
                }
            }

            const activeSlotsCount = slotKeys.length;

            const totalPotentialMeals = activeSlotsCount * config.duration;
            const skippedMealsCount = config.skips.length;
            const actualMealsPerSubscription = Math.max(0, totalPotentialMeals - skippedMealsCount);

            const totalMeals = actualMealsPerSubscription * config.people;
            const finalTotal = totalMeals * perMeal;
            const oldTotal = totalMeals * basePerMeal;
            const savings = oldTotal - finalTotal;
            const savePercent = Math.round((savings / oldTotal) * 100) || 0;

            const formattedTotal = '₹' + Math.round(finalTotal);
            document.getElementById('price-per-meal').innerText = perMeal;
            document.getElementById('summary-meals-day').innerText = activeSlotsCount;
            document.getElementById('summary-days').innerText = config.duration;
            document.getElementById('summary-people').innerText = config.people;
            document.getElementById('summary-savings').innerText = Math.round(savings);
            document.getElementById('old-total').innerText = Math.round(oldTotal);
            document.getElementById('final-total').innerText = Math.round(finalTotal);
            document.getElementById('price-total-mobile').innerText = formattedTotal;
            document.getElementById('m-summary-total').innerText = formattedTotal;

            const badge = document.getElementById('save-badge');
            if (savePercent > 0 && badge) {
                badge.classList.remove('hidden');
                document.getElementById('save-percent').innerText = savePercent;
            } else if (badge) {
                badge.classList.add('hidden');
            }

            const slotParts = [];
            if (config.slots.breakfast) slotParts.push('Breakfast');
            if (config.slots.lunch) slotParts.push('Lunch');
            if (config.slots.snacks) slotParts.push('Snacks');
            if (config.slots.dinner) slotParts.push('Dinner');
            const slotText = slotParts.join(' + ') || 'None';
            const summaryText = `${config.duration} Days · ${slotText}${skippedMealsCount > 0 ? ` (${skippedMealsCount} skipped)` : ''}`;
            document.getElementById('step-summary-3').innerText = summaryText;
            document.getElementById('m-summary-plan').innerText = summaryText;
        }

        function updateStepUI() {
            for (let i = 1; i <= 5; i++) {
                const icon = document.getElementById(`step-icon-${i}`);
                const content = document.getElementById(`step-content-${i}`);
                const dot = document.getElementById(`m-step-${i}`);

                if (!icon) continue;

                icon.classList.remove('step-active', 'step-completed', 'bg-white/10', 'text-white/40');
                if (i < currentStep) {
                    icon.classList.add('step-completed'); 
                } else if (i === currentStep) {
                    icon.classList.add('step-active'); 
                } else {
                    icon.classList.add('bg-white/10', 'text-white/40'); 
                }

                if (content) {
                    if (i === currentStep) content.classList.remove('hidden');
                    else content.classList.add('hidden');
                }

                if (dot) {
                    dot.classList.remove('bg-white/10', 'bg-calirify-orange', 'bg-[#4caf50]');
                    if (i < currentStep) {
                        dot.classList.add('bg-calirify-orange');
                    } else if (i === currentStep) {
                        dot.classList.add('bg-[#4caf50]');
                    } else {
                        dot.classList.add('bg-white/10');
                    }
                }
            }

            const stepNumEl = document.getElementById('current-step-num');
            const mobileStepNumEl = document.getElementById('mobile-step-num');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const pinResult = document.getElementById('pincode-result');

            if (currentStep === 1 && pinResult) pinResult.classList.add('hidden');
            if (stepNumEl) stepNumEl.innerText = currentStep;
            if (mobileStepNumEl) mobileStepNumEl.innerText = currentStep;
            if (prevBtn) prevBtn.classList.toggle('hidden', currentStep === 1);
            if (nextBtn) {
                nextBtn.classList.toggle('hidden', currentStep === 1);
                nextBtn.innerText = currentStep === 5 ? 'Confirm & Pay' : 'Next →';
            }

            const desktopPricing = document.getElementById('desktop-pricing-card');
            const mobilePricing = document.getElementById('mobile-pricing-trigger');

            if (desktopPricing) {
                desktopPricing.classList.toggle('hidden', currentStep < 3);
            }
            if (mobilePricing) {
                mobilePricing.classList.toggle('hidden', currentStep < 3);
            }
            if (currentStep === 3) {
                updateMenuPreview();
            }
        }

        function changeStep(dir) {
            if (dir === 1 && !validateStep(currentStep)) return;

            const newStep = currentStep + dir;
            if (newStep < 1 || newStep > 5) {
                if (newStep > 5) submitOrder();
                return;
            }

            currentStep = newStep;
            updateStepUI();
            if (newStep !== 3) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        function validateStep(step) {
            if (step === 1 && !config.pincode) {
                alert('Please check your pincode first.');
                return false;
            }
            if (step === 2 && !config.diet) {
                alert('Please select your dietary preference.');
                return false;
            }
            if (step === 3 && !config.slots.breakfast && !config.slots.lunch && !config.slots.snacks && !config.slots.dinner) {
                alert('Please select at least one meal slot.');
                return false;
            }
            if (step === 4) {
                const name = document.getElementById('contact-name').value;
                const phone = document.getElementById('contact-phone').value;
                if (!name || name.length < 3) {
                    alert('Please enter your full name.');
                    return false;
                }
                if (!phone || phone.length < 10) {
                    alert('Please enter a valid phone number.');
                    return false;
                }
            }
            if (step === 5) {
                if (config.addressMode === 'same') {
                    const single = document.getElementById('delivery-address-single').value;
                    const area = document.getElementById('delivery-area-single').value;
                    if (!single) {
                        alert('Please enter your Flat / House No. / Building address.');
                        return false;
                    }
                    if (!area) {
                        alert('Please enter your Area / Street / Sector.');
                        return false;
                    }
                } else {
                    const morning = document.getElementById('delivery-address-morning').value;
                    const morningArea = document.getElementById('delivery-area-morning').value;
                    const evening = document.getElementById('delivery-address-evening').value;
                    const eveningArea = document.getElementById('delivery-area-evening').value;
                    if (!morning) {
                        alert('Please enter your morning Flat / House No. / Building.');
                        return false;
                    }
                    if (!morningArea) {
                        alert('Please enter your morning Area / Street / Sector.');
                        return false;
                    }
                    if (!pincodeStatus.morning) {
                        alert('Please verify your morning pincode first.');
                        return false;
                    }
                    if (!evening) {
                        alert('Please enter your evening Flat / House No. / Building.');
                        return false;
                    }
                    if (!eveningArea) {
                        alert('Please enter your evening Area / Street / Sector.');
                        return false;
                    }
                    if (!pincodeStatus.evening) {
                        alert('Please verify your evening pincode first.');
                        return false;
                    }
                }
            }
            return true;
        }

        function setAddressMode(mode) {
            config.addressMode = mode;
            const sameEl = document.getElementById('addr-same');
            const splitEl = document.getElementById('addr-split');
            const sameCheck = document.getElementById('addr-same-check');
            const splitCheck = document.getElementById('addr-split-check');
            const singleFields = document.getElementById('single-address-fields');
            const splitFields = document.getElementById('split-address-fields');

            if (mode === 'same') {
                sameEl.classList.add('border-calirify-orange', 'bg-calirify-orange/5');
                sameEl.classList.remove('border-gray-100');
                sameCheck.classList.add('bg-calirify-orange');
                sameCheck.classList.remove('border', 'border-gray-100');
                sameCheck.innerHTML = `<svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>`;

                splitEl.classList.remove('border-calirify-orange', 'bg-calirify-orange/5');
                splitEl.classList.add('border-gray-100');
                splitCheck.classList.remove('bg-calirify-orange');
                splitCheck.classList.add('border', 'border-gray-100');
                splitCheck.innerHTML = '';

                singleFields.classList.remove('hidden');
                splitFields.classList.add('hidden');
            } else {
                splitEl.classList.add('border-calirify-orange', 'bg-calirify-orange/5');
                splitEl.classList.remove('border-gray-100');
                splitCheck.classList.add('bg-calirify-orange');
                splitCheck.classList.remove('border', 'border-gray-100');
                splitCheck.innerHTML = `<svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>`;

                sameEl.classList.remove('border-calirify-orange', 'bg-calirify-orange/5');
                sameEl.classList.add('border-gray-100');
                sameCheck.classList.remove('bg-calirify-orange');
                sameCheck.classList.add('border', 'border-gray-100');
                sameCheck.innerHTML = '';

                singleFields.classList.add('hidden');
                splitFields.classList.remove('hidden');
            }
        }

        function onSplitPincodeChange(slot) {
            pincodeStatus[slot] = false;
            const btn = document.getElementById('btn-verify-' + slot);
            const status = document.getElementById('status-pincode-' + slot);
            if (btn) {
                btn.className = 'absolute right-2 top-2 bottom-2 px-3 bg-calirify-orange text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:opacity-90 transition-all';
                btn.innerText = 'Verify';
            }
            if (status) {
                status.className = 'mt-2 text-[10px] text-amber-600 font-semibold flex items-center gap-1';
                status.innerHTML = `<span class="inline-block w-1.5 h-1.5 bg-amber-500 rounded-full animate-pulse"></span> Pincode changed - Please verify`;
            }
        }

        async function checkSplitPincode(slot) {
            const inputEl = document.getElementById('delivery-pincode-' + slot);
            const pinVal = inputEl ? inputEl.value.trim() : '';
            const isValidPin = /^[1-9][0-9]{5}$/.test(pinVal);
            const btn = document.getElementById('btn-verify-' + slot);
            const status = document.getElementById('status-pincode-' + slot);

            if (!isValidPin) {
                alert('Please enter a valid 6-digit Indian pincode.');
                return;
            }

            if (btn) {
                btn.disabled = true;
                btn.innerText = 'Checking...';
            }

            try {
                const response = await fetch(`/api/serviceability/check?pincode=${pinVal}`);
                const data = await response.json();

                if (response.ok && data.status === 'available') {
                    pincodeStatus[slot] = true;
                    if (btn) {
                        btn.className = 'absolute right-2 top-2 bottom-2 px-3 bg-emerald-500/10 text-emerald-600 border border-emerald-500/20 text-[9px] font-bold uppercase tracking-widest rounded-lg transition-all';
                        btn.innerText = 'Verified';
                        btn.disabled = false;
                    }
                    if (status) {
                        status.className = 'mt-2 text-[10px] text-green-600 font-semibold flex items-center gap-1';
                        status.innerHTML = `<span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-ping"></span> Serviceable Pincode`;
                    }
                } else {
                    pincodeStatus[slot] = false;
                    if (btn) {
                        btn.className = 'absolute right-2 top-2 bottom-2 px-3 bg-red-500/10 text-red-600 border border-red-500/20 text-[9px] font-bold uppercase tracking-widest rounded-lg transition-all';
                        btn.innerText = 'Retry';
                        btn.disabled = false;
                    }
                    if (status) {
                        status.className = 'mt-2 text-[10px] text-red-600 font-semibold flex items-center gap-1';
                        status.innerHTML = `<span class="inline-block w-1.5 h-1.5 bg-red-500 rounded-full"></span> Unserviceable Pincode`;
                    }
                    alert(data.message || 'Service unavailable for this pincode.');
                }
            } catch (error) {
                console.error('Pincode check error:', error);
                if (btn) {
                    btn.disabled = false;
                    btn.innerText = 'Verify';
                }
                alert('Connection error. Please try again.');
            }
        }

        function sendOTP() {
            const phone = document.getElementById('contact-phone').value;
            if (!phone || phone.length < 10) {
                alert('Enter a valid phone number first.');
                return;
            }
            document.getElementById('otp-container').classList.remove('hidden');
            alert('OTP Sent to ' + phone + ' (Use any 4 digits to verify)');
        }

        async function submitOrder() {
            const nextBtn = document.getElementById('next-btn');
            const originalText = nextBtn.innerText;
            nextBtn.disabled = true;
            nextBtn.innerText = 'Creating Subscription...';

            const activeSlots = [];
            if (config.slots.breakfast) activeSlots.push('breakfast');
            if (config.slots.lunch) activeSlots.push('lunch');
            if (config.slots.snacks) activeSlots.push('snacks');
            if (config.slots.dinner) activeSlots.push('dinner');

            const dietPref = (config.diet || 'Veg').toLowerCase().replace('-', '_');

            const payload = {
                customer: {
                    first_name: (document.getElementById('contact-name').value || 'John').split(' ')[0],
                    last_name: (document.getElementById('contact-name').value || 'User').split(' ').slice(1).join(' ') || 'User',
                    email: 'user@example.com',
                    phone: document.getElementById('contact-phone').value || '9876543210',
                },
                address: {
                    street: config.addressMode === 'same' ? (document.getElementById('delivery-address-single')?.value || '102 Green Valley') : (document.getElementById('delivery-address-morning')?.value || '102 Green Valley'),
                    landmark: config.addressMode === 'same' ? (document.getElementById('delivery-landmark-single')?.value || 'Near Hospital') : (document.getElementById('delivery-landmark-morning')?.value || 'Near Hospital'),
                    city: 'Noida',
                    state: 'Uttar Pradesh',
                    pincode: config.pincode || '201301',
                    address_type: 'home',
                },
                diet: {
                    diet_preference: dietPref,
                    allergies: [],
                    dislikes: '',
                },
                subscription: {
                    start_date: document.getElementById('start-date')?.value || '2024-05-15',
                    duration_days: config.duration,
                    active_slots: activeSlots,
                    price_paise: Math.round(parseFloat(document.getElementById('final-total').innerText || '0') * 100),
                    auto_renew: true,
                }
            };

            // BYPASS FOR DEVELOPMENT: Simulate successful creation
            console.log('Development Bypass: Subscription Payload', payload);
            
            setTimeout(() => {
                alert('Subscription Created Successfully! ID: CAL-DEMO-' + (Math.floor(Math.random()*9000)+1000));
                window.location.href = '/dashboard';
                
                nextBtn.disabled = false;
                nextBtn.innerText = originalText;
            }, 1500);
        }

        function verifyOTP() {
            const otp = document.getElementById('contact-otp').value;
            if (otp.length === 4) {
                alert('Phone Number Verified Successfully!');
                document.getElementById('otp-container').innerHTML = '<div class="h-[52px] flex items-center gap-2 text-green-600 font-bold text-xs"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg> Verified</div>';
            } else {
                alert('Please enter a 4-digit OTP.');
            }
        }

        function goToStep(step) {
            if (step <= currentStep) {
                currentStep = step;
                updateStepUI();
            } else {
                for (let i = currentStep; i < step; i++) {
                    if (!validateStep(i)) return;
                }
                currentStep = step;
                updateStepUI();
            }
        }

        // Initialize Slider & Forms State on Load
        setTimeout(async () => {
            generateCalendar();
            calculatePricing();
            updateStepUI();
            if (window.lucide) {
                window.lucide.createIcons();
            }

            // Fetch live pricing
            try {
                const response = await fetch('/api/pricing');
                const result = await response.json();
                if (response.ok && result.data) {
                    config.matrix = result.data;
                    
                    // Update initial pricing fallback for labels
                    Object.keys(config.matrix).forEach(duration => {
                        const durationPricing = config.matrix[duration];
                        const firstKey = Object.keys(durationPricing)[0];
                        if (firstKey) {
                            config.pricing[duration] = durationPricing[firstKey].price_per_meal;
                        }
                    });

                    updateDurationLabels();
                    calculatePricing();
                }
            } catch (error) {
                console.error('Failed to fetch pricing:', error);
            }
        }, 100);

        // Auto verify pincode if passed via URL parameters (from advertisement campaigns)
        const urlParams = new URLSearchParams(window.location.search);
        const prefilledPincode = urlParams.get('pincode');
        if (prefilledPincode && /^[1-9][0-9]{5}$/.test(prefilledPincode)) {
            const pinInput = document.getElementById('check-pincode');
            if (pinInput) {
                pinInput.value = prefilledPincode;
                setTimeout(() => {
                    checkServiceability();
                }, 400);
            }
        }
    </script>
@endpush
