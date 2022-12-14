<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return static
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<10;$i++){
        $user = new User;
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = $faker->password;
        $user->phone_number = $faker->phoneNumber;
        $user->university_name = $faker->sentence;
        $user->depertment = $faker->sentence;
        $user->university_id = $faker->unique()->randomDigit;
        $user->area_of_interest = $faker->sentence;
        $user->image = $faker->imageUrl($width = 200, $height = 200);
        //dd($request->file('image'));
        $user->status = 1;
        $user->save();
        }
    }
}
