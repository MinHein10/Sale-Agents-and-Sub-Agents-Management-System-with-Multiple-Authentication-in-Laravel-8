<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Face',
            'photo'=>null,
            'description'=>'Details for face',
            'created_at'=>Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Eyes',
            'photo'=>null,
            'description'=>'Details for Eyes',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Lips',
            'photo'=>null,
            'description'=>'Details for Lips',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Skin',
            'photo'=>null,
            'description'=>'Details for Skin',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Tools and Accessories',
            'photo'=>null,
            'description'=>'Details for Tools and Accessories',
            'created_at'=>Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Sample and small sizes',
            'photo'=>null,
            'description'=>'Details for Sample and small sizes',
            'created_at'=>Carbon::now(),
        ]);

    }
}
