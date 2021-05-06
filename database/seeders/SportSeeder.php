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
        $sport_names = [
            'spike ball',
            'corn hole',
            'kan jam',
            'pickleball'
        ];
        for($i = 0; $i<count($sport_names); $i++){
            $sport = new Sport;
            $sport->sport_name = $sport_names[$i];
            $sport->save();
        }
    }
}
                // Sport::create([
                //     'sport_name' => 'spike ball'
                // ]);
                // Sport::create([
                //     'sport_name' => 'corn hole'
                // ]);
                // Sport::create([
                //     'sport_name' => 'kan jam'
                // ]);
                // Sport::create([
                //     'sport_name' => 'pickleball'
                // ]);
