<?php

namespace Database\Seeders;

use CreateCategoriesTable;
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
            CategoriesTableSeeder::class,
            ContentsTableSeeder::class,
        ]);
        }
}
