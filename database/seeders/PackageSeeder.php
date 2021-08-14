<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၁၂)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'1450',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၅၀)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'1350',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၂၀၀)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'1250',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၅၀၀)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'1150',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၁၀၀၀)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'1050',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'(5g) လက်ကားစျေး',
            'product_id'=>'8',
            'buying_items'=>'အထုပ်(၃၀၀၀)နှင့်အထက်',
            'description'=>'Mask',
            'quantity'=>100,
            'prices'=>'900',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၃၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'350',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၁၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'400',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၅၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'450',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၁၀၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'500',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၃၀၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'550',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၅၀၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'650',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၈၀၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'700',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub လက်ကားစျေး Bonus',
            'product_id'=>'5',
            'buying_items'=>'အချောင်း(၁၀၀၀၀)နှင့်အထက်',
            'description'=>'Bonus ငွေကျပ်',
            'quantity'=>100,
            'prices'=>'800',
            'created_at'=>Carbon::now(),
        ]);


        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'10',
            'buying_items'=>'12PCS',
            'description'=>' Lip Oil လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5765',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'10',
            'buying_items'=>'60PCS',
            'description'=>' Lip Oil လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5245',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'10',
            'buying_items'=>'300PCS',
            'description'=>' Lip Oil လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5170',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'10',
            'buying_items'=>'1500PCS',
            'description'=>' Lip Oil လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5023',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'10',
            'buying_items'=>'4500PCS',
            'description'=>' Lip Oil လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'4800',
            'created_at'=>Carbon::now(),
        ]);




        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'11',
            'buying_items'=>'12PCS',
            'description'=>' Lip Scrub လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5765',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'11',
            'buying_items'=>'60PCS',
            'description'=>' Lip Scrub လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5245',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'11',
            'buying_items'=>'300PCS',
            'description'=>' Lip Scrub လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5170',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'11',
            'buying_items'=>'1500PCS',
            'description'=>' Lip Scrub လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5023',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'11',
            'buying_items'=>'4500PCS',
            'description'=>' Lip Scrub လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'4800',
            'created_at'=>Carbon::now(),
        ]);



        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'6',
            'buying_items'=>'12PCS',
            'description'=>' Gold Digger လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'6650',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'6',
            'buying_items'=>'60PCS',
            'description'=>' Gold Digger လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'6055',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'6',
            'buying_items'=>'300PCS',
            'description'=>' Gold Digger လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5970',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'6',
            'buying_items'=>'1500PCS',
            'description'=>' Gold Digger လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5800',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'6',
            'buying_items'=>'4500PCS',
            'description'=>' Gold Digger လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5540',
            'created_at'=>Carbon::now(),
        ]);





        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'9',
            'buying_items'=>'12PCS',
            'description'=>' Game Changer လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'6650',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'9',
            'buying_items'=>'60PCS',
            'description'=>' Game Changer လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'6055',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'9',
            'buying_items'=>'300PCS',
            'description'=>' Game Changer လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5970',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'9',
            'buying_items'=>'1500PCS',
            'description'=>' Game Changer လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5800',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('packages')->insert([
            'packagename'=>'Lip Rehub, Lip Scrub & Remover လက်ကားစျေးနှုန်း',
            'product_id'=>'9',
            'buying_items'=>'4500PCS',
            'description'=>'Game Changer လက်ကားစျေးနှုန်း',
            'quantity'=>100,
            'prices'=>'5540',
            'created_at'=>Carbon::now(),
        ]);

    }
}
