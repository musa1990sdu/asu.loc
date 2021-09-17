<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['namekk'=>'ер','nameru'=>'мужской','nameen'=>'female'],
            ['namekk'=>'әйел','nameru'=>'женский','nameen'=>'male'],
        ];
        foreach ($items as $item){
            Gender::create($item);
        }
    }
}
