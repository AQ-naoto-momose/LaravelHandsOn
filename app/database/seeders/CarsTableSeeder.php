<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cars')->insert([
            'name' => '車1',
            'company_id' => null,
            'cc' => 100,
            'sale_date' => now(),
            'memo' => null,
            'image_url' => 'https://2.bp.blogspot.com/-VGwRa8Gl4KE/WI1zIodXK8I/AAAAAAABBWo/QJudGelKFzcPMTuQvFnLUC-SIYvyc9dtQCLcB/s800/car_side.png',
        ]);
    }
}
