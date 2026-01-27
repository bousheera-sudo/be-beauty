<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce - {{ $categorie }}</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; }
        .product-card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .product-card img { max-width: 100%; height: auto; border-radius: 4px; }
        .category-tag { background: #eee; padding: 2px 8px; border-radius: 4px; font-size: 0.8em; }
        h1 { color: #333; border-bottom: 2px solid #333; padding-bottom: 10px; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 15px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="/">Accueil</a>
            <a href="/articles">Tous les produits</a>
        </div>

        <h1>{{ $categorie }}</h1>

        @if($articles->isEmpty())
            <p>Aucun article trouvé dans cette catégorie.</p>
        @else
            <div class="product-grid">
                @foreach($articles as $article)
                    <div class="product-card">
                        <img src="{{ $article->image }}" alt="{{ $article->titre }}">
                        <h3>{{ $article->titre }}</h3>
                        <p><span class="category-tag">{{ $article->categorie }}</span></p>
                        <p>{{ Str::limit($article->contenu, 100) }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
