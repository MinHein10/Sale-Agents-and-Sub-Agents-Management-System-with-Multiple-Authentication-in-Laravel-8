<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([
            'name' => 'agent1',
            'township'=>'Yangon',
            'region'=>'Botataung',
            'phno'=>'0978215423',
            'address'=>'No(70),Barbaryaryar Road',
            'email' => 'agent1@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent2',
            'township'=>'Yangon',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent2@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent3',
            'township'=>'Yangon',
            'region'=>'TarMway',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent3@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent4',
            'township'=>'Yangon',
            'region'=>'SuLay',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent4@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent5',
            'township'=>'Yangon',
            'region'=>'MayNiGone',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent5@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent6',
            'township'=>'Mandalay',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent6@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent7',
            'township'=>'Mandalay',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent7@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent8',
            'township'=>'Mandalay',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent8@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent9',
            'township'=>'Mandalay',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent9@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
        DB::table('agents')->insert([
            'name' => 'agent10',
            'township'=>'Mandalay',
            'region'=>'SanChaung',
            'phno'=>'097895202',
            'address'=>'No(65),Barbaryaryar Road',
            'email' => 'agent10@gmail.com',
            'password' => Hash::make('password'),
            'created_at'=>Carbon::now(),
        ]);
    }
}
