<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sauce::create([
            'userId' => 1,
            'name' => 'HELLFIRE FEAR',
            'manufacturer'=> 'BANDANA BOB',
            'description'=> 'Une sauce onctueuse qui arrache la bouche',
            'mainPepper'=> 'Carolina Reaper',
            'imageUrl'=> '',
            'heat'=> 10,
            'likes'=> 0,
            'dislikes'=> 0,
            'usersLikes' => 'user1,user2,user3',
            'usersDislikes' => 'user4',
         ]);

        \App\Models\Sauce::create([
            'userId' => 2,
            'name' => 'HELLFIRE ELIXIR',
            'manufacturer'=> 'WOODY BOURSEMOLE',
            'description'=> 'Une sauce qui vient du tréfonds du volcan',
            'mainPepper'=> 'Pepper X',
            'imageUrl'=> '',
            'heat'=> 8,
            'likes'=> 0,
            'dislikes'=> 0,
            'usersLikes'=> '',
            'usersDislikes'=> '',
        ]);

        \App\Models\Sauce::create([
            'userId' => 3,
            'name' => 'MUERTE DEL MADRE',
            'manufacturer'=> 'MAMA LOUIS',
            'description'=> 'Une sauce que la plus forte des mères a concoctée pour son fils',
            'mainPepper'=> 'Trinidad Moruga Scorpion',
            'imageUrl'=> '',
            'heat'=> 9,
            'likes'=> 0,
            'dislikes'=> 0,
            'usersLikes'=> '',
            'usersDislikes'=> '',
        ]);


            \App\Models\Sauce::create([
            'userId' => 4,
            'name' => 'SAUCE TUNGSTENE',
            'manufacturer'=> 'SENKU ISHIGAMI',
            'description'=> 'Une sauce crée pour tuer ses adversaires',
            'mainPepper'=> 'Ghost Pepper',
            'imageUrl'=> '',
            'heat'=> 10,
            'likes'=> 0,
            'dislikes'=> 0,
            'usersLikes'=> '',
            'usersDislikes'=> '',
        ]);
    }
}
