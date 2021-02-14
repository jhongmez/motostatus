<?php

use Illuminate\Database\Seeder;
use App\Mechanic;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mechanics')->insert([
            [
                'name'          => 'Canguro',
                'description'   => 'Centro de diagnostico automotriz',
                'created_at'    => now(),
            ],
            [
                'name'          => 'CDA de las Motos',
                'description'   => 'Centro de diagnostico automotriz',
                'created_at'    => now(),
            ],
            [
                'name'          => 'CDA', 
                'description'   => 'Centro de diagnostico automotriz', 
                'create_at'     => now(),
            ]
        ]);

        $mechanic = new Mechanic;

    }
}
