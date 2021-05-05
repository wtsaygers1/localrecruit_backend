<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sport::create([
            'sport_name' => 'spike ball'
        ]);
        Sport::create([
            'sport_name' => 'corn hole'
        ]);
        Sport::create([
            'sport_name' => 'kan jam'
        ]);
        Sport::create([
            'sport_name' => 'pickleball'
        ]);
    }
}
