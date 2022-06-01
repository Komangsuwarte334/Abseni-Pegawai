<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Dika Jaya',
            'level' => '2',
            'email' => 'dika12@gmail.com',
            'password' => bcrypt('dika123'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'komang',
            'level' => '1',
            'email' => 'komangarta@gmail.com',
            'email' => 'komangjaya',
            'password' => bcrypt('komang123'),
            'remember_token' => Str::random(50),
        ]);
    }
}
