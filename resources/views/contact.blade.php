@extends('Master_page')

@section('title', 'Contact')

@section('content')
<div class="bg-brand-light py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row">
            <!-- Info Section -->
            <div class="md:w-1/2 bg-brand-dark text-white p-10 flex flex-col justify-center">
                <h2 class="text-3xl font-serif mb-6 italic text-brand-gold">Contactez-nous</h2>
                <p class="mb-8 font-light text-gray-300">Une question sur nos produits ou votre commande ? Notre équipe d'experts beauté est à votre écoute.</p>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <svg class="w-6 h-6 text-brand-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>123 Avenue des Champs-Élysées<br>75008 Paris, France</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+33 1 23 45 67 89</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>contact@myshop.com</span>
                    </div>
                </div>
            </div>
            
            <!-- Form Section -->
            <div class="md:w-1/2 p-10">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Nom Complet</label>
                        <input type="text" id="name" name="name" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent" placeholder="Votre nom">
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent" placeholder="votre@email.com">
                    </div>
                    
                    <div class="mb-8">
                        <label for="message" class="block text-sm font-bold text-gray-700 uppercase tracking-widest mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full border-gray-300 border-b-2 focus:border-brand-dark outline-none p-2 transition duration-300 bg-transparent" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-300">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection