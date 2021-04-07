<?php

use App\Models\Farms;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('farms')->where('farms_code', 'oriyaco_hcm')->count() == 0) {
            DB::table('farms')->insert([
                'farms_code'     => 'oriyaco_hcm',
                'title'    => 'Oriyaco hcm',
                'location' => 'cu chi - viet nam',
                'status' => 'PUBLISHED',
            ]);
        }
    }
}
