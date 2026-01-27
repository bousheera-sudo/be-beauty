@extends('Master_page')

@section('title', 'Espace Client')

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-serif text-brand-dark mb-4 italic text-center">Votre Espace Privé</h1>
        <p class="text-center text-gray-500 mb-12 font-light">Bienvenue {{ Auth::user()->name }}. Voici nos offres exclusives pour vous.</p>

        <h2 class="text-2xl font-serif text-brand-gold mb-6 border-b border-gray-200 pb-2">Produits en Solde</h2>
        
        @if($articles->isEmpty())
            <p class="text-gray-500 italic">Aucune offre exclusive pour le moment.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-sm rounded-lg overflow-hidden">
                    <thead class="bg-brand-dark text-white">
                        <tr>
                            <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Image</th>
                            <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Produit</th>
                            <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Offre</th>
                            <th class="py-4 px-6 text-center text-xs uppercase font-serif tracking-widest">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($articles as $article)
                            <tr class="hover:bg-brand-light transition duration-200">
                                <td class="py-4 px-6">
                                    <img src="{{ $article->image }}" alt="{{ $article->titre }}" class="h-12 w-12 object-cover rounded-full border border-brand-gold">
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-gray-800">{{ $article->titre }}</span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-red-500 font-bold">-20%</span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <a href="{{ route('articles.show', $article->id) }}" class="text-brand-dark hover:text-brand-gold transition text-xs font-bold uppercase tracking-widest">Voir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
