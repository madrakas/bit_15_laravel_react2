<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $size = Factory::create()->randomNumber(1, 100);
            $hex = Factory::create()->hexColor;
            DB::table('colors')->insert([
                'size' => $size,
                'hex' => $hex,
            ]);
        }
    }
}
