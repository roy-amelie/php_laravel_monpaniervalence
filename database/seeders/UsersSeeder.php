<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'retailer',
            'email'=>'retailer@gmail.com',
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'lastname' => 'Bezos',
            'firstname'=> 'Jeff',
            'birthdate' => '2012-01-19',
            'phone' => '0624490802',
            'city' => 'Montélimar',
            'zip_code' => 26200,
            'address' => '7 rue de la Gare',
            'role' => 'Commerçant',
            'gender' => 'male'
        ]);

        DB::table('users')->insert([
            'name'=>'customer',
            'email'=>'customer@gmail.com',
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'lastname' => 'Trump',
            'firstname'=> 'Donald',
            'birthdate' => '2012-01-19',
            'phone' => '0624490802',
            'city' => 'Montélimar',
            'zip_code' => 26200,
            'address' => '7 rue de la Gare',
            'role' => 'Client',
            'gender' => 'female'
        ]);
    }
}
