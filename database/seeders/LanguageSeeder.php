<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void{{  }}
     */
    public function run()
    {
        DB::table('languages')->insert([
            'language_name' => 'English'
        ]);
        DB::table('languages')->insert([
            'language_name' => 'Indonesian'
        ]);
    }
}
