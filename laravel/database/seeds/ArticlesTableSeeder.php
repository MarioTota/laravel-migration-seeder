<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $data = $faker->datetime();

            $newArticle = New Article();
            $newArticle->title = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $newArticle->subtitle = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $newArticle->author = $faker->word;
            $newArticle->text = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $newArticle->publication_date = $faker->date($format = 'Y-m-d', $max = 'now');
            $newArticle->created_at = $data;
            $newArticle->updated_at = $data;
            $newArticle->save();
        }
    }
}
            // $table->id();
            // $table->string('title');
            // $table->string('subtitle');
            // $table->string('author');
            // $table->text('text');	
            // $table->date('publication_date');
            // $table->timestamps();