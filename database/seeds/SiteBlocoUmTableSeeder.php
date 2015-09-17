<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Rossina\SiteBlocoUm;

class SiteBlocoUmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_bloco_ums')->truncate();

        $faker = Faker::create();

        foreach(range(1,4) as $i)
        {
            SiteBlocoUm::create([
                'nome_blocoum'       => $faker->firstName(),
                'descricao_blocoum'  => $faker->sentence()
            ]);
        }
    }
}
