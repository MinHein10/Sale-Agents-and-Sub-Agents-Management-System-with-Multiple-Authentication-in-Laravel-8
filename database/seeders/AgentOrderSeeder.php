<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AgentOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'8',
            'quantity'=>'100',
            'is_package'=>'1',
            'package_id'=>'1',
            'payment_methods'=>'KBZ',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'1',

        ]);

        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'1',
            'quantity'=>'50',
            'is_package'=>'0',
            'package_id'=>null,
            'payment_methods'=>'Wave Money',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'0',

        ]);

        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'5',
            'quantity'=>'5800',
            'is_package'=>'1',
            'package_id'=>'8',
            'payment_methods'=>'KBZ',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'1',

        ]);

        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'5',
            'quantity'=>'5000',
            'is_package'=>'0',
            'package_id'=>'10',
            'payment_methods'=>'Wave Money',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'1',

        ]);


        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'10',
            'quantity'=>'8000',
            'is_package'=>'1',
            'package_id'=>'18',
            'payment_methods'=>'Wave Money',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'1',

        ]);


        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'4',
            'quantity'=>'1500',
            'is_package'=>'0',
            'package_id'=>null,
            'payment_methods'=>'Wave Money',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'0',

        ]);

        DB::table('agent_orders')->insert([
            'order_code'=>'1e02-45e45-7u883e',
            'agent_id'=>1,
            'product_id'=>'6',
            'quantity'=>'666',
            'is_package'=>'0',
            'package_id'=>null,
            'payment_methods'=>'Wave Money',
            'payment_slip_images'=>'https://i0.wp.com/www.mmls.biz/wp-content/uploads/2019/05/announcement-bank-commission.jpg?fit=1200%2C628&ssl=1',
            'is_success'=>'0',

        ]);


    }
}
