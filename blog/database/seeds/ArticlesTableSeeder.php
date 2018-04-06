<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i<10; $i++) { // pr générer une date aléatoire (pour le created_at) entre auj. et les 10 derniers jrs
            $int= mt_rand(1522852170 ,1523716170);
            $string = date("Y-m-d H:i:s",$int);
            $article = str_random(10);

        DB::table('articles')->insert([
            'title'      => str_random(10),
            'content'    => str_random(100),
            'is_enabled' => (bool)random_int(0, 1), // PHP 7 - Aléatoirement true ou false
            //'is_enabled' => rand(0,1) == 1; // PHP 5
            'created_at' => $string,
            // 'slug'=> str_slug('$article','-')//slug est la partie d'une URL qui identifie le titre d'un article
            //$slug = str_slug('Laravel 5 Framework', '-');
            ]);
        }


    }
}
