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
        $train = new Train;
        $train->company = "MyComany";
        $train->departure_station = "Roma";
        $train->arrival_station = "Milano";
        $train->departure_time = "2024-03-21 13:00:00";
        $train->arrival_time = "2024-03-21 15:00:00";
        $train->train_code = "12333";
        $train->wagons_number = 12;
        $train->save();
        
    }
}
