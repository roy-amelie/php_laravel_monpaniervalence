<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
            'name' => 'MODE & ACCESSOIRE',
        ]);
        DB::table('categories')->insert([
            'name' => 'BEAUTÉ & BIEN-ÊTRE',
        ]);
        DB::table('categories')->insert([
            'name' => 'MAISON & DÉCO',
        ]);
        DB::table('categories')->insert([
            'name' => 'ARTISANAT',
        ]);
        DB::table('categories')->insert([
            'name' => 'CULTURE & LOISIRS',
        ]);
        DB::table('categories')->insert([
            'name' => 'SPORT',
        ]);
        DB::table('categories')->insert([
            'name' => 'SANTÉ',
        ]);
        DB::table('categories')->insert([
            'name' => 'SERVICE & DIVERS',
        ]);
    }
}
