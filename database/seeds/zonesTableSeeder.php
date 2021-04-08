<?php

use App\Models\Zones;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([
            'farms_code'    => '1',
            'title' => 'Khu a',
            'status' => 'PUBLISHED',
        ]);
    }
}
