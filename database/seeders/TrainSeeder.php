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

        $file = fopen(__DIR__ . "/../csv/train.csv", "r");
        $first_line = true;
        while (!feof($file)) {
            if (!$first_line) {
                $train_data = fgetcsv($file);
                $train = new Train;
                $train->company = $train_data[0];
                $train->departure_from = $train_data[1];
                $train->arrival_in = $train_data[2];
                $train->time_of_departure = $train_data[3];
                $train->time_of_arrival = $train_data[4];
                $train->train_code = $train_data[5];
                $train->coaches = $train_data[6];
                $train->in_time = $train_data[7];
                $train->canceled = $train_data[8];
                $train->save();
            }
            $first_line = false;

        }

        // $train = new Trains;
        // $train->company = "Trenitalia";
        // $train->departure_from = "Roma";
        // $train->arrival_in = "Milano";
        // $train->time_of_departure = "2024-03-30 15:39:38";
        // $train->time_of_arrival = "2024-03-30 15:39:38";
        // $train->train_code = 11921;
        // $train->coaches = 9;
        // $train->in_time = 1;
        // $train->canceled = 0;
        // $train->save();

    }
}
