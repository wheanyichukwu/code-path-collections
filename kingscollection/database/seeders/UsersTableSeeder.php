<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

             // Admin
           [
            
            'full_name'=>'Kelvin Peters',
           'username'=>'Admin',
           'email'=>'admin@gmail.com',
           'password'=>Hash::make('1111'),
           'role'=>'admin',
           'status'=>'active',
           ],

           // Vendor
           [
            'full_name'=>'Kelvin Vendor',
           'username'=>'Vendor',
           'email'=>'vendor@gmail.com', 
           'password'=>Hash::make('1111'),
           'role'=>'vendor',
           'status'=>'active',
           ],

           // Customer
           [
            'full_name'=>'Kelvin customer',
           'username'=>'Customer',
           'email'=>'customer@gmail.com',
           'password'=>Hash::make('111'),
           'role'=>'customer',
           'status'=>'active',
           ],

        ]);
    }
}
