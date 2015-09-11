<?php

use Illuminate\Database\Seeder;
use Rossina\CamisetaCategoria;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CamisetaCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('camiseta_categorias')->truncate();

        $faker = Faker::create();

        foreach(range(1,8) as $i){

            CamisetaCategoria::create([
                'nome'        => $faker->firstName(),
                'descricao'   => $faker->sentence()
            ]);
        }
    }
}
