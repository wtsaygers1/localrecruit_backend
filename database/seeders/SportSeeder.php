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
        $names = [
            'Spike Ball',
            'Corn Hole',
            'Kan Jam',
            'Competitive Mini Golf'
        ];
        for ($i = 0; $i < count($names); $i++) {
            $sport = new Sport;
            $sport->name = $names[$i];
            $url = str_replace(' ', '', $names[$i]);
            $url = strtolower($url);
            $sport->url = $url;
            $sport->save();
        }
    }
}
