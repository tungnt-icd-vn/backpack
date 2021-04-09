<?php

use App\Models\Trees;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class treesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trees')->insert([
            'title' => 'cải thảo',
            'supplier_code' => '1',
            'content' => 'Bắp cải thảo còn được gọi là cải bao, cải cuốn, cải bắp tây (danh pháp ba phần: Brassica rapa',
            'image' => 'https://picsum.photos/300',
            'date_harvest' => '3',
            'status' => 'PUBLISHED',  
        ]);
        DB::table('trees')->insert([
            'title' => 'cải trời',
            'supplier_code' => '2',
            'content' => 'Bắp cải trời còn được gọi là cải bao, cải cuốn, cải bắp tây (danh pháp ba phần: Brassica rapa',
            'image' => 'https://picsum.photos/300',
            'date_harvest' => '2',
            'status' => 'PUBLISHED',  
        ]);
    }
}
