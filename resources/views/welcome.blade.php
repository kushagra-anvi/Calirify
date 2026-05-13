@extends('layouts.app')

@section('title', 'Calirify | Clean Calorie-Counted Meals Delivered Daily')

@section('content')
    <section
        class="relative min-h-[90vh] flex items-center pt-24 pb-12 lg:pt-32 lg:pb-16 overflow-hidden bg-calirify-cream/30 selection:bg-calirify-orange selection:text-white">

        <div
            class="absolute inset-0 opacity-[0.02] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
        </div>

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 items-center gap-12 lg:gap-20 relative z-10">

            <div class="reveal order-1 lg:order-1 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-4 py-1.5 bg-calirify-orange text-white rounded-full text-[10px] font-bold uppercase tracking-[0.2em] mb-8">
                    <span class="w-1 h-1 bg-white rounded-full animate-pulse"></span>
                    Now Serving Nationwide
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-bold leading-[1.1] mb-8 text-calirify-dark">
                    Your daily <span class="italic text-calirify-orange">meal subscription</span>, <br>made better.
                </h1>
                <p class="text-lg lg:text-xl text-gray-600 mb-10 max-w-lg mx-auto lg:mx-0 leading-relaxed font-medium">
                    Delicious, home-style meals prepared in modern kitchens and delivered fresh to your
                    doorstep.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="{{ url('/order') }}"
                        class="bg-calirify-orange text-white py-4 px-10 rounded-full font-bold text-sm uppercase tracking-widest hover:scale-105 transition-all duration-300 shadow-xl shadow-calirify-orange/20">Start
                        Meal Plan</a>
                    <a href="#weekly-menu"
                        class="border border-calirify-orange/20 text-calirify-orange py-4 px-10 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-calirify-orange hover:text-white transition-all duration-300">Weekly
                        Meal Plans</a>
                </div>

                <div
                    class="mt-12 lg:mt-16 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                    <div class="flex -space-x-4">
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-gray-200 overflow-hidden shadow-sm">
                            <img src="{{ asset('assets/images/avatars/avatar_1.png') }}" alt="Indian Subscriber Portrait Female"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-gray-300 overflow-hidden shadow-sm">
                            <img src="{{ asset('assets/images/avatars/avatar_2.png') }}" alt="Indian Subscriber Portrait Male"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-gray-400 overflow-hidden shadow-sm">
                            <img src="{{ asset('assets/images/avatars/avatar_3.png') }}" alt="Indian Subscriber Portrait Female Two"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">
                        Joined by <span class="text-calirify-orange">15k+</span> food lovers
                    </p>
                </div>
            </div>


            <div class="relative reveal order-2 lg:order-2 px-4 lg:px-0">
                <div class="relative rounded-[3rem] overflow-hidden shadow-3xl shadow-calirify-orange/30 group">
                    <img src="{{ asset('assets/images/calirify_images/calirify_scraped_5.jpg') }}" alt="Gourmet Meal Plan"
                        class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-calirify-orange/20 to-transparent pointer-events-none">
                    </div>
                </div>


                <div
                    class="absolute -bottom-4 -right-2 lg:-bottom-6 lg:-right-6 bg-white p-5 lg:p-6 rounded-[1.5rem] lg:rounded-[2rem] shadow-2xl w-[150px] sm:w-[170px] lg:w-[200px] reveal-slow z-10 text-left border border-calirify-orange/5">
                    <p
                        class="text-[8px] lg:text-[9px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-1.5 lg:mb-2">
                        The Calirify Way</p>
                    <p class="text-base lg:text-xl font-serif font-bold text-calirify-dark leading-tight">Fresh &
                        <br>Flexible.
                    </p>
                    <div class="mt-3 lg:mt-4 pt-3 lg:pt-4 border-t border-black/5 flex flex-col gap-1.5 lg:gap-2">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-3.5 h-3.5 rounded-full bg-calirify-orange/10 flex items-center justify-center shrink-0">
                                <svg class="w-2 h-2 text-calirify-orange" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span
                                class="text-[8px] lg:text-[9px] font-bold text-gray-600 uppercase tracking-widest">Pause
                                Anytime</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-3.5 h-3.5 rounded-full bg-calirify-orange/10 flex items-center justify-center shrink-0">
                                <svg class="w-2 h-2 text-calirify-orange" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span
                                class="text-[8px] lg:text-[9px] font-bold text-gray-600 uppercase tracking-widest">Free
                                Delivery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Calorie & Macro Target Matcher Section -->
    <section id="calorie-clarity" class="py-24 bg-calirify-cream/15 scroll-mt-20 border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Left Column: Header and Slider Control -->
                <div class="lg:col-span-5 text-left reveal">
                    <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[10px] mb-4">Precision Goal
                        Planner</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight mb-6">Clarify
                        Your <br><span class="text-calirify-orange italic">Macro Matches</span></h2>
                    <p class="text-gray-500 mb-8 leading-relaxed font-medium">Use our interactive target engine to
                        adjust your daily goals. Watch your macro-nutrient distribution clarify in real-time, matching
                        you with the perfect plan.</p>

                    <!-- Goal Buttons -->
                    <div class="mb-8">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3.5">Choose
                            Your Focus Goal</label>
                        <div
                            class="grid grid-cols-3 gap-3 bg-white p-1.5 rounded-2xl border border-calirify-orange/10 shadow-sm">
                            <button id="goal-weightloss"
                                class="goal-btn py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all duration-300 bg-calirify-orange text-white shadow-md shadow-calirify-orange/15"
                                onclick="selectGoal('weightloss')">Weight Loss</button>
                            <button id="goal-balanced"
                                class="goal-btn py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all duration-300 text-gray-500 hover:text-calirify-dark"
                                onclick="selectGoal('balanced')">Stay Fit</button>
                            <button id="goal-muscle"
                                class="goal-btn py-3 rounded-xl text-[10px] font-bold uppercase tracking-widest transition-all duration-300 text-gray-500 hover:text-calirify-dark"
                                onclick="selectGoal('muscle')">Gain Muscle</button>
                        </div>
                    </div>

                    <!-- Calorie Range Slider -->
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Daily Calorie
                                Target</label>
                            <span class="text-2xl font-serif font-bold text-calirify-orange" id="slider-val-label">1,800
                                kcal</span>
                        </div>
                        <div class="relative bg-white p-6 rounded-2xl border border-calirify-orange/10 shadow-sm">
                            <input type="range" id="calorie-slider" min="1200" max="3000" step="50" value="1800"
                                style="touch-action: pan-y;"
                                class="w-full h-2 bg-gray-100 rounded-lg appearance-none cursor-pointer accent-calirify-orange"
                                oninput="updateCalculations()">
                            <div
                                class="flex justify-between text-[9px] font-bold text-gray-400 mt-3.5 tracking-wider uppercase">
                                <span>1200 kcal</span>
                                <span>2100 kcal</span>
                                <span>3000 kcal</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Output Display -->
                <div class="lg:col-span-7 reveal" style="transition-delay: 150ms;">
                    <div
                        class="bg-white rounded-[3rem] p-8 lg:p-12 border border-calirify-orange/5 shadow-2xl relative overflow-hidden flex flex-col md:flex-row gap-8 lg:gap-12 items-center">

                        <!-- Macro Bars Representation -->
                        <div class="w-full md:w-3/5 space-y-6 text-left">
                            <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Macro
                                Distribution</h3>

                            <!-- Protein -->
                            <div>
                                <div class="flex justify-between items-center text-xs font-bold mb-2">
                                    <span class="text-calirify-dark flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-calirify-orange"></span> Protein
                                    </span>
                                    <span class="text-gray-500" id="protein-g-label">158g</span>
                                </div>
                                <div
                                    class="w-full h-3.5 bg-gray-50 rounded-full overflow-hidden border border-gray-100/30">
                                    <div id="protein-bar"
                                        class="h-full bg-calirify-orange rounded-full transition-all duration-500"
                                        style="width: 35%;"></div>
                                </div>
                            </div>

                            <!-- Carbs -->
                            <div>
                                <div class="flex justify-between items-center text-xs font-bold mb-2">
                                    <span class="text-calirify-dark flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-amber-500"></span> Carbohydrates
                                    </span>
                                    <span class="text-gray-500" id="carbs-g-label">113g</span>
                                </div>
                                <div
                                    class="w-full h-3.5 bg-gray-50 rounded-full overflow-hidden border border-gray-100/30">
                                    <div id="carbs-bar"
                                        class="h-full bg-amber-500 rounded-full transition-all duration-500"
                                        style="width: 25%;"></div>
                                </div>
                            </div>

                            <!-- Fats -->
                            <div>
                                <div class="flex justify-between items-center text-xs font-bold mb-2">
                                    <span class="text-calirify-dark flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Healthy Fats
                                    </span>
                                    <span class="text-gray-500" id="fats-g-label">80g</span>
                                </div>
                                <div
                                    class="w-full h-3.5 bg-gray-50 rounded-full overflow-hidden border border-gray-100/30">
                                    <div id="fats-bar"
                                        class="h-full bg-emerald-500 rounded-full transition-all duration-500"
                                        style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Recommended Plan Card Display -->
                        <div
                            class="w-full md:w-2/5 p-6 rounded-[2rem] bg-calirify-cream/40 border border-calirify-orange/10 flex flex-col justify-between min-h-[280px]">
                            <div class="text-left">
                                <p class="text-[8px] font-bold text-calirify-orange uppercase tracking-[0.2em] mb-1.5">
                                    Target Match</p>
                                <h4 class="text-2xl font-serif font-bold text-calirify-dark mb-3" id="match-plan-title">
                                    Keto Diet Plan</h4>
                                <p class="text-xs text-gray-500 leading-relaxed" id="match-plan-desc">Low-carb, high-fat
                                    design to jumpstart ketosis, perfect for rapid energy shift and toning.</p>
                            </div>
                            <div class="mt-6">
                                <a href="{{ url('/order') }}"
                                    class="block w-full py-3.5 bg-calirify-orange text-white font-bold text-[10px] uppercase tracking-widest text-center rounded-xl hover:scale-[1.02] active:scale-[0.98] shadow-md shadow-calirify-orange/15 transition-all duration-300">Choose
                                    This Plan</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="explore-plans" class="py-24 bg-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-left mb-16 reveal">
                <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[11px] mb-4">Tailored Nutrition
                </p>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">Explore Our
                    <br><span class="text-calirify-orange italic">Gourmet Plans</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="group bg-calirify-cream/40 rounded-[2.5rem] border border-calirify-orange/5 p-8 transition-all duration-500 hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 reveal flex flex-col justify-between">
                    <div>
                        <div class="relative overflow-hidden rounded-3xl mb-6 shadow-md aspect-square">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_5.jpg') }}"
                                alt="Healthy Daily Meal Plan"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-calirify-dark mb-2">Healthy Daily Meal Plan</h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">Balanced macro-nutrients for active
                            individuals looking to maintain energy and focus.</p>


                        <div
                            class="grid grid-cols-2 gap-3 mb-6 bg-white p-5 rounded-2xl border border-calirify-orange/5">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    P</div>
                                <span class="text-xs font-bold text-gray-600">25-35g Protein</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    F</div>
                                <span class="text-xs font-bold text-gray-600">&lt;30g Fats</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    C</div>
                                <span class="text-xs font-bold text-gray-600">&lt;50g Carbs</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    K</div>
                                <span class="text-xs font-bold text-gray-600">500-600 Kcal</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Starting from</span>
                            <span class="text-2xl font-serif font-bold text-calirify-orange">Rs. 250.00 <span
                                    class="text-xs text-gray-400 font-sans font-normal">/ day</span></span>
                        </div>
                        <a href="{{ url('/order') }}"
                            class="block w-full text-center bg-calirify-orange text-white py-3.5 rounded-full font-bold text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-calirify-orange/20 transition-all duration-300">Choose
                            Plan</a>
                    </div>
                </div>


                <div class="group bg-calirify-cream/40 rounded-[2.5rem] border border-calirify-orange/5 p-8 transition-all duration-500 hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 reveal flex flex-col justify-between"
                    style="transition-delay: 100ms;">
                    <div>
                        <div class="relative overflow-hidden rounded-3xl mb-6 shadow-md aspect-square">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_9.jpg') }}" alt="Keto Plan"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-calirify-dark mb-2">Keto Plan</h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">High fat, low carb plan designed to shift
                            your metabolism into ketosis for rapid fat burning.</p>


                        <div
                            class="grid grid-cols-2 gap-3 mb-6 bg-white p-5 rounded-2xl border border-calirify-orange/5">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    P</div>
                                <span class="text-xs font-bold text-gray-600">30-40g Protein</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    F</div>
                                <span class="text-xs font-bold text-gray-600">45-55g Fats</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    C</div>
                                <span class="text-xs font-bold text-gray-600">&lt;15g Carbs</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    K</div>
                                <span class="text-xs font-bold text-gray-600">600-700 Kcal</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Starting from</span>
                            <span class="text-2xl font-serif font-bold text-calirify-orange">Rs. 1,000.00 <span
                                    class="text-xs text-gray-400 font-sans font-normal">/ day</span></span>
                        </div>
                        <a href="{{ url('/order') }}"
                            class="block w-full text-center bg-calirify-orange text-white py-3.5 rounded-full font-bold text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-calirify-orange/20 transition-all duration-300">Choose
                            Plan</a>
                    </div>
                </div>


                <div class="group bg-calirify-cream/40 rounded-[2.5rem] border border-calirify-orange/5 p-8 transition-all duration-500 hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 reveal flex flex-col justify-between"
                    style="transition-delay: 200ms;">
                    <div>
                        <div class="relative overflow-hidden rounded-3xl mb-6 shadow-md aspect-square">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_26.jpg') }}"
                                alt="14 Days Transformation Plan"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-calirify-dark mb-2">14 Days Transformation Plan
                        </h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">Structured diet regimen to jumpstart fat
                            loss, reduce bloating, and tone your muscles.</p>


                        <div
                            class="grid grid-cols-2 gap-3 mb-6 bg-white p-5 rounded-2xl border border-calirify-orange/5">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    P</div>
                                <span class="text-xs font-bold text-gray-600">35-45g Protein</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    F</div>
                                <span class="text-xs font-bold text-gray-600">&lt;25g Fats</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    C</div>
                                <span class="text-xs font-bold text-gray-600">&lt;40g Carbs</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-5 h-5 rounded-full bg-calirify-orange/10 flex items-center justify-center text-[10px] text-calirify-orange font-bold">
                                    K</div>
                                <span class="text-xs font-bold text-gray-600">450-550 Kcal</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Starting from</span>
                            <span class="text-2xl font-serif font-bold text-calirify-orange">Rs. 500.00 <span
                                    class="text-xs text-gray-400 font-sans font-normal">/ day</span></span>
                        </div>
                        <a href="{{ url('/order') }}"
                            class="block w-full text-center bg-calirify-orange text-white py-3.5 rounded-full font-bold text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-calirify-orange/20 transition-all duration-300">Choose
                            Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="why-calirify" class="py-24 bg-calirify-cream/30 border-y border-black/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-left mb-16 reveal">
                <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[11px] mb-4">Precision Wellness
                </p>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">More than just
                    <br>a <span class="text-calirify-orange italic">meal prep service.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Main Feature Card: Precision Macro Kitchen -->
                <div
                    class="md:col-span-2 group relative overflow-hidden rounded-[2.5rem] shadow-md transition-all duration-500 hover:shadow-2xl hover:shadow-calirify-orange/20 hover:-translate-y-1 reveal min-h-[340px] flex items-end isolate transform-gpu">
                    <div class="absolute inset-0 z-0 overflow-hidden rounded-[2.5rem]">
                        <img src="{{ asset('assets/images/process-clean copy.png') }}" alt="Modern Kitchen"
                            class="w-full h-full object-cover object-bottom scale-[1.02] origin-bottom transition-transform duration-700 group-hover:scale-110 will-change-transform">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#1a0a10] via-calirify-orange/55 to-transparent opacity-90">
                        </div>
                    </div>
                    <div class="relative z-10 p-10 lg:p-12 w-full flex flex-col lg:flex-row gap-8 lg:items-center">
                        <div
                            class="w-16 h-16 text-white shrink-0 bg-white/10 backdrop-blur-sm p-4 rounded-2xl border border-white/20">
                            <svg viewBox="0 0 79.32 70.67" class="w-full h-full fill-current">
                                <path
                                    d="M4.05,30.42l64.62-5.12c2.05-.16,3.56-1.79,3.38-3.64s-1.99-3.21-4.04-3.05l-1.4.11c-3.46-7.95-12.28-12.91-21.82-12.16l-7.26.58c.87-.85,1.36-2.01,1.24-3.25-.23-2.34-2.53-4.08-5.14-3.88-2.6.21-4.54,2.28-4.31,4.62.12,1.24.83,2.3,1.85,3l-7.26.58c-9.54.76-17.26,7.03-19.13,15.4l-1.4.11c-2.05.16-3.56,1.79-3.38,3.64s1.99,3.21,4.04,3.05ZM33.84,2.01c1.38-.11,2.61.81,2.73,2.06s-.9,2.35-2.29,2.46c-1.38.11-2.61-.81-2.73-2.06s.9-2.35,2.29-2.46ZM3.64,26.19l3.52-.28.16-.96c1.29-7.72,8.21-13.59,16.85-14.28l20.87-1.65c8.63-.68,16.59,4.01,19.36,11.41l.34.92,3.52-.28c.54-.04,1.02.32,1.07.81s-.36.92-.9.97L3.81,27.96c-.54.04-1.02-.32-1.07-.81s.36-.92.9-.97Z">
                                </path>
                                <path
                                    d="M70.39,44.16h-.73v-12.58H5.81v12.58h-.73c-1.55,0-2.81,1.13-2.81,2.53v1.97c0,1.39,1.26,2.53,2.81,2.53h.73v13.15c0,3.5,3.16,6.34,7.04,6.34h49.77c3.88,0,7.04-2.84,7.04-6.34v-13.15h.73c1.55,0,2.81-1.13,2.81-2.53v-1.97c0-1.39-1.26-2.53-2.81-2.53ZM70.39,48.72h-3.46v15.62c0,2.14-1.93,3.88-4.31,3.88H12.85c-2.38,0-4.31-1.74-4.31-3.88v-15.62l-3.54-.07.07-2.03h3.46v-12.58h58.38v12.58h3.46l.07.06-.07,2.03Z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-serif font-bold text-white mb-4 leading-tight">
                                Precision Macro Kitchen.</h3>
                            <p class="text-base text-white/80 leading-relaxed max-w-lg">Every meal is prepared in our
                                modern, FSSAI-approved facilities. We strictly weigh every raw ingredient down to the
                                gram, ensuring zero guesswork for your daily health tracking.</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Raw Ingredient Clarity -->
                <div
                    class="group relative overflow-hidden bg-calirify-orange rounded-[2.5rem] p-10 shadow-sm transition-all duration-500 hover:shadow-2xl hover:shadow-calirify-orange/20 hover:-translate-y-1 reveal">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -mr-10 -mt-10 transition-transform duration-500 group-hover:scale-150">
                    </div>
                    <div
                        class="w-12 h-12 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center mb-8 relative z-10">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-white mb-4 relative z-10">Ingredient Clarity</h4>
                    <p class="text-sm text-white/80 leading-relaxed relative z-10">Nutrient-dense greens and premium
                        proteins sourced fresh. Every single ingredient's macro profile is audited before preparation.
                    </p>
                </div>

                <!-- Daily Delivery -->
                <div
                    class="bg-white rounded-[2.5rem] p-10 border border-calirify-orange/10 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-1 hover:border-calirify-orange/30 reveal">
                    <div
                        class="w-12 h-12 text-calirify-orange mb-8 bg-calirify-orange/5 p-3 rounded-2xl transition-colors duration-300 hover:bg-calirify-orange hover:text-white">
                        <svg viewBox="0 0 96.75 70.64" class="w-full h-full fill-current">
                            <path
                                d="M7.25,49.23v-24.14l1.61.2c.52.07,1.07.1,1.61.1,7.11,0,12.89-5.78,12.89-12.89,0-.78-.07-1.55-.2-2.3l-.3-1.67,30.71-.38v40.7l-46.32.37ZM10.12,28.26v18.09l40.59-.33V11.06l-24.52.32c.03.38.04.76.04,1.14,0,8.68-7.07,15.75-15.75,15.75-.12,0-.24,0-.36,0Z">
                            </path>
                            <path
                                d="M36.04,66.4l-.07-1.66c-.14-3.35-2.88-5.98-6.24-5.98s-6.1,2.63-6.24,5.98l-.07,1.64h-9.3c-3.52,0-6.38-2.95-6.38-6.59v-5.91c0-1.6,1.3-2.91,2.91-2.91l45.28-.36v-24.56c0-3.63,2.86-6.59,6.39-6.59h16.78c2.39,0,4.56,1.36,5.67,3.55l11.27,22.34c.47.94.72,1.99.72,3.04v11.03c0,3.63-2.86,6.59-6.39,6.59h-7.92l-.07-1.64c-.14-3.35-2.88-5.98-6.24-5.98s-6.1,2.63-6.24,5.98l-.07,1.62-33.79.4Z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-calirify-dark mb-4">On-Time, Every Time</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">Reliable, fast delivery directly to your doorstep,
                        ensuring your fresh, calorie-controlled meal arrives exactly when you need it.</p>
                </div>

                <!-- Flexibility -->
                <div
                    class="bg-white rounded-[2.5rem] p-10 border border-calirify-orange/10 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-1 hover:border-calirify-orange/30 reveal">
                    <div
                        class="w-12 h-12 text-calirify-orange mb-8 bg-calirify-orange/5 p-3 rounded-2xl transition-colors duration-300 hover:bg-calirify-orange hover:text-white">
                        <svg viewBox="0 0 73.45 71.11" class="w-full h-full fill-current">
                            <path
                                d="M73.45,45.39l-1.86-8.79-5,7.47,2.44-.52c-3.63,14.74-16.94,25.27-32.28,25.27S6.99,57.4,4.06,41.69l-2.26.42c3.13,16.8,17.83,28.99,34.95,28.99s30.73-11.33,34.56-27.16l2.15,1.45Z">
                            </path>
                            <path
                                d="M6.86,27.05l-2.44.52C8.05,12.83,21.36,2.3,36.7,2.3s29.76,11.4,32.69,27.11l2.26-.42C68.52,12.19,53.82,0,36.7,0S5.97,11.33,2.15,27.16l-2.15-1.45,1.86,8.79,5-7.47Z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-calirify-dark mb-4">Total Control</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">Pause, cancel, or reschedule your meals with zero
                        hassle via our seamless, intuitive mobile-first dashboard.</p>
                </div>

                <!-- Variety -->
                <div
                    class="bg-white rounded-[2.5rem] p-10 border border-calirify-orange/10 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-1 hover:border-calirify-orange/30 reveal">
                    <div
                        class="w-12 h-12 text-calirify-orange mb-8 bg-calirify-orange/5 p-3 rounded-2xl transition-colors duration-300 hover:bg-calirify-orange hover:text-white">
                        <svg viewBox="0 0 95.13 60.44" class="w-full h-full fill-current">
                            <path
                                d="M92.65,54.85h-.67c-.46-11.89-4.63-23.07-11.67-31.79.99-1.73,1.59-3.78,1.59-5.99,0-6.19-4.46-11.25-9.91-11.25-3.22,0-6.05,1.81-7.85,4.54-4.28-1.97-8.81-3.21-13.48-3.58.46-.72.71-1.57.71-2.49,0-2.37-1.7-4.3-3.82-4.3s-3.79,1.93-3.79,4.3c0,.92.25,1.77.67,2.49-10.54.84-20.48,5.91-28.05,14.35C8.35,30.14,3.64,42.07,3.11,54.85h-.67c-1.34,0-2.44,1.25-2.44,2.81s1.1,2.77,2.44,2.77h90.21c1.38,0,2.48-1.25,2.48-2.77s-1.1-2.81-2.48-2.81ZM5.91,54.69C7.04,29.9,25.68,9.8,47.55,9.8c5.34,0,10.47,1.21,15.21,3.38-.39,1.21-.64,2.53-.64,3.9,0,6.15,4.42,11.21,9.87,11.21,2.44,0,4.67-1.04,6.37-2.73,6.3,7.84,10.33,18,10.86,29.13H5.91Z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-calirify-dark mb-4">Macro Variety</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">No more boring lunches. Enjoy a rotating premium
                        menu curated by expert culinary nutritionists to hit your daily macro ratios while keeping your
                        palate excited.</p>
                </div>

            </div>
        </div>
    </section>


    <section id="weekly-menu" class="py-20 bg-white border-t border-black/5 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 md:mb-16 reveal">
                <div class="max-w-xl">
                    <p class="text-calirify-orange font-bold uppercase tracking-[0.2em] text-[10px] mb-4">Weekly Menu
                        Rotation</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">Fresh meal
                        subscriptions, <br>delivered to <span class="text-calirify-orange italic">your schedule.</span>
                    </h2>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4 lg:gap-8 mt-8 lg:mt-0 w-full sm:w-auto">

                    <div
                        class="flex p-1.5 bg-calirify-cream/20 rounded-full border border-calirify-orange/10 w-full sm:w-auto">
                        <button id="veg-toggle"
                            class="flex-1 sm:flex-none px-8 py-2.5 rounded-full text-[10px] uppercase tracking-widest font-bold transition-all duration-300 bg-calirify-orange text-white shadow-lg">Veg
                            Only</button>
                        <button id="nonveg-toggle"
                            class="flex-1 sm:flex-none px-8 py-2.5 rounded-full text-[10px] uppercase tracking-widest font-bold transition-all duration-300 text-gray-400">Non-Veg</button>
                    </div>


                    <div class="hidden lg:flex items-center gap-3">
                        <button id="scroll-left"
                            class="w-11 h-11 rounded-full border border-calirify-orange/20 flex items-center justify-center text-calirify-orange hover:bg-calirify-orange hover:text-white transition-all duration-300 shadow-sm hover:shadow-md"
                            aria-label="Scroll Left">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="scroll-right"
                            class="w-11 h-11 rounded-full border border-calirify-orange/20 flex items-center justify-center text-calirify-orange hover:bg-calirify-orange hover:text-white transition-all duration-300 shadow-sm hover:shadow-md"
                            aria-label="Scroll Right">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                  </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 lg:gap-6 pt-4 pb-8 -mx-6 px-6 lg:mx-0 lg:px-0 hide-scrollbar cursor-grab active:cursor-grabbing"
                id="menu-container">
                <!-- Monday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="1">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Monday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_4.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Bhindi Do Piaza & Dal" data-nonveg="Murg Do Piaza & Dal">Bhindi Do Piaza & Dal
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="420 kcal" data-nonveg="540 kcal">420 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="14g Protein" data-nonveg="38g Protein">14g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="58g Carbs" data-nonveg="44g Carbs">58g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_16.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_16.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_6.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Pav Bhaji Special" data-nonveg="Keema Pav Classic">Pav Bhaji Special</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="490 kcal" data-nonveg="580 kcal">490 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="12g Protein" data-nonveg="35g Protein">12g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="68g Carbs" data-nonveg="52g Carbs">68g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tuesday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="2">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Tuesday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_19.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_19.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_20.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Mughlai Gobhi & Kabuli" data-nonveg="Chicken Mughlai & Kabuli">Mughlai Gobhi &
                                Kabuli</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="410 kcal" data-nonveg="560 kcal">410 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="11g Protein" data-nonveg="42g Protein">11g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="56g Carbs" data-nonveg="38g Carbs">56g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_21.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_21.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_22.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Subz Khurchan & Roti" data-nonveg="Murg Khurchan & Roti">Subz Khurchan & Roti
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="390 kcal" data-nonveg="510 kcal">390 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="10g Protein" data-nonveg="36g Protein">10g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="52g Carbs" data-nonveg="34g Carbs">52g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wednesday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="3">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Wednesday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_26.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_26.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_27.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Chilli Mushroom Feast" data-nonveg="Chilli Chicken Feast">Chilli Mushroom
                                Feast</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="380 kcal" data-nonveg="520 kcal">380 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="12g Protein" data-nonveg="39g Protein">12g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="48g Carbs" data-nonveg="36g Carbs">48g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_28.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_28.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_29.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Baigan Bharta Smoked" data-nonveg="Murgi Bharta Smoked">Baigan Bharta Smoked
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="340 kcal" data-nonveg="480 kcal">340 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="8g Protein" data-nonveg="34g Protein">8g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="42g Carbs" data-nonveg="30g Carbs">42g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thursday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="4">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Thursday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_10.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_10.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_11.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Paneer Mutter & Dal" data-nonveg="Murg Mutter & Dal">Paneer Mutter & Dal</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="460 kcal" data-nonveg="520 kcal">460 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="18g Protein" data-nonveg="38g Protein">18g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="44g Carbs" data-nonveg="34g Carbs">44g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_7.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_7.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_8.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Tex Mex Sweet Potato" data-nonveg="Tex Mex Chicken Bowl">Tex Mex Sweet Potato
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="420 kcal" data-nonveg="510 kcal">420 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="10g Protein" data-nonveg="36g Protein">10g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="65g Carbs" data-nonveg="48g Carbs">65g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Friday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="5">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Friday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_15.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_15.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_9.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Thai Green Curry Veg" data-nonveg="Thai Green Curry Chicken">Thai Green Curry
                                Veg</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="440 kcal" data-nonveg="550 kcal">440 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="12g Protein" data-nonveg="34g Protein">12g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="54g Carbs" data-nonveg="42g Carbs">54g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_36.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_36.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_37.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Methi Paneer Classic" data-nonveg="Methi Chicken Classic">Methi Paneer Classic
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="480 kcal" data-nonveg="510 kcal">480 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="19g Protein" data-nonveg="38g Protein">19g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="40g Carbs" data-nonveg="32g Carbs">40g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Saturday -->
                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-cream/10 border border-calirify-orange/5 transition-all duration-500 hover:bg-white hover:shadow-xl hover:border-calirify-orange/20 reveal"
                    data-day="6">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Saturday</p>
                    <div class="space-y-6">
                        <div>
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Lunch</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_17.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_17.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_18.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Veg Biryani & Salan" data-nonveg="Chicken Biryani & Salan">Veg Biryani & Salan
                            </p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="520 kcal" data-nonveg="640 kcal">520 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="14g Protein" data-nonveg="41g Protein">14g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="82g Carbs" data-nonveg="74g Carbs">82g Carbs</span>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-calirify-orange/5">
                            <p
                                class="text-[9px] font-bold text-calirify-orange uppercase tracking-widest mb-2 opacity-60">
                                Dinner</p>
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}"
                                class="meal-image w-full h-32 object-cover rounded-xl mb-3 transition-opacity duration-300"
                                data-veg="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}"
                                data-nonveg="{{ asset('assets/images/calirify_images/calirify_scraped_4.jpg') }}" alt="Dish">
                            <p class="font-serif font-bold text-sm text-gray-800 meal-text leading-snug"
                                data-veg="Paneer Bhurji Mix" data-nonveg="Egg Bhurji Mix">Paneer Bhurji Mix</p>
                            <!-- Live Nutrition Stats -->
                            <div class="meal-macros mt-3.5 flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 rounded-md bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold transition-all duration-300"
                                    data-veg="450 kcal" data-nonveg="430 kcal">450 kcal</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="19g Protein" data-nonveg="28g Protein">19g Protein</span>
                                <span
                                    class="px-2 py-0.5 rounded-md bg-gray-50 text-gray-500 text-[9px] font-bold transition-all duration-300"
                                    data-veg="36g Carbs" data-nonveg="24g Carbs">36g Carbs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-day shrink-0 w-[85vw] sm:w-[45vw] lg:w-[calc(33.333%-1rem)] snap-center p-6 rounded-3xl bg-calirify-orange/5 border border-calirify-orange/10 reveal flex flex-col"
                    data-day="0">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-6">Sunday</p>
                    <div class="flex-1 flex flex-col items-center justify-center pb-8">
                        <div class="w-16 h-16 mb-6 bg-calirify-orange/10 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-calirify-orange" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <p class="font-serif font-bold text-2xl text-calirify-orange italic mb-3">Holiday</p>
                        <p class="text-xs text-gray-500 uppercase tracking-widest text-center">Rest & Recharge</p>
                    </div>
                </div>
            </div>


            <div id="menu-dots" class="flex lg:hidden items-center justify-center gap-2 mt-6">
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange transition-all duration-300"></span>
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
                <span class="menu-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
            </div>
        </div>
    </section>


    <section class="py-16 bg-calirify-cream/30 border-y border-black/5 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div class="reveal">
                <p class="text-4xl md:text-5xl font-serif font-bold text-calirify-orange mb-3">Zero</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">Preservatives</p>
            </div>
            <div class="reveal">
                <p class="text-4xl md:text-5xl font-serif font-bold text-calirify-orange mb-3">100%</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">Fresh & Natural</p>
            </div>
            <div class="reveal">
                <p class="text-4xl md:text-5xl font-serif font-bold text-calirify-orange mb-3">Daily</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">Tasty Rotation</p>
            </div>
            <div class="reveal">
                <p class="text-4xl md:text-5xl font-serif font-bold text-calirify-orange mb-3">1M+</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">Meal Plans Delivered</p>
            </div>
        </div>
    </section>


    <section id="how-it-works" class="py-24 bg-white scroll-mt-20 relative overflow-hidden border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-16 reveal">
                <div class="max-w-xl text-left">
                    <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[10px] mb-4">The Process
                    </p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">How Calirify
                        <br><span class="text-calirify-orange italic">Works</span></h2>
                </div>
                <p class="text-gray-500 max-w-md mt-4 md:mt-0 font-medium leading-relaxed text-left md:text-right">A
                    simple journey from picking a customized plan to clean calorie-counted meals at your doorstep.</p>
            </div>


            <div class="relative">
                <!-- Connecting Ribbon (SVG Process Path) -->
                <div
                    class="absolute top-1/4 left-0 w-full h-32 pointer-events-none hidden lg:block -z-10 animate-pulse duration-[4000ms]">
                    <svg width="100%" height="100%" viewBox="0 0 1200 100" preserveAspectRatio="none" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M150 50C300 50 300 80 450 80C600 80 600 20 750 20C900 20 900 50 1050 50"
                            stroke="#FF7D45" stroke-width="12" stroke-linecap="round" class="opacity-[0.12]" />
                        <path d="M150 50C300 50 300 80 450 80C600 80 600 20 750 20C900 20 900 50 1050 50"
                            stroke="#FF7D45" stroke-width="2" stroke-dasharray="10 15" stroke-linecap="round"
                            class="opacity-20" />
                    </svg>
                </div>

                <div id="process-container"
                    class="flex overflow-x-auto lg:grid lg:grid-cols-4 gap-6 lg:gap-8 pb-8 lg:pb-0 snap-x snap-mandatory hide-scrollbar -mx-6 px-6 lg:mx-0 lg:px-0 cursor-grab active:cursor-grabbing items-start">


                    <div class="group relative reveal shrink-0 w-[75vw] sm:w-[45vw] lg:w-auto snap-center">
                        <div
                            class="relative aspect-square mb-6 rounded-[2rem] overflow-hidden shadow-lg border border-black/5">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_17.jpg') }}" alt="Select Your Plan"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-orange/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3
                            class="text-xl font-sans font-bold leading-snug text-calirify-dark group-hover:text-calirify-orange transition-colors text-left">
                            Select Your Plan
                        </h3>
                    </div>


                    <div class="group relative reveal shrink-0 w-[75vw] sm:w-[45vw] lg:w-auto snap-center"
                        style="transition-delay: 100ms;">
                        <div
                            class="relative aspect-square mb-6 rounded-[2rem] overflow-hidden shadow-lg border border-black/5">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_14.jpg') }}"
                                alt="Clean Calorie Counted Food Delivered Daily"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-orange/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3
                            class="text-xl font-sans font-bold leading-snug text-calirify-dark group-hover:text-calirify-orange transition-colors text-left">
                            Clean Calorie Counted Food Delivered Daily
                        </h3>
                    </div>


                    <div class="group relative reveal shrink-0 w-[75vw] sm:w-[45vw] lg:w-auto snap-center"
                        style="transition-delay: 200ms;">
                        <div
                            class="relative aspect-square mb-6 rounded-[2rem] overflow-hidden shadow-lg border border-black/5">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_12.jpg') }}"
                                alt="Flexibility to Cancel Your Meals"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-orange/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3
                            class="text-xl font-sans font-bold leading-snug text-calirify-dark group-hover:text-calirify-orange transition-colors text-left">
                            Flexibility to Cancel Your Meals
                        </h3>
                    </div>


                    <div class="group relative reveal shrink-0 w-[75vw] sm:w-[45vw] lg:w-auto snap-center"
                        style="transition-delay: 300ms;">
                        <div
                            class="relative aspect-square mb-6 rounded-[2rem] overflow-hidden shadow-lg border border-black/5">
                            <img src="{{ asset('assets/images/calirify_images/calirify_scraped_36.jpg') }}"
                                alt="Eat Healthy Tasty Daily"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-calirify-orange/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <h3
                            class="text-xl font-sans font-bold leading-snug text-calirify-dark group-hover:text-calirify-orange transition-colors text-left">
                            Eat Healthy Tasty Daily
                        </h3>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- What Our Customers Say About Us (Testimonials) Section -->
    <section id="testimonials"
        class="pt-32 pb-24 md:py-24 bg-calirify-cream/15 scroll-mt-20 border-t border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-16 reveal">
                <div class="text-left max-w-2xl">
                    <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[10px] mb-4">Real
                        Experiences</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark leading-tight">What Our
                        Customers <br><span class="text-calirify-orange italic">Say About Us</span></h2>
                </div>
                <p class="text-gray-500 max-w-sm mt-4 md:mt-0 leading-relaxed font-medium">Discover how our community
                    utilizes Calirify's precision portioning to simplify their nutrition, unlock consistent energy, and
                    reach their target wellness goals.</p>
            </div>

            <div id="testimonials-container"
                class="flex overflow-x-auto snap-x snap-mandatory gap-6 py-8 lg:py-4 lg:grid lg:grid-cols-3 lg:gap-10 hide-scrollbar -mx-6 px-6 lg:mx-0 lg:px-0 cursor-grab active:cursor-grabbing items-stretch">
                <!-- Testimonial 1 (Weight Loss Match) -->
                <div
                    class="group bg-white p-8 lg:p-10 rounded-[2.5rem] border border-calirify-orange/5 shadow-lg hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between reveal shrink-0 w-[85vw] sm:w-[45vw] lg:w-auto snap-center">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <!-- Star Rating -->
                            <div class="flex gap-1">
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                            </div>
                            <!-- Wellness Goal Result Pill -->
                            <span
                                class="px-3 py-1 rounded-full bg-calirify-orange/5 text-calirify-orange text-[9px] font-bold uppercase tracking-wider">Lost
                                11 kg in 3 Mos</span>
                        </div>
                        <p class="font-serif italic text-gray-700 leading-relaxed mb-8">"Calirify completely eliminated
                            my decision fatigue. Tracking calories was always a chore while managing a startup. Now, my
                            meals are delivered perfectly macro-balanced and fresh every single day."</p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-black/5">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-tr from-calirify-orange to-amber-500 text-white flex items-center justify-center font-bold font-serif text-sm">
                            DN</div>
                        <div class="text-left">
                            <h4 class="font-sans font-bold text-sm text-calirify-dark">Devendra Nath</h4>
                            <p class="text-xs text-gray-400">Founder, TechScale • Mumbai</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 (Balanced / Stay Fit Match) -->
                <div class="group bg-white p-8 lg:p-10 rounded-[2.5rem] border border-calirify-orange/5 shadow-lg hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between reveal shrink-0 w-[85vw] sm:w-[45vw] lg:w-auto snap-center"
                    style="transition-delay: 100ms;">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <!-- Star Rating -->
                            <div class="flex gap-1">
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                            </div>
                            <!-- Wellness Goal Result Pill -->
                            <span
                                class="px-3 py-1 rounded-full bg-emerald-500/5 text-emerald-600 text-[9px] font-bold uppercase tracking-wider">Maintained
                                12% BF</span>
                        </div>
                        <p class="font-serif italic text-gray-700 leading-relaxed mb-8">"As a practicing cardiologist,
                            nutrition is a critical pillar of health I discuss daily. Calirify represents the gold
                            standard of portion-controlled meal subscription. High-quality lean proteins and audited
                            microgreens."</p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-black/5">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-tr from-emerald-500 to-teal-600 text-white flex items-center justify-center font-bold font-serif text-sm">
                            PS</div>
                        <div class="text-left">
                            <h4 class="font-sans font-bold text-sm text-calirify-dark">Dr. Priyanjali Sen</h4>
                            <p class="text-xs text-gray-400">Senior Cardiologist • New Delhi</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 (Muscle Gain Match) -->
                <div class="group bg-white p-8 lg:p-10 rounded-[2.5rem] border border-calirify-orange/5 shadow-lg hover:shadow-2xl hover:shadow-calirify-orange/10 hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between reveal shrink-0 w-[85vw] sm:w-[45vw] lg:w-auto snap-center"
                    style="transition-delay: 200ms;">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <!-- Star Rating -->
                            <div class="flex gap-1">
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                                <span class="text-calirify-orange">★</span>
                            </div>
                            <!-- Wellness Goal Result Pill -->
                            <span
                                class="px-3 py-1 rounded-full bg-amber-500/5 text-amber-600 text-[9px] font-bold uppercase tracking-wider">+4.2
                                kg Lean Muscle</span>
                        </div>
                        <p class="font-serif italic text-gray-700 leading-relaxed mb-8">"Hitting a clean 160g of protein
                            daily on a vegetarian plan is extremely tough in India. Calirify's high-protein paneer and
                            legume meal variations enabled me to build muscle while staying fully vegetarian."</p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-black/5">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-tr from-amber-500 to-rose-500 text-white flex items-center justify-center font-bold font-serif text-sm">
                            RM</div>
                        <div class="text-left">
                            <h4 class="font-sans font-bold text-sm text-calirify-dark">Rithvik Mehta</h4>
                            <p class="text-xs text-gray-400">Elite Pilates Coach • Bengaluru</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic Testimonial Scroll Dots for Mobile Slider -->
            <div id="testimonial-dots" class="flex lg:hidden items-center justify-center gap-2 mt-6">
                <span
                    class="testimonial-dot w-4 h-2 rounded-full bg-calirify-orange transition-all duration-300"></span>
                <span
                    class="testimonial-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
                <span
                    class="testimonial-dot w-2 h-2 rounded-full bg-calirify-orange/20 transition-all duration-300"></span>
            </div>
        </div>
    </section>



    <section id="subscribe" class="py-16 bg-calirify-orange text-white overflow-hidden relative reveal">
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <p class="text-[10px] uppercase tracking-[0.4em] font-bold text-[#f9dd8a] mb-6">The Calirify Lifestyle</p>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold mb-8 leading-tight">Start your gourmet
                <br><span class="italic text-[#f9dd8a]">meal plan journey.</span>
            </h2>
            <p class="text-base md:text-lg text-white/70 mb-10 max-w-2xl mx-auto leading-relaxed">Join thousands of
                professionals enjoying fresh, home-style meal plan delivery. No commitment. Pause anytime.</p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-12">
                <a href="{{ url('/order') }}"
                    class="w-full md:w-auto bg-[#f9dd8a] text-calirify-orange px-10 py-3.5 rounded-full font-bold text-lg transition-all hover:scale-105 hover:shadow-xl hover:shadow-[#f9dd8a]/20">Start
                    Subscription</a>
                <a href="#weekly-menu"
                    class="w-full md:w-auto border border-white/20 text-white px-10 py-3.5 rounded-full font-bold text-lg transition-all hover:bg-white/10">Explore
                    Menus</a>
            </div>


        </div>

        <div class="absolute top-0 right-0 w-80 h-80 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-black/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl">
        </div>
    </section>


    <section id="faq" class="py-24 bg-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-3 gap-16">
                <div class="reveal">
                    <p class="text-calirify-orange font-bold uppercase tracking-[0.3em] text-[11px] mb-4">Support</p>
                    <h2
                        class="text-4xl md:text-5xl font-serif font-bold text-calirify-dark mb-6 leading-tight text-balance">
                        Common <br><span class="text-calirify-orange italic">Questions.</span></h2>
                    <p class="text-base text-gray-500 leading-relaxed">Everything you need to know about Calirify. Can't
                        find what you're looking for? Reach out to our support team.</p>
                </div>
                <div class="lg:col-span-2 space-y-8">

                    <div class="border-b border-black/5 pb-8 reveal">
                        <button class="w-full flex justify-between items-center text-left group faq-button">
                            <span
                                class="text-lg font-bold text-gray-800 transition-colors group-hover:text-calirify-orange">How
                                does the meal plan subscription work?</span>
                            <span class="text-2xl text-calirify-orange">+</span>
                        </button>
                        <div class="faq-content text-gray-600 leading-relaxed">
                            <div class="pb-4">
                                Simply pick a plan (Monthly or Weekly) and set your food preferences. We’ll deliver a
                                fresh, hot meal subscription to your doorstep every day. You can pause or manage your
                                schedule
                                easily through our app anytime.
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-black/5 pb-8 reveal">
                        <button class="w-full flex justify-between items-center text-left group faq-button">
                            <span
                                class="text-lg font-bold text-gray-800 transition-colors group-hover:text-calirify-orange">Can
                                I customize my meal plan?</span>
                            <span class="text-2xl text-calirify-orange">+</span>
                        </button>
                        <div class="faq-content text-gray-600 leading-relaxed">
                            <div class="pb-4">
                                Absolutely! You can choose between Veg and Non-Veg plans. You can also specify spice
                                levels or skip certain ingredients when you first set up your taste profile with our
                                support team.
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-black/5 pb-8 reveal">
                        <button class="w-full flex justify-between items-center text-left group faq-button">
                            <span
                                class="text-lg font-bold text-gray-800 transition-colors group-hover:text-calirify-orange">Is
                                there a delivery fee?</span>
                            <span class="text-2xl text-calirify-orange">+</span>
                        </button>
                        <div class="faq-content text-gray-600 leading-relaxed">
                            <div class="pb-4">
                                No! We believe in transparent pricing. All our subscription plans come with free daily
                                delivery to your home or office, with no hidden costs.
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-black/5 pb-8 reveal">
                        <button class="w-full flex justify-between items-center text-left group faq-button">
                            <span
                                class="text-lg font-bold text-gray-800 transition-colors group-hover:text-calirify-orange">What
                                if I need to skip a day?</span>
                            <span class="text-2xl text-calirify-orange">+</span>
                        </button>
                        <div class="faq-content text-gray-600 leading-relaxed">
                            <div class="pb-4">
                                No problem! Just log into your dashboard and hit 'Pause' for the days you’re away. We’ll
                                automatically extend your subscription period so you never lose a meal you've paid for.
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-black/5 pb-8 reveal">
                        <button class="w-full flex justify-between items-center text-left group faq-button">
                            <span
                                class="text-lg font-bold text-gray-800 transition-colors group-hover:text-calirify-orange">How
                                do I pay?</span>
                            <span class="text-2xl text-calirify-orange">+</span>
                        </button>
                        <div class="faq-content text-gray-600 leading-relaxed">
                            <div class="pb-4">
                                We support all major credit cards, UPI, and net banking. You can choose to pay weekly or
                                monthly, with special discounts available for longer-term plans.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button id="scroll-top"
        class="fixed bottom-24 right-10 w-14 h-14 bg-calirify-orange text-white rounded-full shadow-2xl flex items-center justify-center translate-y-32 opacity-0 pointer-events-none transition-all duration-700 hover:scale-110 z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    window.revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                window.revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    window.refreshReveal = () => {
        document.querySelectorAll('.reveal').forEach(el => window.revealObserver.observe(el));
    };

    window.refreshReveal();

    const nav = document.querySelector('nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    }

    const vegBtn = document.getElementById('veg-toggle');
    const nonvegBtn = document.getElementById('nonveg-toggle');
    const mealTexts = document.querySelectorAll('.meal-text');
    const mealImages = document.querySelectorAll('.meal-image');

    function updateMenu(type) {
        if (!vegBtn || !nonvegBtn) return;

        if (type === 'veg') {
            vegBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-lg');
            vegBtn.classList.remove('text-gray-400', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            nonvegBtn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-lg', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            nonvegBtn.classList.add('text-gray-400');
        } else {
            nonvegBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-lg');
            nonvegBtn.classList.remove('text-gray-400', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            vegBtn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-lg', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            vegBtn.classList.add('text-gray-400');
        }

        mealTexts.forEach(meal => {
            meal.style.opacity = ''; 
            meal.classList.add('switching');
            setTimeout(() => {
                meal.textContent = meal.getAttribute(`data-${type}`);
                meal.classList.remove('switching');
            }, 400);
        });

        mealImages.forEach(img => {
            img.style.opacity = ''; 
            img.classList.add('switching');
            setTimeout(() => {
                if (img.hasAttribute(`data-${type}`)) {
                    img.src = img.getAttribute(`data-${type}`);
                }
                img.classList.remove('switching');
            }, 400);
        });

        const macroSpans = document.querySelectorAll('.meal-macros span');
        macroSpans.forEach(span => {
            span.classList.add('switching');
            setTimeout(() => {
                if (span.hasAttribute(`data-${type}`)) {
                    span.textContent = span.getAttribute(`data-${type}`);
                }
                span.classList.remove('switching');
            }, 400);
        });
    }

    if (vegBtn) vegBtn.addEventListener('click', () => updateMenu('veg'));
    if (nonvegBtn) nonvegBtn.addEventListener('click', () => updateMenu('nonveg'));

    function initDragScroll(el) {
        if (!el) return;
        let isDown = false, startX, scrollLeft;

        el.querySelectorAll('img').forEach(img => img.draggable = false);

        el.addEventListener('mousedown', (e) => {
            isDown = true;
            el.style.scrollBehavior = 'auto';
            el.style.scrollSnapType = 'none';
            el.style.userSelect = 'none';
            startX = e.pageX - el.offsetLeft;
            scrollLeft = el.scrollLeft;
        });

        el.addEventListener('mouseleave', () => {
            if (!isDown) return;
            isDown = false;
            el.style.scrollBehavior = 'smooth';
            el.style.scrollSnapType = '';
            el.style.userSelect = '';
        });

        el.addEventListener('mouseup', () => {
            isDown = false;
            el.style.scrollBehavior = 'smooth';
            el.style.scrollSnapType = '';
            el.style.userSelect = '';
        });

        el.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - el.offsetLeft;
            const walk = (x - startX) * 2;
            el.scrollLeft = scrollLeft - walk;
        });
    }

    initDragScroll(document.getElementById('menu-container'));
    initDragScroll(document.getElementById('process-container'));
    initDragScroll(document.getElementById('testimonials-container'));

    const menuSlider = document.getElementById('menu-container');
    if (menuSlider) {
        const scrollLeftBtn = document.getElementById('scroll-left');
        const scrollRightBtn = document.getElementById('scroll-right');
        
        if (scrollLeftBtn && scrollRightBtn) {
            scrollLeftBtn.addEventListener('click', () => {
                menuSlider.scrollBy({ left: -400, behavior: 'smooth' });
            });
            scrollRightBtn.addEventListener('click', () => {
                menuSlider.scrollBy({ left: 400, behavior: 'smooth' });
            });
        }

        const dots = document.querySelectorAll('#menu-dots .menu-dot');
        if (dots.length) {
            menuSlider.addEventListener('scroll', () => {
                const cards = menuSlider.querySelectorAll('.menu-day');
                const scrollPos = menuSlider.scrollLeft + menuSlider.offsetWidth / 2;
                let activeIndex = 0;
                cards.forEach((card, i) => {
                    if (card.offsetLeft <= scrollPos) activeIndex = i;
                });
                dots.forEach((dot, i) => {
                    if (i === activeIndex) {
                        dot.classList.remove('bg-calirify-orange/20');
                        dot.classList.add('bg-calirify-orange', 'w-4');
                    } else {
                        dot.classList.remove('bg-calirify-orange', 'w-4');
                        dot.classList.add('bg-calirify-orange/20');
                    }
                });
            });
        }
    }

    const testimonialSlider = document.getElementById('testimonials-container');
    if (testimonialSlider) {
        const dots = document.querySelectorAll('#testimonial-dots .testimonial-dot');
        if (dots.length) {
            testimonialSlider.addEventListener('scroll', () => {
                const cards = testimonialSlider.querySelectorAll('.group');
                const scrollPos = testimonialSlider.scrollLeft + testimonialSlider.offsetWidth / 2;
                let activeIndex = 0;
                cards.forEach((card, i) => {
                    if (card.offsetLeft <= scrollPos) activeIndex = i;
                });
                dots.forEach((dot, i) => {
                    if (i === activeIndex) {
                        dot.classList.remove('bg-calirify-orange/20');
                        dot.classList.add('bg-calirify-orange', 'w-4');
                    } else {
                        dot.classList.remove('bg-calirify-orange', 'w-4');
                        dot.classList.add('bg-calirify-orange/20');
                    }
                });
            });
        }
    }

    const today = new Date().getDay(); 
    const dayCards = document.querySelectorAll('.menu-day');
    dayCards.forEach(card => {
        if (parseInt(card.getAttribute('data-day')) === today) {
            card.classList.add('ring-2', 'ring-calirify-orange', 'bg-calirify-orange/5', 'scale-105', 'z-10');
            const dayLabel = card.querySelector('p:first-child');
            if (dayLabel) dayLabel.innerHTML += ' <span class="ml-2 bg-calirify-orange text-white px-2 py-0.5 rounded-full text-[8px]">TODAY</span>';
        }
    });

    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('span:last-child');
            if (!content || !icon) return;
            
            const isOpen = content.classList.contains('open');

            document.querySelectorAll('.faq-content').forEach(otherContent => {
                if (otherContent !== content) {
                    otherContent.classList.remove('open');
                    otherContent.style.maxHeight = '0px';
                    const otherIcon = otherContent.previousElementSibling.querySelector('span:last-child');
                    if (otherIcon) otherIcon.textContent = '+';
                }
            });

            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.textContent = '−';
            } else {
                content.classList.remove('open');
                content.style.maxHeight = '0px';
                icon.textContent = '+';
            }
        });
    });

    const heroPickTitle = document.querySelector('.hero-pick-title');
    if (heroPickTitle) {
        const currentDayCard = document.querySelector(`.menu-day[data-day="${today}"]`);
        if (currentDayCard && today !== 0) {
            const mealEl = currentDayCard.querySelector('.meal-text');
            if (mealEl) {
                const lunchText = mealEl.getAttribute('data-veg');
                heroPickTitle.textContent = lunchText;
            }
        } else if (today === 0) {
            heroPickTitle.textContent = "Chef's Special Sunday Break";
        }
    }

    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.remove('translate-y-32', 'opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.add('translate-y-0', 'opacity-100');
            } else {
                scrollTopBtn.classList.add('translate-y-32', 'opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.remove('translate-y-0', 'opacity-100');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (sections.length && navLinks.length) {
        const scrollObserverOptions = {
            threshold: 0.5,
            rootMargin: "-80px 0px 0px 0px"
        };

        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (id === 'home' && link.getAttribute('href') === '#') {
                            link.classList.add('active');
                        }
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, scrollObserverOptions);

        sections.forEach(section => scrollObserver.observe(section));

        const firstSection = document.querySelector('section:first-of-type');
        if (firstSection && !firstSection.id) {
            firstSection.setAttribute('id', 'home');
            scrollObserver.observe(firstSection);
        }
    }

    let currentGoal = 'weightloss';

    window.selectGoal = function(goal) {
        currentGoal = goal;
        
        document.querySelectorAll('.goal-btn').forEach(btn => {
            btn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-md', 'shadow-calirify-orange/15');
            btn.classList.add('text-gray-500');
        });
        
        const activeBtn = document.getElementById(`goal-${goal}`);
        if (activeBtn) {
            activeBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-md', 'shadow-calirify-orange/15');
            activeBtn.classList.remove('text-gray-500');
        }
        
        const slider = document.getElementById('calorie-slider');
        if (slider) {
            if (goal === 'weightloss') slider.value = 1600;
            else if (goal === 'balanced') slider.value = 2000;
            else if (goal === 'muscle') slider.value = 2400;
        }
        
        updateCalculations();
    };

    window.updateCalculations = function() {
        const slider = document.getElementById('calorie-slider');
        const sliderValLabel = document.getElementById('slider-val-label');
        if (!slider) return;
        
        const cal = parseInt(slider.value);
        if (sliderValLabel) {
            sliderValLabel.textContent = cal.toLocaleString() + ' kcal';
        }
        
        let pPct, cPct, fPct;
        let planTitle = "";
        let planDesc = "";
        
        if (currentGoal === 'weightloss') {
            pPct = 35;
            cPct = 25;
            fPct = 40;
            planTitle = "Keto Diet Plan";
            planDesc = "Low-carb, high-fat design to jumpstart ketosis, perfect for rapid energy shift and toning.";
        } else if (currentGoal === 'balanced') {
            pPct = 25;
            cPct = 45;
            fPct = 30;
            planTitle = "Daily Healthy Plan";
            planDesc = "Balanced macros with nutrient-rich proteins and smart carbs to power active maintenance.";
        } else if (currentGoal === 'muscle') {
            pPct = 40;
            cPct = 40;
            fPct = 20;
            planTitle = "14D Transformation";
            planDesc = "High-protein, moderate carb configuration built specifically to build mass and repair muscle tissue.";
        }
        
        const pG = Math.round((cal * (pPct/100)) / 4);
        const cG = Math.round((cal * (cPct/100)) / 4);
        const fG = Math.round((cal * (fPct/100)) / 9);
        
        const pGLabel = document.getElementById('protein-g-label');
        const cGLabel = document.getElementById('carbs-g-label');
        const fGLabel = document.getElementById('fats-g-label');
        
        if (pGLabel) pGLabel.textContent = pG + 'g';
        if (cGLabel) cGLabel.textContent = cG + 'g';
        if (fGLabel) fGLabel.textContent = fG + 'g';
        
        const pBar = document.getElementById('protein-bar');
        const cBar = document.getElementById('carbs-bar');
        const fBar = document.getElementById('fats-bar');
        
        const maxP = 300;
        const maxC = 338;
        const maxF = 133;
        
        if (pBar) pBar.style.width = Math.max(8, Math.min(100, (pG / maxP) * 100)) + '%';
        if (cBar) cBar.style.width = Math.max(8, Math.min(100, (cG / maxC) * 100)) + '%';
        if (fBar) fBar.style.width = Math.max(8, Math.min(100, (fG / maxF) * 100)) + '%';
        
        const planTitleEl = document.getElementById('match-plan-title');
        const planDescEl = document.getElementById('match-plan-desc');
        
        if (planTitleEl) planTitleEl.textContent = planTitle;
        if (planDescEl) planDescEl.textContent = planDesc;
    };

    const slider = document.getElementById('calorie-slider');
    if (slider) {
        updateCalculations();
    }
});
</script>
@endpush
