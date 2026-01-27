@extends('Master_page')

@section('title', 'Connexion')

@section('content')
<div class="bg-brand-light py-20 min-h-[70vh] flex items-center">
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto bg-white shadow-2xl rounded-lg overflow-hidden p-10 border-t-4 border-brand-gold">
            <h2 class="text-3xl font-serif text-brand-dark mb-2 italic text-center">Bienvenue</h2>
            <p class="text-center text-gray-400 text-sm mb-10 uppercase tracking-widest font-light">Accédez à votre espace Be-Beauty</p>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Adresse Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent @error('email') border-red-400 @enderror"
                        placeholder="votre@email.com">
                    @error('email')
                        <p class="text-red-500 text-[10px] mt-2 italic uppercase font-bold tracking-tighter">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-8">
                    <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Mot de passe</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent @error('password') border-red-400 @enderror"
                        placeholder="••••••••">
                    @error('password')
                        <p class="text-red-500 text-[10px] mt-2 italic uppercase font-bold tracking-tighter">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-8">
                    <label class="flex items-center cursor-pointer group">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="hidden peer">
                        <div class="w-4 h-4 border border-gray-300 rounded peer-checked:bg-brand-gold peer-checked:border-brand-gold transition duration-200 flex items-center justify-center">
                             <svg class="w-2.5 h-2.5 text-white opacity-0 peer-checked:opacity-100" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <span class="ml-2 text-[10px] text-gray-500 uppercase tracking-widest group-hover:text-brand-dark transition">Se souvenir de moi</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-[10px] text-gray-400 hover:text-brand-gold transition uppercase tracking-widest underline underline-offset-4" href="{{ route('password.request') }}">
                            Oublié ?
                        </a>
                    @endif
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-500 shadow-lg hover:shadow-brand-gold/20">
                    Se Connecter
                </button>
                
                <div class="mt-8 text-center">
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest">Pas encore de compte ?</p>
                    <a href="{{ route('register') }}" class="inline-block mt-2 text-brand-gold hover:text-brand-dark transition font-serif italic text-lg decoration-brand-gold/30 underline underline-offset-8 decoration-1">
                        Inscrivez-vous ici
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
