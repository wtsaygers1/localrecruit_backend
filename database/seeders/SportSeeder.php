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

    // IN FUTURE CONVERT TO USING OBJECTS AND NOT A BUNCH OF ARRAYS
    public function run()
    {
        $names = [
            'Spike Ball',
            'Corn Hole',
            'Kan Jam',
            'Competitive Mini Golf'
        ];
        $descriptions = [
            'An inverted version of volleyball that involves hand eye coordination and agility',
            'Corn Hole is a laid back affair tossing bean bags onto a board with a partner',
            'Kan Jam involves frisbee skills and a mixture of finesse and power',
            'Mini golf is a classic pastime focusing on the putting aspect of golf mixing in obstacles'
        ];
        $images = [
            'https://media.giphy.com/media/U23hzcClCNaHpfljfs/giphy.gif',
            'https://media.giphy.com/media/kcfR8c12KYjoZ8jrCK/giphy.gif',
            'https://media.giphy.com/media/U6kQzI2SzYahnAyVtt/giphy.gif',
            'https://media.giphy.com/media/f4JUFPBxrnLb1M2InN/giphy.gif'
        ];
        for ($i = 0; $i < count($names); $i++) {
            $sport = new Sport;
            $sport->name = $names[$i];
            $sport->description = $descriptions[$i];
            $sport->image_url = $images[$i];
            $url = str_replace(' ', '', $names[$i]);
            $url = strtolower($url);
            $sport->url = $url;
            $sport->save();
        }
    }
}
