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
        'level' => $faker->randomElement($array = array ('0','1',)),
        'position' => $faker->randomElement($array = array ('Siswa','Staf','Guru'))
     ];
});

$factory->define(App\Domain\Entities\Activity::class, function (Faker\Generator $faker) {

     return [
        'name' => $faker->randomElement($array = array ('Ulangan','Lomba','Upacara','Rapat','Study Tour','Pertukaran Pelajar')),
        'description' => $faker->randomElement($array = array ('Penting','Santai')),
        'image' => $faker->randomElement($array = array ('http://1.bp.blogspot.com/-au7Gt3nwyIU/VZ3-P2XjlrI/AAAAAAAABa4/ks2Y7UPd2kM/s1600/gb607.jpg')),
        'start_date' => \Carbon\Carbon::now()->subDays(rand(1, 7)),
        'end_date' => \Carbon\Carbon::now()->addDays(rand(1, 7)),
        'time' => $faker->time,
        'place' => $faker->randomElement($array = array ('Aula','Lapangan','Kelas')),
        'participant' => $faker->randomElement($array = array ('Semua Siswa','Semua Warga Sekolah','Semua Guru','Siswa / Guru Pilihan')),
        'status' => $faker->randomElement($array = array ('0','1','2')),
        'user_id' => $faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9'))
     ];
});