<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'agis mandala',
                'email' => 'agis@email.com',
                'password' => bcrypt('password'),
                'occupation' => 'Administrator',
                'is_admin' => true,
            ]
        ];

        User::insert($user);
    }
}
