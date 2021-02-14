<?php

use Illuminate\Database\Seeder;
use App\Oil;


class OilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oils')->insert([
            [
                'name'          => 'IPONE',
                'description'   => 'Aceite de Francia',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Motul',
                'description'   => 'Aceite de Francia',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Shell Advanced', 
                'description'   => 'Aceite de Londres', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Mobil', 
                'description'   => 'Aceite de Estados Unidos', 
                'create_at'     => now(),
            ]
        ]);

        $oil = new Oil;

    }
}
