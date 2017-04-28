<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(PamDogs\User::class, 10)->create()->each(function($u)
        {
          $u->cuidador()->save(factory(PamDogs\Cuidador::class)->make());
        });


    }
}
