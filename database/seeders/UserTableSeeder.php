<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        DB::table('users')->insert([
            [
                'full_name'=>'Milan Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],
            // Vendor
            [
                'full_name'=>'Milan Vendor',
                'username'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'vendor',
                'status'=>'active',
            ],
            // Customer
            [
                'full_name'=>'Milan Customer',
                'username'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'customer',
                'status'=>'active',
            ],]
            );
    }
}
