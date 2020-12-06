<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'oppo',
            'price'=>'$500',
            'category'=>'mobile',
            'description'=>'20RAM',
            'gallery'=>'https://images.livemint.com/img/2019/12/25/600x338/HonorV10-kjUD--621x414@LiveMint_1577285895418.jpg',
            ],
            [
                'name'=>'SoniTV',
            'price'=>'$3000',
            'category'=>'tv',
            'description'=>'better sound system',
            'gallery'=>'https://cdn.mos.cms.futurecdn.net/78kzT5oZeDve55LifhMHZ3.jpg',
            ],
            [
                'name'=>'Panasonic TV',
            'price'=>'$2000',
            'category'=>'tv',
            'description'=>'better image quality',
            'gallery'=>'https://global.appmifile.com/webfile/globalimg/in/cms/A7442D32-F379-BD0A-4B22-A262258E2756.jpg',
            ],
            [
                'name'=>'LG mobile',
            'price'=>'$300',
            'category'=>'mobile',
            'description'=>'200RAM',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/iqoo-3-db-386x800-1582613523.jpg',
            ],
            [
                'name'=>'LG fridge',
            'price'=>'$1000',
            'category'=>'fridge',
            'description'=>'faster cooling',
            'gallery'=>'https://www.lg.com/in/images/refrigerators/md06236177/gallery/GL-T292RSCY-Refrigerators-Front-View-Top-Door-Open-Without-Content-D-05.jpg',
            
            ]
        ]);
    }
}
