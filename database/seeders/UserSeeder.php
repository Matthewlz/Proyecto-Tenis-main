<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.p
     *
     * @return void
     */
    public function run() {
        User::create([
            'name'=>'Matthew López',
            'email'=>'m.lopez3@sapalomera.cat',
            'phone'=>'972371875',
            'dni'=>'457287272L',
            'address'=>'carrer aigua viva nº12',
            'town'=>'Lloret de mar',
            'postal_code'=>'17310',
            'province'=>'Girona',
            'health_card'=>'030101002',
            'password'=>bcrypt('ringoringo13')
        ])->assignRole('Admin');

        User::factory(50)->create();
    }
}
