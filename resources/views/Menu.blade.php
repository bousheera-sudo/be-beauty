<nav class="bg-white text-brand-dark py-4 border-b border-gray-100 font-sans">
    <div class="container mx-auto flex justify-between items-center px-6">
        <a href="/" class="flex items-center">
            <img src="/images/logo.png" alt="Be-Beauty Logo" class="h-16 w-auto">
        </a>
        <ul class="flex space-x-8 text-sm font-semibold uppercase tracking-widest items-center">
            <li><a href="/" class="hover:text-brand-gold transition duration-300">Accueil</a></li>
            <li><a href="/articles" class="hover:text-brand-gold transition duration-300">Collection</a></li>
            
            @guest
                <li><a href="{{ route('login') }}" class="hover:text-brand-gold transition duration-300">Connexion</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="hover:text-brand-gold transition duration-300">S'inscrire</a></li>
                @endif
            @else
                @if(Auth::user()->role === 'ADMIN')
                    <li><a href="{{ route('articles.create') }}" class="text-brand-gold border border-brand-gold px-3 py-1 hover:bg-brand-gold hover:text-white transition duration-300">Ajouter</a></li>
                @endif
                
                @if(Auth::user()->role === 'USER')
                    <li><a href="{{ route('espaceclient') }}" class="hover:text-brand-gold transition duration-300">Mon Espace</a></li>
                @endif

                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-brand-gold transition duration-300 uppercase font-semibold">Déconnexion</button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
