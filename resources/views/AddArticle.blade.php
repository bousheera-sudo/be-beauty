@extends('Master_page')

@section('title', 'Ajouter un produit')

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden p-10">
            <h2 class="text-3xl font-serif mb-6 italic text-brand-gold text-center">Ajouter un nouveau trésor</h2>
            
            @include('incs.flash')

            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-6">
                    <label for="titre" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Titre du produit</label>
                    <input type="text" id="titre" name="titre" value="{{ old('titre') }}" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent placeholder-gray-300" placeholder="Ex: Élixir de Jeunesse">
                    @error('titre')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="prix" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Prix (DH)</label>
                    <input type="number" step="0.01" id="prix" name="prix" value="{{ old('prix') }}" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent placeholder-gray-300" placeholder="Ex: 250.00">
                    @error('prix')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="categorie" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Catégorie</label>
                    <div class="relative">
                        <select id="categorie" name="categorie" class="block appearance-none w-full bg-transparent border border-gray-300 border-b-2 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-brand-dark">
                            <option value="">Choisir une catégorie...</option>
                            <option value="Visage" {{ old('categorie') == 'Visage' ? 'selected' : '' }}>Visage</option>
                            <option value="Cheveux" {{ old('categorie') == 'Cheveux' ? 'selected' : '' }}>Cheveux</option>
                            <option value="Corps" {{ old('categorie') == 'Corps' ? 'selected' : '' }}>Corps</option>
                            <option value="Maquillage" {{ old('categorie') == 'Maquillage' ? 'selected' : '' }}>Maquillage</option>
                            <option value="Parfums" {{ old('categorie') == 'Parfums' ? 'selected' : '' }}>Parfums</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('categorie')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="contenu" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Description</label>
                    <textarea id="contenu" name="contenu" rows="4" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent placeholder-gray-300" placeholder="Décrivez ce produit d'exception...">{{ old('contenu') }}</textarea>
                    @error('contenu')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-8">
                    <label for="image" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Image</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="image" class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300 group">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <svg class="w-10 h-10 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">Sélectionner une photo</p>
                            </div>
                            <input type="file" id="image" name="image" class="opacity-0" />
                        </label>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-300">Ajouter le produit</button>
            </form>
        </div>
    </div>
</div>
@endsection
