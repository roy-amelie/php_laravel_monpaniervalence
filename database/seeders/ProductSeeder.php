<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bermuda',
            'description' => 'Personne en met mais nous on en vend',
            'price' => 10,
            'quantity' => 10,
            'shop_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Pommade qui rend beau',
            'description' => 'Ceci est une pommade qui vous donnera la capacité de pécho',
            'price' => 50000,
            'weight' => 1,
            'quantity' => 1,
            'shop_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Villa sur la côte',
            'description' => 'Soulever votre t-shirt, vous avez une maison sur la côte',
            'shop_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Marteau',
            'description' => 'Et si vous aviez un marteau ? Cognerez-vous la nuit ?',
            'price' => 10,
            'quantity' => 10,
            'shop_id' => 4,
        ]);
        DB::table('products')->insert([
            'name' => 'Séjour en Meurthe et Moselle',
            'description' => "Si si, c'est pas mal",
            'price' => 1000,
            'shop_id' => 5,
        ]);
        DB::table('products')->insert([
            'name' => 'Vélo de folie',
            'description' => 'Ceci est un vélo de folie qui va très vite',
            'price' => 1000,
            'weight' => 10,
            'quantity' => 10,
            'shop_id' => 5,
        ]);
        DB::table('products')->insert([
            'name' => 'Xanax',
            'description' => 'Pas plus que un à la fois',
            'price' => 10,
            'shop_id' => 5,
        ]);
        DB::table('products')->insert([
            'name' => 'SERVICES & DIVERS',
            'name' => 'Coupe homme',
            'description' => 'Coupe homme classique',
            'price' => 15,
            'shop_id' => 1,
        ]);
    }
}
