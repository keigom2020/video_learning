<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'title' => '保険について勉強しよう1',
                'video_url' => 502084279,
                'image_src' => '',
                'detail' => '保険について説明します。',
                'content' => 'まず保険の歴史や役割について解説します。',
                'author' => '山田義昭',
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'title' => '保険について勉強しよう2',
                'video_url' => 502084279,
                'image_src' => '',
                'detail' => '保険商品について説明します。',
                'content' => '保険商品の代表例について解説します。',
                'author' => '山田義昭',
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'title' => '保険について勉強しよう3',
                'video_url' => 502084279,
                'image_src' => '',
                'detail' => 'それぞれの保険商品のメリットについて説明します。',
                'content' => 'それぞれの保険商品のメリットについて解説します。',
                'author' => '山田義昭',
            ],
        ]);
    }
}
