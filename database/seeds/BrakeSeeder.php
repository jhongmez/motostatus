<?php

use Illuminate\Database\Seeder;
use App\Brake;

class BrakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brakes')->insert([
            [
                'name'          => 'Generica',
                'description'   => 'Marca de pastillas sin procedencia',
                'created_at'    => now(),
            ],
            [
                'name'          => 'KROSS',
                'description'   => 'Marca de pastillas de Colombia',
                'created_at'    => now(),
            ],
            [
                'name'          => 'OSAKA', 
                'description'   => 'Marca de pastillas de Colombia', 
                'create_at'     => now(),
            ]
        ]);

        $brake = new Brake;
    }
}
