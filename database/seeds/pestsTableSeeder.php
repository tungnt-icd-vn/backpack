<?php

use App\Models\Pests;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pests')->insert([
            'title' => 'Sâu đục thân',
            'content' => 'Sâu đục thân là loại côn trùng sống ký sinh trong thân của cây trồng',
            'image' => 'https://picsum.photos/300',
            'dangerous' => 'high',  
            'status' => 'PUBLISHED',  
        ]);
    }
}
