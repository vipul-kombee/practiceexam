<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    public function run()
    {
        $states = [
            ['name' => 'Gujarat'],
            ['name' => 'Maharashtra'],
            ['name' => 'Rajasthan'],
            ['name' => 'Uttar Pradesh'],
            ['name' => 'Karnataka'],
            ['name' => 'Tamil Nadu'],
            ['name' => 'West Bengal'],
            ['name' => 'Madhya Pradesh'],
            ['name' => 'Bihar'],
            ['name' => 'Punjab']
        ];

        State::insert($states);
    }
}
