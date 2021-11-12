<?php

namespace Database\Seeders;

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
        $cates = [
            ['name' => 'Hải sản'],
            ['name' => 'Rau thơm'],
            ['name' => 'Thịt lợn'],
            ['name' => 'Thịt bò'],
            ['name' => 'Rau'],
            ['name' => 'Gia vị'],
        ];
        DB::table('categories')->insert($cates);
    }
}