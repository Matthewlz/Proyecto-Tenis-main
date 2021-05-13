<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeria;
use Symfony\Component\Finder\Glob;

class GaleriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Galeria::create([
            'title'=>'Hola',
            'image_path'=>'VYotU1dTj0BHYnQ6igsC3eZzezqBpV0tl2GjloWo.jpg',
            'description'=>'descripcio imatge'
        ]);
        Galeria::factory(50)->create();
    }
}
