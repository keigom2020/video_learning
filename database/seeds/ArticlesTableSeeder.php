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
        DB::table('articles')->insert([
            [
                "id" => 1,
                "title" => "3つの具体的事例（マネーリテラシー教育）",
                "content" => "記事の内容です。記事の内容です。記事の内容です。
                
                
                記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。
                記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。
                
                記事の内容です。",
            ],
            [
                "id" => 2,
                "title" => "3つの具体的事例（マネーリテラシー教育）",
                "content" => "記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。",
            ],
            [
                "id" => 3,
                "title" => "3つの具体的事例（マネーリテラシー教育）",
                "content" => "記事の内容です。
                
                記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。
                
                記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。",
            ],
            [
                "id" => 4,
                "title" => "平均貯蓄額多くない？",
                "content" => "記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。記事の内容です。",
            ],
        ]);
    }
}
