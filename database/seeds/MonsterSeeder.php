<?php

use Illuminate\Database\Seeder;
use App\Monster;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $monster = new Monster;
        $monster -> name = 'Chuckie';
        $monster -> color = 'orange';
        $monster -> size = 'small';
        $monster -> image = 'images/monsters/chuckie.jpg';
        $monster -> weight = '10 lbs';

        $monster->save();

    }
}
