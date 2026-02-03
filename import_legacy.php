<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use App\Models\Article;

$oldArticles = DB::select('SELECT * FROM `bouchra-baidouch8_laravel`.articles');

foreach ($oldArticles as $old) {
    Article::create([
        'titre' => $old->titre,
        'contenu' => $old->contenu,
        'image' => $old->image,
        'categorie' => 'Anciens', // Grouping them
        'prix' => 0.00 // Default price as it was missing
    ]);
}

echo "Imported " . count($oldArticles) . " old articles.";
