@extends('Master_page')

@section('title', 'Modifier ' . $article->titre)

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden p-10">
            <h2 class="text-3xl font-serif mb-6 italic text-brand-gold text-center">Modifier le produit</h2>
            
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <label for="titre" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Titre du produit</label>
                    <input type="text" id="titre" name="titre" value="{{ old('titre', $article->titre) }}" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent">
                    @error('titre') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="mb-6">
                    <label for="prix" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Prix (DH)</label>
                    <input type="number" step="0.01" id="prix" name="prix" value="{{ old('prix', $article->prix) }}" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent">
                    @error('prix') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="mb-6">
                    <label for="categorie" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Catégorie</label>
                    <div class="relative">
                        <select id="categorie" name="categorie" class="block appearance-none w-full bg-transparent border border-gray-300 border-b-2 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-brand-dark">
                            @foreach(['Visage', 'Cheveux', 'Corps', 'Maquillage', 'Parfums'] as $cat)
                                <option value="{{ $cat }}" {{ old('categorie', $article->categorie) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('categorie') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                </div>
                
                <div class="mb-6">
                    <label for="contenu" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Description</label>
                    <textarea id="contenu" name="contenu" rows="4" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent">{{ old('contenu', $article->contenu) }}</textarea>
                    @error('contenu') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Image Actuelle</label>
                    <img src="{{ $article->image }}" alt="Current Image" class="w-32 h-32 object-cover rounded mb-4">
                    
                    <label for="image" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Nouvelle Image (Optionnel)</label>
                    <input type="file" id="image" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand-accent file:text-brand-dark hover:file:bg-brand-gold hover:file:text-white transition duration-300"/>
                    @error('image') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                </div>
                
                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-300">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
@endsection
