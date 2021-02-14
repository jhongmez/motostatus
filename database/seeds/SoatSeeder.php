<?php

use Illuminate\Database\Seeder;
use App\Soat;


class SoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soats')->insert([
            [
                'name'          => 'Axa Colpatria Seguros S.A',
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Seguros Bolivar S.A',
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito',
                'created_at'    => now(),
            ],
            [
                'name'          => 'La Equidad Seguros Generales Organismo Cooperativo', 
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Liberty Seguros S.A', 
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'SURA', 
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Allianz Colombia', 
                'description'   => 'Seguro Obligatorio de Accidentes de Tránsito', 
                'create_at'     => now(),
            ]
        ]);

        $soat = new Soat;

    }
}
