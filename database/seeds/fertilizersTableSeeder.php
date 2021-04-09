<?php
use App\Models\Fertilizers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fertilizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fertilizers')->insert([
            'title' => 'phân bón hữu cơ Dtech',
            'supplier_code' => '1',
            'content' => 'Phân bón hữu cơ sinh học đã và đang dần thay thế các sản phẩm phân hóa học vô cơ bởi chất lượng, hiệu quả vượt trội của nó.',
            'image' => 'https://picsum.photos/300',
            'date_fertilizers' => '2020-04-02 03:54:58  - 2025-04-02 03:54:58',
            'status' => 'PUBLISHED',  
        ]);
    }
}
