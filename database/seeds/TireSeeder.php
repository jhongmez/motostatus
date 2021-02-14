<?php

use Illuminate\Database\Seeder;
use App\Tire;


class TireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tires')->insert([
            [
                'name'          => 'KENDA',
                'description'   => 'Automaticos para motocicleta',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Michelin',
                'description'   => 'Automaticos para motocicleta',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Pirelli', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'CORSA', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Metzeler', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Continental', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Bridgestone', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Bridgestone', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Dunlop', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Kontrol', 
                'description'   => 'Automaticos para motocicleta', 
                'create_at'     => now(),
            ]
            
        ]);

        $tire = new Tire;

    }
}
