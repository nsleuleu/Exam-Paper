<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        DB::table('categories')->insert([[
                'id' => 1,
                'name' => 'kengNam',
                'description' => 'kengNam',
                'image' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ],
            [
                'id' => 2,
                'name' => 'kengNam',
                'description' => 'kengNam',
                'image' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ],
            [
                'id' => 3,
                'name' => 'kengNam',
                'description' => 'kengNam',
                'image' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ],
            [
                'id' => 4,
                'name' => 'kengNam',
                'description' => 'kengNam',
                'image' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ],
            [
                'id' => 5,
                'name' => 'kengNam',
                'description' => 'kengNam',
                'image' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ]]
        );
    }
}
