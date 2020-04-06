<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert(
            ['raca' => 'CABRITO',
             'nome' => 'VOCÊ É UM BAITOLÃO CABRITO' 
            ]);
        }
}
