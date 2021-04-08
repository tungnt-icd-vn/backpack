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
        DB::table('farms')->insert([
            'title'    => 'Oriyaco hcm',
            'location' => 'cu chi - viet nam',
            'status' => 'PUBLISHED',
        ]);
    }
}
