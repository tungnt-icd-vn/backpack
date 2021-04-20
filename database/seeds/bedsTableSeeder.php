<?php

use App\Models\Beds;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beds')->insert([
            'zones_code' => '1',
            'farms_code'    => '1',
            'title' => 'Luống a',
            'status' => 'PUBLISHED',
        ]);
        DB::table('beds')->insert([
            'zones_code' => '2',
            'farms_code'    => '1',
            'title' => 'Luống b',
            'status' => 'PUBLISHED',
        ]);
    }
}
