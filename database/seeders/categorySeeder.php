<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Shoes',
            'view' => rand(1,112),
        ]);
        DB::table('categories')->insert([
            'name' => 'Shirts',
            'view' => rand(1,112),
        ]);
        DB::table('categories')->insert([
            'name' => 'Pants',
            'view' => rand(1,112),
        ]);
        DB::table('categories')->insert([
            'name' => 'Coats',
            'view' => rand(1,112),
        ]);
        DB::table('categories')->insert([
            'name' => 'Polo Shirt',
            'view' => rand(1,112),
        ]);
    }
}
