<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Min Hein Thant',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
    }
}
