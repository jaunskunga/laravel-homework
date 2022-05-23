<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $article = Article::create([
           'title' => 'Title 1',
           'description' => 'Long long text',
           'topic' => 'Food', 
        ]);

      $article->save();

    }
}
