@extends('layouts.customer')

@section('title', 'Weekly Menu | Calirify')

@section('content')
<section class="min-h-screen bg-gray-50/50 pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-calirify-dark to-calirify-dark/90 rounded-[3rem] p-8 md:p-16 text-white relative overflow-hidden shadow-2xl reveal">
            <div class="absolute top-0 right-0 w-96 h-96 bg-calirify-orange/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
            <div class="relative z-10">
                <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-calirify-orange mb-4">Chef's Table</p>
                <h1 class="text-3xl md:text-6xl font-serif font-bold leading-tight">
                    This Week's <br><span class="text-calirify-orange italic">Curations</span>
                </h1>
                <p class="mt-6 text-white/60 font-medium max-w-xl text-sm leading-relaxed">High-protein, low-carb, and perfectly balanced. Every meal is crafted by our nutritionists to ensure you hit your goals without compromising on taste.</p>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="flex flex-wrap items-center justify-between gap-6 px-10 py-6 bg-white rounded-[2rem] border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 reveal">
            <div class="flex items-center gap-6">
                <button class="text-[10px] font-bold uppercase tracking-widest text-calirify-orange border-b-2 border-calirify-orange pb-1">All Meals</button>
                <button class="text-[10px] font-bold uppercase tracking-widest text-gray-400 hover:text-calirify-dark transition-colors">Vegetarian</button>
                <button class="text-[10px] font-bold uppercase tracking-widest text-gray-400 hover:text-calirify-dark transition-colors">Non-Veg</button>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Sort By:</span>
                <select class="bg-transparent text-[10px] font-bold uppercase tracking-widest text-calirify-dark focus:outline-none cursor-pointer">
                    <option>Protein (High to Low)</option>
                    <option>Calories (Low to High)</option>
                </select>
            </div>
        </div>

        <!-- Meal Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $meals = [
                    [
                        'name' => 'Roasted Mediterranean Salmon',
                        'desc' => 'Pan-seared salmon with roasted asparagus, cherry tomatoes, and a lemon-herb drizzle.',
                        'protein' => '42g',
                        'carbs' => '12g',
                        'cals' => '450',
                        'tag' => 'Non-Veg'
                    ],
                    [
                        'name' => 'Quinoa Power Bowl',
                        'desc' => 'Tri-color quinoa with roasted sweet potatoes, kale, chickpeas, and tahini dressing.',
                        'protein' => '18g',
                        'carbs' => '45g',
                        'cals' => '380',
                        'tag' => 'Veg'
                    ],
                    [
                        'name' => 'Herb-Crusted Grilled Chicken',
                        'desc' => 'Tender chicken breast with steamed broccoli and a light pesto sauce.',
                        'protein' => '48g',
                        'carbs' => '8g',
                        'cals' => '410',
                        'tag' => 'Non-Veg'
                    ],
                    [
                        'name' => 'Paneer Tikka Salad',
                        'desc' => 'Spiced cottage cheese cubes with fresh greens, cucumber, and mint chutney.',
                        'protein' => '22g',
                        'carbs' => '15g',
                        'cals' => '320',
                        'tag' => 'Veg'
                    ],
                    [
                        'name' => 'Beef & Broccoli Stir-Fry',
                        'desc' => 'Lean beef strips with ginger, garlic, and snap peas in a light soy glaze.',
                        'protein' => '38g',
                        'carbs' => '18g',
                        'cals' => '440',
                        'tag' => 'Non-Veg'
                    ],
                    [
                        'name' => 'Tofu Scramble with Spinach',
                        'desc' => 'Crumbled tofu with turmeric, bell peppers, and fresh spinach.',
                        'protein' => '24g',
                        'carbs' => '10g',
                        'cals' => '290',
                        'tag' => 'Veg'
                    ],
                ];
            @endphp

            @foreach($meals as $meal)
                <div class="bg-white rounded-[3rem] overflow-hidden border border-calirify-orange/5 shadow-xl shadow-calirify-orange/5 group hover:shadow-2xl hover:shadow-calirify-orange/10 transition-all reveal">
                    <div class="aspect-[4/3] bg-gray-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <span class="absolute top-6 left-6 px-4 py-1 rounded-full bg-white/90 backdrop-blur text-[8px] font-bold uppercase tracking-widest text-calirify-dark shadow-sm">
                            {{ $meal['tag'] }}
                        </span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-serif font-bold text-calirify-dark mb-3 group-hover:text-calirify-orange transition-colors">{{ $meal['name'] }}</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-6">{{ $meal['desc'] }}</p>
                        
                        <div class="grid grid-cols-3 gap-4 py-6 border-t border-gray-50">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">Protein</p>
                                <p class="text-sm font-bold text-calirify-dark">{{ $meal['protein'] }}</p>
                            </div>
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">Carbs</p>
                                <p class="text-sm font-bold text-calirify-dark">{{ $meal['carbs'] }}</p>
                            </div>
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">Cals</p>
                                <p class="text-sm font-bold text-calirify-orange">{{ $meal['cals'] }}</p>
                            </div>
                        </div>

                        <button class="w-full py-4 bg-gray-50 text-calirify-dark rounded-full font-bold text-[9px] uppercase tracking-widest group-hover:bg-calirify-orange group-hover:text-white transition-all">
                            View Nutritional Info
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
