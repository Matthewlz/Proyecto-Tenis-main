<?php

namespace Database\Seeders;

use App\Models\PlatoMenu;
use Illuminate\Database\Seeder;

class PlatoMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        PlatoMenu::factory(50)->create();
    }
}
