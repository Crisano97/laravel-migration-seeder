<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        //
        $trains = [
            [
                "agency" => 'Trenitalia',
                "departure_station" => 'Napoli',
                "arrival_station" => 'Milano',
                "departure_time" => '08:15:00',
                "arrival_time" => '13:15:00',
                "train_code" => '13212dasds',
                "number_of_carriages" => '10',
                "is_in_time" => 1,
                "is_cancelled" => 0,
                "departure_data" => '2022-09-09 08:15:00'
            ],
            [
                "agency" => 'Metronapoli SpA',
                "departure_station" => 'Napoli Garibaldi',
                "arrival_station" => 'Napoli Fuorigrotta',
                "departure_time" => '08:15:00',
                "arrival_time" => '09:15:00',
                "train_code" => 'a5234hjj',
                "number_of_carriages" => '8',
                "is_in_time" => 1,
                "is_cancelled" => 0,
                "departure_data" => '2022-09-09 08:15:00'
            ],
            [
                "agency" => 'Italo',
                "departure_station" => 'Bologna',
                "arrival_station" => 'Roma',
                "departure_time" => '17:30:00',
                "arrival_time" => '20:35:00',
                "train_code" => '345hjhsdj',
                "number_of_carriages" => '9',
                "is_in_time" => 1,
                "is_cancelled" => 0,
                "departure_date" => '2022-09-09 17:30:00'
            ],
        ];

        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_cancelled = $train['is_cancelled'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->save();
        }
    }
}
