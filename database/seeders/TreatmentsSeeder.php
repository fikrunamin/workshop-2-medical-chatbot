<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treatments = [
            ['Open up (incise) and drain the abscess. The dentist will make a small cut into the abscess, allowing the pus to drain out, and then wash the area with salt water (saline).'],
            ['Open up (incise) and drain the abscess. The dentist will make a small cut into the abscess, allowing the pus to drain out, and then wash the area with salt water (saline).'],
            ['Control the pain with a dressing material and use postoperative analgesics such as NSAIDs.'],
            ['Correcting tooth brushing habits and avoiding the very frequent consumption of excessively acidic substances such as lemons.'],
            ['Prescribing muscle relaxants.'],
            ['Use antibacterial toothpaste,brush your teeth more effectively and use an Antibacterial Mouthwashand.'],
            ['Tooth extractions'],
            ['Rinse using saltwater and using painkillers.'],
            ['Lip balm or thick emollient ointment, applied frequently and topical antiseptics.'],
            ['Fluoride treatments.'],
            ['Use dental fillings.'],
            ['Root canal treatment.'],
            ['Treated with an oral anti-fungal drug such as fluconazole.'],
            ['Do brushing twice daily with a fluoride toothpaste and flossing once daily.'],
            ['Root canal treatment.'],
            ['Root planing smoothens the root surfaces, discouraging further buildup of tartar and bacteria.'],
        ];

        for ($i = 0; $i < count($treatments); $i++) {
            DB::table('treatments')->insert([
                'id' => $i + 1,
                'name' => $treatments[$i][0],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
