<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

use App\Http\Requests\AddArticleRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(12);
        return view('Produits', [
            'articles' => $articles,
            'categorie' => 'Toutes les catégories'
        ]);
    }

    public function byCategory($category)
    {
        $articles = Article::where('categorie', $category)->paginate(12);
        return view('Produits', [
            'articles' => $articles,
            'categorie' => $category
        ]);
    }

    public function create()
    {
        return view('AddArticle');
    }

    public function store(AddArticleRequest $request)
    {
        $validated = $request->validated();

        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();

        Article::create([
            'titre' => $validated['titre'],
            'contenu' => $validated['contenu'],
            'categorie' => $validated['categorie'],
            'image' => $uploadedFileUrl,
            'prix' => $validated['prix']
        ]);

        return redirect('/articles')->with('success', 'Produit ajouté avec succès.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('ShowArticle', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('EditArticle', compact('article'));
    }

    public function update(\App\Http\Requests\EditArticleRequest $request, $id)
    {
        $validated = $request->validated();
        $article = Article::findOrFail($id);

        $article->titre = $validated['titre'];
        $article->contenu = $validated['contenu'];
        $article->categorie = $validated['categorie'];
        $article->prix = $validated['prix'];

        if ($request->hasFile('image')) {
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $article->image = $uploadedFileUrl;
        }

        $article->save();

        return redirect('/articles')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return back()->with('success', 'Produit supprimé avec succès.');
    }

    public function espaceClient()
    {
        // Pour l'exemple : produits aléatoires ou une catégorie spécifique "Solde"
        // Ici on prend 5 produits au hasard
        $articles = Article::inRandomOrder()->take(5)->get();
        return view('espace_client', compact('articles'));
    }

    public function email()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'recipient_email' => $request->input('recipient_email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Envoyer l'e-mail en utilisant la classe Mailable
        Mail::to($data['recipient_email'])->send(new TestMail($data));

        return back()->with('success', 'Email envoyé avec succès !');
    }
}
