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
            // 'https://i1.wp.com/skybacherslocker.com/wp-content/uploads/2015/09/spikeball_skybacher_d.jpg',
            // 'https://cdn.cornholeboards.us/medium/blog/blog-post/20.jpg',
            // 'https://i2.wp.com/skybacherslocker.com/wp-content/uploads/2019/04/can_jam.jpg',
            // 'https://lh3.googleusercontent.com/proxy/j3ebUVrsmLD4Ah0sGGDJ_uxAZy27xXRt8INwOE8quBu_huGP3o-yrLBxgw-wLlFNBs2SNgrBo15oGRmANy2NAVSccuzUkSg'
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
