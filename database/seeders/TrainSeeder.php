<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $trains_data = [
        [
        "company"=> "MyCompany",
        "departure_station"=> "Roma",

        "arrival_station"=> "Milano",

        "departure_time"=> "2024-03-21 13:00:00",

        "arrival_time"=> "2024-03-21 15:00:00",
        "train_code"=> "12333",
        "wagons_number"=> 12
    ],
    [
        "company"=> "MyCompany",
        "departure_station"=> "Roma",

        "arrival_station"=> "Milano",

        "departure_time"=> "2024-03-21 13:00:00",

        "arrival_time"=> "2024-03-21 15:00:00",
        "train_code"=> "12333",
        "wagons_number"=> 12
    ],
    [
        "company"=> "MyCompany",
        "departure_station"=> "Roma",

        "arrival_station"=> "Milano",

        "departure_time"=> "2024-03-21 13:00:00",

        "arrival_time"=> "2024-03-21 15:00:00",
        "train_code"=> "12333",
        "wagons_number"=> 12
    ],
    ];
    foreach ($trains_data as $train_data)
    {
        $train = new Train;
        $train->company = $train_data ["company"];
        $train->departure_station = $train_data ["departure_station"];
        $train->arrival_station = $train_data ["arrival_station"];
        $train->departure_time = $train_data ["departure_time"];
        $train->arrival_time = $train_data ["arrival_time"];
        $train->train_code = $train_data ["train_code"];
        $train->wagons_number = $train_data ["wagons_number"];
        $train->save();
        
    }
} 
}
