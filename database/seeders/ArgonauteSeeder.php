<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArgonauteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('argonautes')->insert([
            [
                'nom' => 'Eleftheria'
            ],
            [
                'nom' => 'Gennadios'
            ],
            [
                'nom' => 'Lysimachos'
            ],
        ]);
    }
}
