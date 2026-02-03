<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $categories = ['Visage', 'Cheveux', 'Corps', 'Maquillage', 'Parfums'];
        $nomProduits = [
            'Visage' => ['Crème Hydratante Royale', 'Sérum Éclat Or', 'Masque Purifiant Argile', 'Huile Précieuse Nuit', 'Tonique Apaisant Rose'],
            'Cheveux' => ['Shampoing Réparateur Kératine', 'Masque Capillaire Soie', 'Huile Sèche Argan', 'Sérum Pointes Abîmées', 'Spray Volume Intense'],
            'Corps' => ['Lait Corps Velours', 'Gommage Sucre Doré', 'Beurre de Karité Fouetté', 'Huile Scintillante', 'Gel Douche Luxe'],
            'Maquillage' => ['Rouge à Lèvres Mat', 'Fond de Teint Lumière', 'Mascara Volume', 'Palette Ombres Dorées', 'Highlighter Liquide'],
            'Parfums' => ['Eau de Parfum Florale', 'Essence de Oud', 'Brume Légère Vanille', 'Parfum Absolu Rose', 'Eau de Toilette Agrumes']
        ];

        for ($i = 0; $i < 30; $i++) {
            $categorie = $faker->randomElement($categories);
            $titre = $faker->randomElement($nomProduits[$categorie]) . ' ' . $faker->suffix;

            Article::create([
                'titre' => $titre,
                'contenu' => $faker->paragraph(3),
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdd403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'categorie' => $categorie,
                'prix' => $faker->randomFloat(2, 50, 500)
            ]);
        }
    }
}
