<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'id' => 1,
                'name' => '保険',
            ],
            [
                'id' => 2,
                'name' => '不動産',
            ],
            [
                'id' => 3,
                'name' => '証券投資',
            ]
        ]);
    }
}
