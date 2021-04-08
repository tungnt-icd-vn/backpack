<?php

use App\Models\Works;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class worksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'title' => 'Tưới cây',
            'content'    => 'Trước khi tưới cây, hãy kiểm tra xem cây của bạn có thực sự cần nước hay không. Vì ngay cả khi đất ở trên bề mặt chậu đã khô thì dưới đáy chậu vẫn có thể ẩm ướt. Hãy ấn ngón tay của bạn vào chậu đến ngập đốt thứ 2, nếu bạn cảm thấy khô ở đầu ngón tay, hãy tưới nước cho cây của mình.',
            'status' => 'PUBLISHED',
            'date' => '2021-04-02 03:54:58',
            'image' => 'https://picsum.photos/200',
        ]);
        DB::table('works')->insert([
            'title' => 'Thu hoạch',
            'content'    => 'Trước khi tưới cây, hãy kiểm tra xem cây của bạn có thực sự cần nước hay không. Vì ngay cả khi đất ở trên bề mặt chậu đã khô thì dưới đáy chậu vẫn có thể ẩm ướt. Hãy ấn ngón tay của bạn vào chậu đến ngập đốt thứ 2, nếu bạn cảm thấy khô ở đầu ngón tay, hãy tưới nước cho cây của mình.',
            'status' => 'PUBLISHED',
            'date' => '2021-04-02 03:54:58',
            'image' => 'https://picsum.photos/300',
        ]);
    }
}
