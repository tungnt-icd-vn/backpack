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
        if (DB::table('zones')->where('zones_code', 'zone-a')->count() == 0) {
            DB::table('zones')->insert([
                'zones_code'     => 'zone-a',
                'farms_code'    => 'oriyaco_hcm',
                'title' => 'Khu a',
                'status' => 'PUBLISHED',
            ]);
        }
    }
}
