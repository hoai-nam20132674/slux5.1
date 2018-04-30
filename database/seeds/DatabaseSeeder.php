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

        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);

        // Model::reguard();
        DB::table('users')->insert([
            [
                'name' =>'nam',
                'email' =>'admin@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>1
            ],
            [
                'name' =>'son',
                'email' =>'admin1@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ],
            [
                'name' =>'quang',
                'email' =>'admin1@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ],
            [
                'name' =>'thiet',
                'email' =>'admin3@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ]
            ]
        );
        
    }
}
