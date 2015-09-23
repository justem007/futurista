<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Rossina\FerramentasBloco;

class FerramentaBlocoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ferramentas_blocos')->truncate();

        $faker = Faker::create();

        foreach(range(1, 3) as $i){

            FerramentasBloco::create([
                'nome_ferramenta'        => $faker->firstName(),
                'descricao_ferramenta'   => $faker->sentence()
            ]);
        }
    }
}
