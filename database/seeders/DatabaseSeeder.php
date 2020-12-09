<?php

namespace Database\Seeders;

use App\Models\DiseaseHasTreatment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DiseasesSeeder::class,
            SymptomsSeeder::class,
            DiseaseHasSymptomSeeder::class,
            DiseaseHasTreatmentsSeeder::class,
        ]);
    }
}
