<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'email' => 'test@gmail.com',
            'password' => bcrypt('toto')
        ]);
        User::factory()->create([
            'email' => 'test2@gmail.com',
            'password' => bcrypt('toto2')
        ]);
    }
}
