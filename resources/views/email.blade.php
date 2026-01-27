@extends('Master_page')

@section('title', 'Envoyer un email')

@section('content')
<div class="bg-brand-light py-20 min-h-[70vh] flex items-center">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto bg-white shadow-2xl rounded-lg overflow-hidden p-10 border-t-4 border-brand-gold">
            <h2 class="text-3xl font-serif text-brand-dark mb-2 italic text-center">Nouveau Message</h2>
            <p class="text-center text-gray-400 text-sm mb-10 uppercase tracking-widest font-light">Envoyez une notification personnalisée</p>

            @include('incs.flash')
            
            <form action="{{ route('send.email') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="recipient_email" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Email du destinataire</label>
                    <input id="recipient_email" type="email" name="recipient_email" required
                        class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent"
                        placeholder="destinataire@exemple.com">
                </div>

                <div>
                    <label for="subject" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Sujet</label>
                    <input id="subject" type="text" name="subject" required
                        class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent"
                        placeholder="Ex: Confirmation de commande">
                </div>

                <div>
                    <label for="message" class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Votre Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full border-gray-200 border-b-2 focus:border-brand-gold outline-none p-3 transition duration-300 bg-transparent"
                        placeholder="Rédigez votre message ici..."></textarea>
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-4 uppercase tracking-widest hover:bg-brand-gold transition duration-500 shadow-lg hover:shadow-brand-gold/20">
                    Transmettre l'email
                </button>
            </form>

            <div class="text-center mt-8">
                <a href="/articles" class="text-gray-400 hover:text-brand-dark transition text-[10px] uppercase tracking-[0.2em] border-b border-transparent hover:border-brand-dark pb-1">
                    Retour à la collection
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
