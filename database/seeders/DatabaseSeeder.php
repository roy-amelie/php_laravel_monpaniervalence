<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call([
             CategorySeeder::class,
             ProductSeeder::class,
             UsersSeeder::class,
         ]);

        $ids = range(1, 8);

        Shop::factory()->count(40)->create()->each(function ($shop) use ($ids) {
            shuffle($ids);
            $shop->categories()->attach(array_slice($ids, 0, rand(1, 2)));
        });
    }
}
