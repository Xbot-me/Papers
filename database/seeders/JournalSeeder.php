<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journal;
use Seeders\CategorySeeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<10;$i++){
            $journal = new Journal;
            $journal->title = $faker->title;
            $journal->abstract = $faker->sentence;
            //$journal->keywards = $request->input('keywards');
            $journal->keywards = $faker->sentence;
            //dd($request->keywords);
            $journal->jdate = $faker->date();
            $journal->a1fname = $faker->name;
            $journal->a1lname = $faker->name;
            $journal->a1affiliation = $faker->sentence;
            $journal->a1email = $faker->email;
            $journal->a2fname = $faker->name;
            $journal->a2lname = $faker->name;
            $journal->a2affiliation = $faker->sentence;
            $journal->a2email = $faker->email;
            $journal->a3fname = $faker->name;
            $journal->a3lname = $faker->name;
            $journal->a3affiliation = $faker->sentence;
            $journal->a3email = $faker->email;
            $journal->a4fname = $faker->name;
            $journal->a4lname = $faker->name;
            $journal->a4affiliation = $faker->sentence;
            $journal->a4email = $faker->email;
          //  $journal->category_id = function(){
           //     return Category::factory()->create(['user_id'=>$category->id]);
          //  };
          //  $journal->user_id = function(){
          //      return factory(App\User::class)->create(['user_id'=>$user->id]);
         //   };
            $journal->save();
        }
    }
}
