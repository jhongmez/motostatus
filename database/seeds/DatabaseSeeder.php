<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(BrakeSeeder::class);
        $this->call(MechanicSeeder::class);
        $this->call(OilSeeder::class);
        $this->call(SoatSeeder::class);
        $this->call(TireSeeder::class);
        $this->call(MotorcycleSeeder::class);
    }
}
