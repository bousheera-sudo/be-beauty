@extends('Master_page')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-brand-light h-screen max-h-[700px] flex items-center">
        <div class="absolute inset-0 z-0">
             <img class="w-full h-full object-cover opacity-80" src="https://images.unsplash.com/photo-1616683693504-3ea7e9ad6fec?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Cosmetic Background">
             <div class="absolute inset-0 bg-gradient-to-r from-white via-white/70 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl">
                <h1 class="text-5xl md:text-7xl font-bold text-brand-dark mb-4 leading-tight" data-aos="fade-up">
                    Enhance your natural <br>
                    <span class="text-brand-gold italic">Radiance & Beauty</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 font-light" data-aos="fade-up" data-aos-delay="200">
                    Découvrez notre collection exclusive de soins visage et cheveux, formulée avec les ingrédients naturels les plus précieux pour révéler votre éclat intérieur.
                </p>
                <div class="flex space-x-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="/articles" class="bg-brand-dark text-white px-8 py-4 rounded-none hover:bg-gray-800 transition duration-300 uppercase tracking-widest text-sm font-semibold">
                        Voir la Collection
                    </a>
                    <a href="/about" class="border border-brand-dark text-brand-dark px-8 py-4 rounded-none hover:bg-brand-dark hover:text-white transition duration-300 uppercase tracking-widest text-sm font-semibold">
                        Notre Histoire
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-brand-dark">Nos Univers</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <a href="/articles/cat/Visage" class="group relative block h-96 overflow-hidden" data-aos="fade-up">
                    <img src="https://static.wixstatic.com/media/95e191_5870583e76fc4dda901a9d3304b0ae65~mv2.jpg/v1/fill/w_800,h_800,al_c/95e191_5870583e76fc4dda901a9d3304b0ae65~mv2.jpg">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-3xl font-serif tracking-widest uppercase border-b-2 border-transparent group-hover:border-white pb-2 transition">Visage</span>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="/articles/cat/Cheveux" class="group relative block h-96 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://th.bing.com/th/id/R.71596c6b8a87134a276eb2afdd8b96f0?rik=OiuHoMU%2fizE%2bAg&riu=http%3a%2f%2fmadebynaturelabs.com%2fcdn%2fshop%2farticles%2fA_collection_of_hair_care_products_displayed_in_a_sleek_salon-inspired_setting_15-02-2025_at_23-21-36_997df0b6-7f74-412a-bb67-fc711e30f3f9.jpg%3fv%3d1740860126&ehk=qX6tZGd%2fmg97Ns9mO%2fYyrydfatELY4WUml9kPjzjRws%3d&risl=&pid=ImgRaw&r=0">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-3xl font-serif tracking-widest uppercase border-b-2 border-transparent group-hover:border-white pb-2 transition">Cheveux</span>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="/articles/cat/Maquillage" class="group relative block h-96 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Maquillage" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-3xl font-serif tracking-widest uppercase border-b-2 border-transparent group-hover:border-white pb-2 transition">Maquillage</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
