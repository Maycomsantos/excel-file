<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'           => 'Michael',
                'email'          => 'michaelsantos.the@hotmail.com',               
                'password'       => Hash::make('12345678'),                                
                'remember_token' => Str::random(10),                
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'name'           => 'Arthur',
                'email'          => 'arthur@hotmail.com',               
                'password'       => Hash::make('12345678'),                                
                'remember_token' => Str::random(10),                
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
