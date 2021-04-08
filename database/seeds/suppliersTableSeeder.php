<?php

use App\Models\Suppliers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'title' => 'Của hàng 7 mập',
            'local' => 'Châu phú - an giang',
            'email' => 'tungnt@gmail.com',
            'phone' => '0989678578',
            'note' => 'Dịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.',
            'status' => 'PUBLISHED',  
        ]);
    }
}
