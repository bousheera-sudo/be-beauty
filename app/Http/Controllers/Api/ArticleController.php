<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function filtrer(Request $request)
    {
        $query = $request->input('p');
        // Recherche par titre ou contenu
        $articles = Article::where('titre', 'like', "%$query%")->get();
        return response()->json($articles);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'required|image|max:2048', // Validation fichier image
            'prix' => 'required|numeric|min:0',
        ]);

        // Upload physique vers Cloudinary
        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();

        $article = Article::create([
            'titre' => $request->input('titre'),
            'categorie' => $request->input('categorie'),
            'contenu' => $request->input('contenu'),
            'image' => $uploadedFileUrl,
            'prix' => $request->input('prix'),
        ]);

        return response()->json([
            'message' => 'Article ajouté avec succès!',
            'article' => $article
        ], 201);
    }
}
