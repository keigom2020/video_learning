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
        DB::table('Articles')->insert([
            // カラムを決める必要がある
            [
                "id" => "1",
                "content" => "test",
            ],
            [
                "id" => "2",
                "content" => "test",
            ],
        ]);
    }
}
