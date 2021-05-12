<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10
        ];
        for ($i = 0; $i < count($levels); $i++) {
            $level = new Level;
            $level->ability = $levels[$i];
            $level->save();
        }
    }
}
