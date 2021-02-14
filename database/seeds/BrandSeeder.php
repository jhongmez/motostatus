<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brands')->insert([
            [
                'name'          => 'Suzuki',
                'description'   => 'Marca de motocicletas Japonesas',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Yamaha',
                'description'   => 'Marca de motocicletas Japonesas',
                'created_at'    => now(),
            ],
            [
                'name'          => 'Honda', 
                'description'   => 'Marca de motocicletas Japonesas', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'AKT', 
                'description'   => 'Marca de motocicletas Chinas', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Bajaj', 
                'description'   => 'Marca de motocicletas Chinas', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Kawasaki', 
                'description'   => 'Marca de motocicletas Japonesas', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'Ducati', 
                'description'   => 'Marca de motocicletas Bolonia', 
                'create_at'     => now(),
            ],
            [
                'name'          => 'KTM', 
                'description'   => 'Marca de motocicletas Austria', 
                'create_at'     => now(),
            ]
        ]);

        $brand = new Brand;
        
    }
}
