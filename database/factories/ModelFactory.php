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
        'level' => $faker->randomElement($array = array ('0','1','2')),
        'position' => $faker->randomElement($array = array ('Siswa','Staf','Guru'))
     ];
});

$factory->define(App\Domain\Entities\Activity::class, function (Faker\Generator $faker) {

     return [
        'name' => $faker->name,
        'description' => $faker->randomElement($array = array ('Penting','Santai')),
        'date_activity' => $faker->date,
        'time' => $faker->time,
        'place' => $faker->randomElement($array = array ('Aula','Lapangan','Kelas')),
        'participant' => $faker->randomElement($array = array ('Semua Siswa','Semua Warga Sekolah','Semua Guru','Siswa / Guru Pilihan')),
        'user_id' => $faker->randomElement($array = array ('1','2','3','4','5','6'))
     ];
});