<?php

use Illuminate\Database\Seeder;
use App\Models\DonationArea;

class DonationAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonationArea::truncate();

    	$donation_areas = [
            [
                'area_name' => 'Khulna University',
                'lat' => '22.8031',
                'long' => '89.5323',
                'status' => 'active'
            ]
        ];

        foreach ($donation_areas as $donation_area) {
            DonationArea::create($donation_area);
        }
    }
}
