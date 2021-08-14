<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SubAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_agents')->insert([
            'name' => 'subagent',
            'agent_id'=>'1',
            'township'=>'Yangon',
            'region'=>'Botataung',
            'phno'=>'0978215423',
            'address'=>'No(70),Barbaryaryar Road',
            'email' => 'subagent@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
    }
}
