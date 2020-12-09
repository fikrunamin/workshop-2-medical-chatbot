<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseHasSymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['1', '2', '3'],
            ['7', '1', '4', '8', '5', '6'],
            ['7', '9', '10'],
            ['11', '12'],
            ['11', '13', '14', '15'],
            ['2', '16', '17', '18'],
            ['2', '5', '6', '19', '20'],
            ['7', '1', '4', '8', '2'],
            ['21', '22', '23', '24'],
            ['26', '25', '11'],
            ['25', '26', '27', '28'],
            ['26', '29'],
            ['7', '30', '31'],
            ['7', '16', '32', '33'],
            ['26', '34', '35', '36'],
            ['7', '16', '2', '19', '37']
        ];

        for ($i = 0; $i < count($data); $i++) {
            for ($j = 0; $j < count($data[$i]); $j++) {
                DB::table('disease_has_symptoms')->insert([
                    'id_disease' => array_keys($data)[$i] + 1,
                    'id_symptom' => $data[$i][$j],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
