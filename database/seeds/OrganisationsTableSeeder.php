<?php

use Illuminate\Database\Seeder;
use App\Models\Organisation;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisation::truncate();

    	$organisations = [
            [
                'name' => 'VAC',
                'status' => 'active'
            ],
            [
                'name' => 'Rupsha GonoSastho',
                'status' => 'active'
            ],
        ];

        foreach ($organisations as $organisation) {
            Organisation::create($organisation);
        }
    }
}
