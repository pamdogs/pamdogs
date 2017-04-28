<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*
$factory->define(PamDogs\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(PamDogs\User::class, function(Faker\Generator $faker){
  $array = [
    'nombre' => $faker->firstNameMale,
    'apellido' => $faker->lastName,
    'email' => $faker->safeEmail,
    'password' => bcrypt('123'),
    'avatar' => $faker->imageUrl($width = 250, $height = 250)

  ];
  return $array;
});

$factory->define(PamDogs\Cuidador::class, function(Faker\Generator $faker){
  $array = [
    'titulo' => $faker->title,
    'descripcion' => $faker->text,
    'latitud' => $faker->latitude,
    'longitud' => $faker->longitude

  ];
  return $array;
});
