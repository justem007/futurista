<?php

use Illuminate\Database\Seeder;
use Rossina\Categorias;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->truncate();

        $faker = Faker::create();

        foreach(range(1,8) as $i)
        {
            Categorias::create([
                'nome_categoria'      => $faker->firstName(),
                'descricao_categoria' => $faker->sentence()
            ]);
        }
    }
}
