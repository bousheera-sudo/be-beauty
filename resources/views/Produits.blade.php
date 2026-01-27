@extends('Master_page')

@section('title', $categorie)

@section('content')
    <div class="bg-brand-light py-10">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-serif text-brand-dark text-center mb-4 italic">{{ $categorie }}</h1>
            <p class="text-center text-gray-500 mb-12 max-w-2xl mx-auto font-light">Explorez notre sélection de produits d'exception, conçus pour sublimer votre beauté naturelle.</p>
            
            <!-- Filtres rapides -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <a href="/articles" class="px-6 py-2 border border-gray-300 text-gray-600 hover:border-brand-dark hover:text-brand-dark text-xs uppercase tracking-widest transition duration-300 {{ $categorie == 'Toutes les catégories' ? 'bg-brand-dark text-white border-brand-dark' : '' }}">Tout</a>
                <a href="/articles/cat/Visage" class="px-6 py-2 border border-gray-300 text-gray-600 hover:border-brand-dark hover:text-brand-dark text-xs uppercase tracking-widest transition duration-300 {{ $categorie == 'Visage' ? 'bg-brand-dark text-white border-brand-dark' : '' }}">Visage</a>
                <a href="/articles/cat/Cheveux" class="px-6 py-2 border border-gray-300 text-gray-600 hover:border-brand-dark hover:text-brand-dark text-xs uppercase tracking-widest transition duration-300 {{ $categorie == 'Cheveux' ? 'bg-brand-dark text-white border-brand-dark' : '' }}">Cheveux</a>
                <a href="/articles/cat/Maquillage" class="px-6 py-2 border border-gray-300 text-gray-600 hover:border-brand-dark hover:text-brand-dark text-xs uppercase tracking-widest transition duration-300 {{ $categorie == 'Maquillage' ? 'bg-brand-dark text-white border-brand-dark' : '' }}">Maquillage</a>
            </div>

            @include('incs.flash')

            @if($articles->isEmpty())
                <div class="text-center py-20 text-gray-500 font-light italic">
                    <p>Aucun trésor trouvé dans cette catégorie pour le moment.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 shadow-sm rounded-lg overflow-hidden">
                        <thead class="bg-brand-dark text-white">
                            <tr>
                                <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Image</th>
                                <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Produit</th>
                                <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Catégorie</th>
                                <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Prix</th>
                                <th class="py-4 px-6 text-left text-xs uppercase font-serif tracking-widest">Description</th>
                                <th class="py-4 px-6 text-center text-xs uppercase font-serif tracking-widest">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($articles as $article)
                                <tr class="hover:bg-brand-light transition duration-200">
                                    <td class="py-4 px-6">
                                        <img src="{{ $article->image }}" alt="{{ $article->titre }}" class="h-16 w-16 object-cover rounded-full border border-brand-gold">
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="font-bold text-gray-800">{{ $article->titre }}</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="bg-gray-100 text-gray-600 py-1 px-3 rounded-full text-xs font-semibold uppercase tracking-wider">{{ $article->categorie }}</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="text-brand-dark font-bold">{{ number_format($article->prix, 2) }} DH</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="text-gray-500 text-sm font-light">{{ Str::limit($article->contenu, 50) }}</p>
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <div class="flex justify-center space-x-2">
                                            <a href="{{ route('articles.show', $article->id) }}" class="text-brand-dark hover:text-brand-gold transition" title="Voir">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            </a>
                                            <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:text-blue-800 transition" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                            </a>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Supprimer ?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 transition" title="Supprimer">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="mt-12">
                     {{ $articles->links('vendor.pagination.custom') }}
                </div>
            @endif
        </div>
    </div>
@endsection
