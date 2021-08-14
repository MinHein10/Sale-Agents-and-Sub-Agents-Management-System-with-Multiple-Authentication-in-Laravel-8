<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
            'productname'=>'Youth Glow Collagen Foundation',
            'category_id'=>'1',
            'instock'=>'10',
            'description'=>'Youth Glow Collagen Foundation for Face',
            'prices'=>'10500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Pressed Powder Foundation',
            'category_id'=>'1',
            'instock'=>'10',
            'description'=>'Pressed Powder Foundation for Face',
            'prices'=>'10500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Sugar Scrub',
            'category_id'=>'1',
            'instock'=>'10',
            'description'=>'Sugar Scrub for Face',
            'prices'=>'6500',
            'created_at'=>Carbon::now(),

        ]);

        DB::table('products')->insert([
            'productname'=>'Lipstick',
            'category_id'=>'3',
            'instock'=>'10',
            'description'=>'Lipstick for Lips',
            'prices'=>'8500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Lip Rehab (Peachy, Juicy, Babe)',
            'category_id'=>'3',
            'instock'=>'10',
            'description'=>'Lip Rehab (Peachy, Juicy, Babe) for Lips',
            'prices'=>'6500',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('products')->insert([
            'productname'=>'Lip Rehab(Gold Digger)',
            'category_id'=>'3',
            'instock'=>'10',
            'description'=>'Lip Rehab(Gold Digger) for Lips',
            'prices'=>'7500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Australian Pink Clay Mask',
            'category_id'=>'4',
            'instock'=>'10',
            'description'=>'Australian Pink Clay Mask for Skin',
            'prices'=>'12900',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Australian Pink Clay Mask (Satchel)',
            'category_id'=>'4',
            'instock'=>'10',
            'description'=>'Australian Pink Clay Mask (Satchel) for Skin',
            'prices'=>'1750',
            'created_at'=>Carbon::now(),

        ]);

        DB::table('products')->insert([
            'productname'=>'Game Changer',
            'category_id'=>'5',
            'instock'=>'10',
            'description'=>'Game Changer for Accessories',
            'prices'=>'7500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Lip Oil',
            'category_id'=>'3',
            'instock'=>'10',
            'description'=>'Lip Oil for Lips',
            'prices'=>'6500',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'productname'=>'Lip Scrub',
            'category_id'=>'3',
            'instock'=>'10',
            'description'=>'Lip Scrub for Lips',
            'prices'=>'6500',
            'created_at'=>Carbon::now(),
        ]);


    }
}
