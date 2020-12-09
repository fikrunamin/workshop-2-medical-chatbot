<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseHasTreatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 16; $i++) {
            DB::table('disease_has_treatments')->insert([
                'id_disease' => $i + 1,
                'id_treatment' => $i + 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
