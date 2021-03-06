<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//         $this->call(UserTableSeeder::class);
//         $this->call(CamisetaCategoriaTableSeeder::class);
//         $this->call(SliderTableSeeder::class);
//         $this->call(CategoriasTableSeeder::class);
//         $this->call(MenuTableSeeder::class);
//         $this->call(SiteBlocoUmTableSeeder::class);
//         $this->call(TituloBlocoTableSeeder::class);
         $this->call(FerramentaBlocoTableSeeder::class);

        Model::reguard();
    }
}
