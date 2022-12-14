<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return static
     */
    public function run()
    {
         $faker = Faker::create();
         for($i=0;$i < 10 ; $i++){
            $category = new Category;
            $category->title = $faker->name;
            $category->save();
         }
         
    }
}
