<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefit = [
            [
                'camp_id' => 1,
                'name' => 'Main Laravel bisa dapat 7M'
            ],
            [
                'camp_id' => 1,
                'name' => 'Jago dalam sehari'
            ],
            [
                'camp_id' => 1,
                'name' => 'Diskon 100%'
            ],
            [
                'camp_id' => 1,
                'name' => '1 Jam jago ngoding'
            ],
            [
                'camp_id' => 1,
                'name' => 'Tapi semua itu hanyalah hayalan'
            ],
            [
                'camp_id' => 2,
                'name' => 'Tercipta bukan untukmu'
            ],
            [
                'camp_id' => 2,
                'name' => 'Lebih hemat'
            ],
        ];

        CampBenefit::insert($benefit);
    }
}
