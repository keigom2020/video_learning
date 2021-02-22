<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
                [
                    'id' => 1,
                    'name' => 'test',
                    'email' => 'test@gmail.com',
                    'password' => 'testtest',
                    'role' => 1,
                ],
                [
                    'id' => 2,
                    'name' => 'test2',
                    'email' => 'test2@gmail.com',
                    'password' => 'testtest',
                    'role' => 4,
                ],
                [
                    'id' => 3,
                    'name' => 'test3',
                    'email' => 'test3@gmail.com',
                    'password' => 'testtest',
                    'role' => 4,
                ],
            ]);
        }
    }
}
