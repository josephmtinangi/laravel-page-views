<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\User', 5)->create();

        $articles = $users->each(function ($user) {
            factory('App\Article', 3)->create(['user_id' => $user->id]);
        });

        $articles->each(function ($article) {
            factory('App\Comment', 2)->create(['article_id' => $article->id]);
        });
    }
}
