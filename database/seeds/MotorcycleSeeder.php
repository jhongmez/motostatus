<?php

use Illuminate\Database\Seeder;
use App\Motorcycle;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motorcycles')->insert([
            [
                'nameMotorcycle'    => 'Gixxer',
                'cc'                => 155,
                'model'             => 2019,
                'soatDate'          => 20200101,
                'taxes'             => 1,
                'taxesDate'         => 20200505,
                'mechanicsDate'     => 20210115,
                'tiresDate'         => 20201224,
                'brakesDate'        => 20200920,
                'oilsDate'          => 20210115,
                'user_id'           => 1,
                'brand_id'          => 1,
                'soat_id'           => 5,
                'mechanic_id'       => 2,
                'tire_id'           => 3,
                'brake_id'          => 3,
                'oil_id'            => 1,
                'created_at'        => now()
            ]
        ]);

        $motorcycle = new Motorcycle;
        
    }
}
