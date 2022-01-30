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
        DB::table('products')->insert([
           [
               'name'=>'IPhone',
            'price'=>'9000',
            'category'=>'Smartphone',
            'description'=>'With 8gb ram and full display',
            'gallery'=>'https://images.unsplash.com/photo-1575695342320-d2d2d2f9b73f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c21hcnQlMjBwaG9uZXxlbnwwfHwwfHw%3D&w=1000&q=80',
        ],
        [
             'name'=>'Samsung',
        'price'=>'15000',
        'category'=>'Smartphone',
        'description'=>'Smart Phone  and full display',
        'gallery'=>'https://i.gadgets360cdn.com/large/galaxynote20_onleaks_1590384704316.jpg?downsize=950:*',
    ],
        ]
    );
    }
}
