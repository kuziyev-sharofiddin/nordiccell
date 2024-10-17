<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'White',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Red',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Green',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Blue',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Yellow',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Orange',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Purple',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Pink',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Brown',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Black',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Gray',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Cyan',
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Magenta',
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Lime',
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Navy',
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Olive',
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Teal',
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Maroon',
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Gold',
                ),
        ));
    }
}
