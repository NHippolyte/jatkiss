<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestation;

class PrestationSeeder extends Seeder
{
    
    public function run(): void
    {
        Prestation::create([
            'nom' => 'Music'
        ]);
        Prestation::create([
            'nom' => 'Photo'
        ]);
    }
}
