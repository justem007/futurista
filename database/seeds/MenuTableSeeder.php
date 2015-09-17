<?php

use Illuminate\Database\Seeder;
use Rossina\Menu;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();

        $faker = Faker::create();

        foreach(range(1,9) as $i){

            Menu::create([
                'nome_menu'        => $faker->firstName(),
                'descricao_menu'   => $faker->sentence(),
                'link_menu'        => $faker->firstName()
            ]);
        }
    }
}
