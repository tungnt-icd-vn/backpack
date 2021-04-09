<?php

use App\Models\Medicines;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'title' => 'Thuốc trừ sâu hữu cơ Ytech',
            'supplier_code' => '1',
            'content' => 'Thuốc trừ sâu hữu cơ  sinh học đã và đang dần thay thế các sản phẩm hóa học',
            'image' => 'https://picsum.photos/300',
            'date_medicines' => '2020-04-02 03:54:58  - 2025-04-02 03:54:58',
            'status' => 'PUBLISHED',  
        ]);
    }
}
