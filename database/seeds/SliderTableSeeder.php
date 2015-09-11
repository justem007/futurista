<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Rossina\Slide;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->truncate();

        $faker = Faker::create();

        foreach(range(1, 8) as $i){

            Slide::create([
                'nome_slide'        => $faker->firstName(),
                'descricao_slide'   => $faker->sentence(),
                'link_slide'        => $faker->sentence()
            ]);
        }
    }
}
