<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $size = Factory::create()->numberBetween(100, 200);
            $hex = Factory::create()->hexColor;
            DB::table('colors')->insert([
                'size' => $size,
                'hex' => $hex,
            ]);
        }
    }
}
