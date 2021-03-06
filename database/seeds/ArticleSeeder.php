<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 30; $i++) {
        $newArticle = new Article;
        $newArticle->titolo = $faker->sentence(3);
        $newArticle->autore = $faker->name();
        $newArticle->contenuto = $faker->paragraph(20);
        $newArticle->save();
        }

    }
}
