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
                "content" => "test_content1",
            ],
            [
                "id" => 2,
                "title" => "test_title",
                "content" => "test_content2",
            ],
            [
                "id" => 3,
                "title" => "test_title",
                "content" => "test_content3",
            ],
            [
                "id" => 4,
                "title" => "test_title",
                "content" => "test_content4",
            ],
        ]);
    }
}
