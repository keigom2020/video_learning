<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(BrowsingHistoriesTableSeeder::class);
    }
}
