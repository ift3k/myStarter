<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Ifte Kharul Islam',
            'email' => 'ifte@localhost.com',
            'user_id' => 'admin',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dummy User',
            'email' => 'user@localhost.com',
            'user_id' => 'user',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dummy Author',
            'email' => 'author@localhost.com',
            'user_id' => 'author',
            'password' => bcrypt('123456'),
        ]);
    }
}
