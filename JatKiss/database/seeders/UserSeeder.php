<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // ADMIN
        User::create([
            'nom' => 'ad',
            'prenom' => 'pak',
            'pseudo' => 'admin',
            'role_id' => 1,
            'email' => 'admin@yahoo.fr',
            'email_verified_at' => now(),
            'password' => Hash::make('azerty'),
            'remember_token' => Str::random(10)
        ]);
        // USER
        User::create([
            'nom' => 'ti',
            'prenom' => 'to',
            'pseudo' => 'user',
            'role_id' => 2,
            'email' => 'user@yahoo.fr',
            'email_verified_at' => now(),
            'password' => Hash::make('azerty'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(15)->create();
    }
}
