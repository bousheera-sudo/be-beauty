@extends('Master_page')

@section('title', 'Inscription')

@section('content')
<div class="bg-brand-light py-20 min-h-[80vh] flex items-center">
    <div class="container mx-auto px-6">
        <div class="max-w-lg mx-auto bg-white shadow-2xl rounded-lg overflow-hidden p-10 border-t-4 border-brand-gold">
            <h2 class="text-3xl font-serif text-brand-dark mb-2 italic text-center">Rejoindre Be-Beauty</h2>
            <p class="text-center text-gray-400 text-sm mb-10 uppercase tracking-widest font-light">Devenez membre privilège</p>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Prénom & Nom</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent @error('name') border-red-400 @enderror"
                            placeholder="Ex: Elena Rossi">
                        @error('name')
                            <p class="text-red-500 text-[10px] mt-2 italic uppercase font-bold tracking-tighter">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Adresse Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent @error('email') border-red-400 @enderror"
                            placeholder="votre@email.com">
                        @error('email')
                            <p class="text-red-500 text-[10px] mt-2 italic uppercase font-bold tracking-tighter">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div>
                        <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Mot de passe</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent @error('password') border-red-400 @enderror"
                            placeholder="Min. 8 caractères">
                        @error('password')
                            <p class="text-red-500 text-[10px] mt-2 italic uppercase font-bold tracking-tighter">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Confirmation</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent"
                            placeholder="Répétez le mot de passe">
                    </div>
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-500 shadow-lg hover:shadow-brand-gold/20">
                    Créer mon compte
                </button>
                
                <div class="mt-8 text-center">
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest">Déjà membre ?</p>
                    <a href="{{ route('login') }}" class="inline-block mt-2 text-brand-gold hover:text-brand-dark transition font-serif italic text-lg decoration-brand-gold/30 underline underline-offset-8 decoration-1">
                        Connectez-vous ici
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
