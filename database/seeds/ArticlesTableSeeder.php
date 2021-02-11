<?php

use Illuminate\Database\Seeder;
// use \App\Models\Article;

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
        DB::table('Articles')->insert([
            [
                "id" => 1,
                "title" => "test_title",
                "content" => "test_content",
            ],
            [
                "id" => 2,
                "title" => "test_title",
                "content" => "test_content",
            ],
        ]);
    }
}
