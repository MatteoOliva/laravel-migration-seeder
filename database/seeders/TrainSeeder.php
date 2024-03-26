<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    // $trains_data = [
    //     [
    //     "company"=> "MyCompany",
    //     "departure_station"=> "Roma",

    //     "arrival_station"=> "Milano",

    //     "departure_time"=> "2024-03-21 13:00:00",

    //     "arrival_time"=> "2024-03-21 15:00:00",
    //     "train_code"=> "12333",
    //     "wagons_number"=> 12
    // ],
    // [
    //     "company"=> "MyCompany",
    //     "departure_station"=> "Roma",

    //     "arrival_station"=> "Milano",

    //     "departure_time"=> "2024-03-21 13:00:00",

    //     "arrival_time"=> "2024-03-21 15:00:00",
    //     "train_code"=> "12333",
    //     "wagons_number"=> 12
    // ],
    // [
    //     "company"=> "MyCompany",
    //     "departure_station"=> "Roma",

    //     "arrival_station"=> "Milano",

    //     "departure_time"=> "2024-03-21 13:00:00",

    //     "arrival_time"=> "2024-03-21 15:00:00",
    //     "train_code"=> "12333",
    //     "wagons_number"=> 12
    // ],
    // ];
    // foreach ($trains_data as $train_data)
    // {
        $train = new Train;
        // $train->fill($train_data);
        $train->company = $faker->company();
        $train->departure_station = $faker->address();
        $train->arrival_station = $faker->address();
        $train->departure_time = $faker->date() . " " . $faker->time();
        $train->arrival_time = $faker->date() . " " . $faker->time(); 

        $train_code = "";
        for($i = 0; $i < 5; $i++) {
            $train_code .= $faker->randomLetter();
        }

        $train->train_code = $train_code;

        $train->wagons_number = $faker->numberBetween(4, 30);

        $train->save();
        
    // }
} 
}
