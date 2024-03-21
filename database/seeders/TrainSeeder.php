<?php

namespace Database\Seeders;

use App\Models\Trains;
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
        $train = new Trains;
        $train->company = "Trenitalia";
        $train->departure_from = "Roma";
        $train->arrival_in = "Milano";
        $train->time_of_departure = "2024-03-30 15:39:38";
        $train->time_of_arrival = "2024-03-30 15:39:38";
        $train->train_code = 11921;
        $train->coaches = 9;
        $train->in_time = 1;
        $train->canceled = 0;
        $train->save();

    }
}
