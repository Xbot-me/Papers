<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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


        $user = new User;
        $user->name = $faker->name;
        $user->email = "demo@gmail.com";
        $user->password = Hash::make("123456789");
        $user->phone_number = $faker->phoneNumber;
        $user->university_name = $faker->sentence;
        $user->depertment = $faker->sentence;
        $user->university_id = $faker->unique()->randomDigit;
        $user->area_of_interest = $faker->sentence;
        $user->image = $faker->imageUrl($width = 200, $height = 200);
        //$user->pdf = $faker->imageUrl($width = 200, $height = 200);
        //dd($request->file('image'));
        $user->status = 1;
        $user->save();

    }
}
