<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'          =>  'Jhon Edwin', 
            'surname'       =>  'Gomez Marin',
            'email'         =>  'gmezjhon@gmail.com',
            'password'      =>  bcrypt('admin'),
            'role'          =>  'admin',
            'created_at'    =>  now(),
        ]);

        $usr = new User;
        $usr->name          = 'Homero';
        $usr->surname       = 'Simpson';
        $usr->email         = 'homero@gmail.com';
        $usr->password      = bcrypt('user');
        $usr->created_at    = now();
        $usr->save();

        factory(User::class, 4)->create();
    }
}
