<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call(UserTableSeeder::class);
        // $this->call(UserSeeder::class);

        // Model::reguard();
        DB::table('users')->insert([
            [
                'username' =>'admin',
                'email' =>'admin@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>1
            ]
        ]);
    }
}
