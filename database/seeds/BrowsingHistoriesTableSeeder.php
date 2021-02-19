<?php

use Illuminate\Database\Seeder;

class BrowsingHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('browsing_histories')->insert([
            [
                'id' => 1,
                'video_id' => 1,
                'user_id' => 1,
                'state_button' => false,
            ],
            [
                'id' => 2,
                'video_id' => 2,
                'user_id' => 1,
                'state_button' => true,
            ],
            [
                'id' => 3,
                'video_id' => 1,
                'user_id' => 2,
                'state_button' => true,
            ],
        ]);
    }
}
