<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'fname'=>'Admin',
            'lname'=>'Admin',
            'email'=>'admin@itsolutionstuff.com',
             'is_admin'=>'1',
            'password'=> bcrypt('123456'),
            'phone'=>'8572844684',
            'ip'=>'1234567.IP',
            'browser'=>'abbcccdddd',
            'country'=>'India',
            'device'=>'PC',
            'key'=>'123456',
            'token'=>'123',
            'countrycode'=>'+91',
            'fcmtoken'=>'address',
            'profile'=>'abc.png',
            'state'=>'Punjab',
            'nationality'=>'Indian',
            'gender'=>'Female',
            'date_of_birth'=>'28-12-1999',
            'city'=>'Mohali',
            'pincode'=>'160066',
            'userrole'=>'User',
            'status'=>'Active',

         ]);
         DB::table('users')->insert([
            'fname'=>'User',
            'lname'=>'User',
            'email'=>'user@itsolutionstuff.com',
             'is_admin'=>'0',
            'password'=> bcrypt('123456'),
            'phone'=>'8572844684',
            'ip'=>'1234567.IP',
            'browser'=>'abbcccdddd',
            'country'=>'India',
            'device'=>'PC',
            'key'=>'123456',
            'token'=>'123',
            'countrycode'=>'+91',
            'fcmtoken'=>'address',
            'profile'=>'abc.png',
            'state'=>'Punjab',
            'nationality'=>'Indian',
            'gender'=>'Female',
            'date_of_birth'=>'28-12-1999',
            'city'=>'Mohali',
            'pincode'=>'160066',
            'userrole'=>'User',
            'status'=>'Active',

         ]);
    }
}
