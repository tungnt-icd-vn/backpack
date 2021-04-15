<?php

use App\Models\Categories_products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_products')->insert([
            'trees_code'    => '1',
            'farms_code'    => '1',
            'zones_code'    => '1',
            'beds_code'    => '1',
            'users_code'    => '1',
            'categories_products_code' => 'cai_thao_01_02_4532_2323',
            'tittle'    => 'Cải thảo V3',
            'date_start'    => '1',
            'date_end'    => '1',
            'status' => 'plan',
        ]);
    }
}
