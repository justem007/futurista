<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Rossina\TituloBloco;

class TituloBlocoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo_blocos')->truncate();

        $faker = Faker::create();

        foreach(range(1, 1) as $i){

            TituloBloco::create([
                'nome_titulobloco'        => $faker->firstName(),
                'descricao_titulobloco'   => $faker->sentence()
            ]);
        }
    }
}
