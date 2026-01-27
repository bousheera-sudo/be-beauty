@extends('Master_page')

@section('title', $article->titre)

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ $article->image }}" alt="{{ $article->titre }}" class="w-full h-full object-cover min-h-[400px]">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <span class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">{{ $article->categorie }}</span>
                <h1 class="text-4xl font-serif text-brand-dark mb-6 italic">{{ $article->titre }}</h1>
                <p class="text-gray-600 font-light mb-8 leading-relaxed">{{ $article->contenu }}</p>
                
                <div class="flex items-center justify-between mb-8">
                    <span class="text-2xl font-bold text-brand-dark">{{ number_format($article->prix, 2) }} DH</span>
                    <button class="bg-brand-dark text-white px-8 py-3 uppercase tracking-widest text-sm font-semibold hover:bg-brand-gold transition duration-300">Ajouter au panier</button>
                </div>

                <div class="flex space-x-4 border-t border-gray-100 pt-6">
                    <a href="{{ route('articles.edit', $article->id) }}" class="text-brand-gold hover:text-brand-dark transition uppercase text-xs font-bold tracking-widest">Modifier</a>
                    
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce trésor ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 hover:text-red-600 transition uppercase text-xs font-bold tracking-widest">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="/articles" class="text-gray-500 hover:text-brand-dark transition uppercase text-xs tracking-widest border-b border-transparent hover:border-brand-dark pb-1">Retour à la collection</a>
        </div>
    </div>
</div>
@endsection
