<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $newArticle = New Article();
            $newArticle->title = 'ciao';
            $newArticle->subtitle = 'ciao';
            $newArticle->author = 'ciao';
            $newArticle->text = 'ciao';
            $newArticle->publication_date = '';
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