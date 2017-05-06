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

$factory->define(App\Domain\Entities\User::class, function (Faker\Generator $faker) {

     return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->randomElement($array = array ('qwerty','123456')),
        'level' => $faker->numberBetween(0,1,2),
        'position' => $faker->randomElement($array = array ('Siswa','Staf','Guru'))
     ];
});