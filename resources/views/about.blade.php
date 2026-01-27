@extends('Master_page')

@section('title', 'Notre Histoire')

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden p-10 text-center">
            <h1 class="text-4xl font-serif text-brand-dark mb-8 italic">Notre Histoire</h1>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed font-light">
                Fondée avec une passion pour la beauté authentique, <strong class="text-brand-gold">Be-Beauty</strong> est née d'un désir simple : révéler l'éclat naturel de chacun.
            </p>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed font-light">
                Nos produits sont élaborés avec des ingrédients précieux, sélectionnés pour leur pureté et leur efficacité. Nous croyons en une cosmétique luxueuse, responsable et respectueuse de votre peau.
            </p>
            <div class="mt-8">
                <img src="https://images.unsplash.com/photo-1556228720-1957be83f307?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Notre Atelier" class="w-full h-64 object-cover rounded mb-8 opacity-80">
            </div>
            <p class="text-gray-500 italic">Merci de faire partie de notre voyage.</p>
        </div>
    </div>
</div>
@endsection